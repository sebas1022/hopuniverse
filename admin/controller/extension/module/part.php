<?php
class ControllerExtensionModulePart extends Controller
{
    private $error = [];
    public function index()
    {
        $this->load->language("extension/module/part");
        $this->load->model("tool/image");
        $this->load->model("setting/setting");
        if ($this->request->server["REQUEST_METHOD"] == "POST" && $this->validate()) {
            $this->model_setting_setting->editSetting("part", $this->request->post);
            $this->session->data["success"] = $this->language->get("text_success");
             if(isset($this->request->post['save_stay']) and $this->request->post['save_stay']=1)
			$this->response->redirect($this->url->link('extension/module/part', 'user_token=' . $this->session->data['user_token'], true));
			else
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }
        $this->document->addScript("view/javascript/summernote/summernote.js");
        $this->document->addScript("view/javascript/summernote/summernote-image-attributes.js");
        $this->document->addScript("view/javascript/summernote/opencart.js");
        $this->document->addStyle("view/javascript/summernote/summernote.css");
        $this->document->addStyle("view/stylesheet/codemirror/lib/codemirror.css?");
        $this->document->addStyle("view/stylesheet/codemirror/mode/theme/monokai.css?");
        $this->document->addScript("view/javascript/codemirror/lib/codemirror.js");
        $this->document->addScript("view/javascript/codemirror/mode/css/css.js");
        $this->document->addScript("view/javascript/codemirror/mode/javascript/javascript.js");
        $data["heading_title"] = $this->language->get("heading_title");
        $data["user_token"] = $this->session->data["user_token"];
        if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
        $data["breadcrumbs"] = [];
        $data["breadcrumbs"][] = [
            "text" => $this->language->get("text_home"),
            "href" => $this->url->link("common/dashboard", "user_token=" . $this->session->data["user_token"], true),
        ];
        $data["breadcrumbs"][] = [
            "text" => $this->language->get("text_extension"),
            "href" => $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true),
        ];
        $data["breadcrumbs"][] = [
            "text" => $this->language->get("heading_title"),
            "href" => $this->url->link("extension/module/part", "user_token=" . $this->session->data["user_token"], true),
        ];
       $data['action'] = $this->url->link('extension/module/part', 'user_token=' . $this->session->data['user_token'], true);
        $data["cancel"] = $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=module", true);
        $this->load->model("localisation/language");
        $data["languages"] = $this->model_localisation_language->getLanguages();
        $data["lang"] = $this->language->get("lang");
        $config = [
            "part_url" => [],
            "part_sticky_header" => "1", 
            "part_color_main" => "",
			"part_color_main2" => "",
			"part_color_main3" => "",
            "part_text_color" => "",
            "part_text_color2" => "",
            "part_font" => "",
            "part_custom_css" => "",
            "part_custom_js" => "",
        ];
        foreach ($config as $key => $result) {
            if (isset($this->request->post[$key])) {
                $data[$key] = $this->request->post[$key];
            } elseif (isset($setting_info[$key])) {
                $data[$key] = $setting_info[$key];
            } else {
                $data[$key] = $this->config->get($key);
            }
        }
        $data["header"] = $this->load->controller("common/header");
        $data["column_left"] = $this->load->controller("common/column_left");
        $data["footer"] = $this->load->controller("common/footer");
        $this->response->setOutput($this->load->view("extension/module/part", $data));
    }
    protected function validate()
    {
        if (!$this->user->hasPermission("modify", "extension/module/part")) {
            $this->error["warning"] = $this->language->get("error_permission");
        }
        if (isset($this->request->post["part_url"])) {
            $menu_url = $this->request->post["part_url"];
            foreach ($menu_url as $key => $entry) {
                foreach ($entry["name"] as $language_id => $name) {
                    if (empty($name)) {
                        $this->error["part_url"][$key]["name"][$language_id] = true;
                    }
                }
                foreach ($entry["url"] as $language_id => $url) {
                    if (empty($url)) {
                        $this->error["part_url"][$key]["url"][$language_id] = true;
                    }
                }
            }
        }
       
        return !$this->error;
    }
    public function install()
    {
        $this->load->model("setting/setting");
        $this->load->model("setting/module");
        $config = [
		"part_sticky_header" => "1",
		"part_color_main3" => "#373c3f",
		"part_color_main2" => "#A3A3A3",
        "part_color_main" => "#4c6cdd",
        "part_text_color" => "#232628",
        "part_text_color2" => "#fff",
        ];
        $data_module = ["status" => 1];
        $this->model_setting_setting->editSetting("part", $config);
    }
    public function uninstall()
    {
        $this->load->model("setting/setting");
        $this->model_setting_setting->deleteSetting("part");
    }
}
