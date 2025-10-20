<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/ocslideshow/ocslideshow_form.twig */
class __TwigTemplate_3fbdf34a78f7956ae0c93b01cdc66a8a3caf9f6c7e817c04280f2e0f8e242c3e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 2
        $context["token_random"] = twig_random($this->env);
        // line 3
        echo "<div id=\"content\">
     <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-html\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
              <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "              </ul>
        </div>
    </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          
           <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 37
        echo "                </div>
              </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-effect\">";
        // line 40
        echo ($context["entry_effect"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                    <select name=\"effect\" id=\"input-effect\" class=\"form-control\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["effect_option"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["effect1"]) {
            // line 44
            echo "                                    <option  ";
            if ((twig_trim_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["effect1"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["value"] ?? null) : null)) == twig_trim_filter(($context["effect"] ?? null)))) {
                echo "  selected =\"selected\"  ";
            }
            echo "  value=\"";
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["effect1"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["value"] ?? null) : null)) {
                echo "  ";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["effect1"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["label"] ?? null) : null);
                echo "  ";
            }
            echo "\">";
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["effect1"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["value"] ?? null) : null)) {
                echo "  ";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["effect1"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["label"] ?? null) : null);
                echo "  ";
            }
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </select>
                </div>
            </div>
            
            
            <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-delay\">";
        // line 52
        echo ($context["entry_delay"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"delay\" value=\"";
        // line 54
        echo ($context["delay"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_delay"] ?? null);
        echo "\" id=\"input-delay\" class=\"form-control\" />
                    <?php if (\$error_delay) { ?>
                    <div class=\"text-danger\">";
        // line 56
        echo ($context["error_delay"] ?? null);
        echo "</div>
                    <?php } ?>
                </div>
            </div>



                    <div class=\"form-group\" >
                        <label class=\"col-sm-2 control-label\" for=\"input-auto\">";
        // line 64
        echo ($context["entry_auto"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"auto\" id=\"input-auto\" class=\"form-control\">
                            ";
        // line 67
        if (($context["auto"] ?? null)) {
            // line 68
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\">";
            // line 69
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 71
            echo "                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 72
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        }
        // line 74
        echo "                          </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-hover\">";
        // line 79
        echo ($context["entry_hover"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"hover\" id=\"input-hover\" class=\"form-control\">
                            ";
        // line 82
        if (($context["hover"] ?? null)) {
            // line 83
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\">";
            // line 84
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 86
            echo "                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        }
        // line 89
        echo "                          </select>
                        </div>
                      </div>
                        
                     <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-nextback\">";
        // line 94
        echo ($context["entry_nextback"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"nextback\" id=\"input-nextback\" class=\"form-control\">
                            ";
        // line 97
        if (($context["nextback"] ?? null)) {
            // line 98
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\">";
            // line 99
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 101
            echo "                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 102
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        }
        // line 104
        echo "                          </select>
                        </div>
                      </div>
                        
                     <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-contrl\">";
        // line 109
        echo ($context["entry_contrl"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"contrl\" id=\"input-contrl\" class=\"form-control\">
                            ";
        // line 112
        if (($context["contrl"] ?? null)) {
            // line 113
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\">";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 116
            echo "                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        }
        // line 119
        echo "                          </select>
                        </div>
                      </div>
                      
                        
                     <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 125
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"status\" id=\"input-status\" class=\"form-control\">
                            ";
        // line 128
        if (($context["status"] ?? null)) {
            // line 129
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\">";
            // line 130
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 132
            echo "                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        }
        // line 135
        echo "                          </select>
                        </div>
                      </div>
                        <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <ul class=\"nav nav-pills nav-stacked\" id=\"module\">
                                        ";
        // line 141
        $context["module_row"] = 0;
        // line 142
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ocslideshow_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow_image"]) {
            // line 143
            echo "                                        <li><a href=\"#tab-module";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["ocslideshow_image"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["key"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-module";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["ocslideshow_image"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["key"] ?? null) : null);
            echo "\\']').parent().remove(); \$('#tab-module";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["ocslideshow_image"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["key"] ?? null) : null);
            echo "').remove(); \$('#module a:first').tab('show');\"></i> ";
            echo ($context["tab_banner"] ?? null);
            echo "  ";
            echo ($context["module_row"] ?? null);
            echo "</a></li>
                                        ";
            // line 144
            $context["module_row"] = (($context["module_row"] ?? null) + 1);
            // line 145
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                        <li id=\"module-add\"><a onclick=\"addModule();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_add_banner"] ?? null);
        echo "</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                            <div class=\"tab-content\">
                            ";
        // line 151
        $context["image_row"] = 0;
        // line 152
        echo "                               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ocslideshow_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow_image"]) {
            // line 153
            echo "                                     <div class=\"tab-pane\" id=\"tab-module";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["ocslideshow_image"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["key"] ?? null) : null);
            echo "\">
                                        <ul class=\"nav nav-tabs\" id=\"language";
            // line 154
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["ocslideshow_image"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["key"] ?? null) : null);
            echo "\">
                                            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 156
                echo "                                            <li><a href=\"#tab-module";
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["ocslideshow_image"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["key"] ?? null) : null);
                echo "-language";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["code"] ?? null) : null);
                echo "/";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                echo "\" /> ";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["language"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["name"] ?? null) : null);
                echo "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                                        </ul>
                                
                                   <div class=\"tab-content\">
                                        
                                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 163
                echo "                                        <div class=\"tab-pane\" id=\"tab-module";
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["ocslideshow_image"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["key"] ?? null) : null);
                echo "-language";
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["language_id"] ?? null) : null);
                echo "\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 165
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["ocslideshow_image"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["key"] ?? null) : null);
                echo "-language";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["language_id"] ?? null) : null);
                echo "\">";
                echo ($context["entry_description"] ?? null);
                echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <textarea data-toggle=\"summernote\" data-lang=\"";
                // line 167
                echo ($context["summernote"] ?? null);
                echo "\" name=\"ocslideshow_image[";
                echo ($context["image_row"] ?? null);
                echo "][ocslideshow_image_description][";
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["language_id"] ?? null) : null);
                echo "][description]\" placeholder=\"";
                echo ($context["entry_description"] ?? null);
                echo "\" id=\"input-description";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["ocslideshow_image"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["key"] ?? null) : null);
                echo "-language";
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["language"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["language_id"] ?? null) : null);
                echo "\" class=\"form-control\">";
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["ocslideshow_image"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["ocslideshow_image_description"] ?? null) : null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[(($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["language"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["language_id"] ?? null) : null)] ?? null) : null)) {
                    echo " ";
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["ocslideshow_image"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["ocslideshow_image_description"] ?? null) : null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[(($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["language"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["description"] ?? null) : null);
                    echo " ";
                } else {
                    echo "  ";
                }
                echo "</textarea>
                                                </div>
                                            </div>

                                        </div>

                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"thumb-image-";
            // line 175
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["ocslideshow_image"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["key"] ?? null) : null);
            echo "-";
            echo ($context["token_random"] ?? null);
            echo "\">";
            echo ($context["entry_image"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <a href=\"\" id=\"thumb-image-";
            // line 177
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["ocslideshow_image"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["key"] ?? null) : null);
            echo "-";
            echo ($context["token_random"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            if ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["ocslideshow_image"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["thumb"] ?? null) : null)) {
                echo " ";
                echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["ocslideshow_image"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["thumb"] ?? null) : null);
                echo " ";
            } else {
                echo "  ";
                echo ($context["placeholder"] ?? null);
                echo " ";
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                                                <input type=\"hidden\"  name=\"ocslideshow_image[";
            // line 178
            echo ($context["image_row"] ?? null);
            echo "][image]\"  value=\"";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["ocslideshow_image"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["image"] ?? null) : null);
            echo "\" id=\"input-image";
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["ocslideshow_image"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["key"] ?? null) : null);
            echo "-";
            echo ($context["token_random"] ?? null);
            echo "\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\" style=\"display: none\">
                                            <label class=\"col-sm-2 control-label\" for=\"thumb-image-";
            // line 183
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["ocslideshow_image"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["key"] ?? null) : null);
            echo "-";
            echo (($context["token_random"] ?? null) + 1);
            echo "\">";
            echo ($context["entry_small_image"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <a href=\"\" id=\"thumb-image-";
            // line 185
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["ocslideshow_image"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["key"] ?? null) : null);
            echo "-";
            echo (($context["token_random"] ?? null) + 1);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["ocslideshow_image"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["small_thumb"] ?? null) : null)) {
                echo " ";
                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["ocslideshow_image"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["small_thumb"] ?? null) : null);
                echo " ";
            } else {
                echo "  ";
                echo ($context["placeholder"] ?? null);
                echo " ";
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                                                <input type=\"hidden\"  name=\"ocslideshow_image[";
            // line 186
            echo ($context["image_row"] ?? null);
            echo "][small_image]\"  value=\"";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["ocslideshow_image"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["small_image"] ?? null) : null);
            echo "\" id=\"input-image";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["ocslideshow_image"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["key"] ?? null) : null);
            echo "-";
            echo (($context["token_random"] ?? null) + 1);
            echo "\" />
                                            </div>
                                        </div>
                                        
                                        
                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
            // line 192
            echo ($context["entry_type"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"ocslideshow_image[";
            // line 194
            echo ($context["image_row"] ?? null);
            echo "][type]\" id=\"input-type\" class=\"form-control\">
                                                    ";
            // line 195
            if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["ocslideshow_image"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["type"] ?? null) : null)) {
                // line 196
                echo "                                                    ";
                if (((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["ocslideshow_image"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["type"] ?? null) : null) == 1)) {
                    // line 197
                    echo "                                                    <option selected=\"selected\" value=\"1\">Type 1</option>
                                                    ";
                } else {
                    // line 199
                    echo "                                                    
                                                    <option value=\"1\">Type 1</option>
                                                    ";
                }
                // line 202
                echo "                                                    ";
                if (((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["ocslideshow_image"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["type"] ?? null) : null) == 2)) {
                    // line 203
                    echo "                                                    <option selected=\"selected\" value=\"2\">Type 2</option>
                                                     ";
                } else {
                    // line 205
                    echo "                                                    <option value=\"2\">Type 2</option>
                                                    ";
                }
                // line 207
                echo "                                                    ";
                if (((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["ocslideshow_image"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["type"] ?? null) : null) == 3)) {
                    // line 208
                    echo "                                                    <option selected=\"selected\" value=\"3\">Type 3</option>
                                                    ";
                } else {
                    // line 210
                    echo "                                                    <option value=\"3\">Type 3</option>
                                                     ";
                }
                // line 212
                echo "                                                     ";
            } else {
                // line 213
                echo "                                                        <option value=\"1\">Type 1</option>
                                                        <option value=\"2\">Type 2</option>
                                                        <option value=\"3\">Type 3</option>
                                                     ";
            }
            // line 217
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-order_image";
            // line 221
            echo twig_get_attribute($this->env, $this->source, $context["ocslideshow_image"], "key", [], "any", false, false, false, 221);
            echo "-language";
            echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 221);
            echo "\">Order</label>
                                            <div class=\"col-sm-1\">
                                                <input type=\"text\" id=\"input-order_image";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["ocslideshow_image"], "key", [], "any", false, false, false, 223);
            echo "-language";
            echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 223);
            echo "\" name=\"ocslideshow_image[";
            echo ($context["image_row"] ?? null);
            echo "][order_image]\" value=\"";
            if (twig_get_attribute($this->env, $this->source, $context["ocslideshow_image"], "order_image", [], "any", true, true, false, 223)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["ocslideshow_image"], "order_image", [], "any", false, false, false, 223);
                echo " ";
            } else {
                echo " ";
            }
            echo "\" placeholder=\"\" class=\"form-control\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 227
            echo ($context["entry_store"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> 
                                                    ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 231
                echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"banner_store[]\" value=\"";
                // line 233
                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["store"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["store_id"] ?? null) : null);
                echo "\" ";
                if (twig_in_filter((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["store"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["store_id"] ?? null) : null), (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["ocslideshow_image"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["banner_store"] ?? null) : null))) {
                    echo "  checked=\"checked\" ";
                }
                echo "  />
                                                        ";
                // line 234
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["store"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["name"] ?? null) : null);
                echo "
                                                    </label>
                                                </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   </div>
                               ";
            // line 243
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 244
            echo "                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                            </div>
                        </div>
                        </div>
                            
                        
          
        </form>
      </div>
    </div>
  </div>
</div>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
    <script type=\"text/javascript\"><!--
    var module_row = ";
        // line 261
        echo ($context["module_row"] ?? null);
        echo ";

    function addModule() {
        var token = Math.random().toString(36).substr(2);

        html  = '<div class=\"tab-pane\" id=\"tab-module' + token + '\">';
        html += '  <ul class=\"nav nav-tabs\" id=\"language' + token + '\">';
        ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 269
            echo "            html += '    <li><a href=\"#tab-module' + token + '-language";
            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["language"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["language_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["language"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["code"] ?? null) : null);
            echo "/";
            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["language"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["language"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["language"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["name"] ?? null) : null);
            echo "</a></li>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "        html += '  </ul>';

        html += '  <div class=\"tab-content\">';


        ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 277
            echo "            html += '    <div class=\"tab-pane\" id=\"tab-module' + token + '-language";
            echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["language"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["language_id"] ?? null) : null);
            echo "\">';

            html += '      <div class=\"form-group\">';
            html += '        <label class=\"col-sm-2 control-label\" for=\"input-description' + token + '-language";
            // line 280
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["language"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["language_id"] ?? null) : null);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>';
            html += '        <div class=\"col-sm-10\"><textarea class=\"form-control summernote\" name=\"ocslideshow_image[' + token + '][ocslideshow_image_description][";
            // line 281
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["language"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["language_id"] ?? null) : null);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description' + token + '-language";
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["language"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["language_id"] ?? null) : null);
            echo "\"></textarea></div>';
            html += '      </div>';
            html += '    </div>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "
        html += '      <div class=\"form-group\">';
        html += '        <label class=\"col-sm-2 control-label\" for=\"input-image' + token + '-language";
        // line 287
        echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["language"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["language_id"] ?? null) : null);
        echo "\">";
        echo ($context["entry_image"] ?? null);
        echo "</label>';

        html += '<div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image' + token + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 289
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"ocslideshow_image[' + token + '][image]\" value=\"\" id=\"input-image' + token + '\" /></div>';
        html += '      </div>';

        html += '<div class=\"form-group\" style=\"display: none;\">';
        html += '<label class=\"col-sm-2 control-label\" for=\"input-image\">'+'";
        // line 293
        echo ($context["entry_small_image"] ?? null);
        echo "'+'</label>';

        html += '<div class=\"col-sm-10\">';
        html += '<a href=\"\" id=\"thumb-image-'+'";
        // line 296
        echo (($context["token_random"] ?? null) + 1);
        echo "'+'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>';
        html += '<input type=\"hidden\"  name=\"ocslideshow_image['+ token +'][small_image]\"  value=\"\" id=\"input-image'+'";
        // line 297
        echo (($context["token_random"] ?? null) + 1);
        echo "'+'\" />';

        html += '</div>';
        html += '</div>';

        html +='  <div class=\"form-group\">';
        html +='<label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 303
        echo ($context["entry_type"] ?? null);
        echo "</label>';
        html +='<div class=\"col-sm-10\">';
        html +='<select name=\"ocslideshow_image[' + token + '][type]\" id=\"input-type\" class=\"form-control\">';
        html +='<option value=\"1\" >Type 1</option><option value=\"2\">Type 2</option><option value=\"3\">Type 3</option>';
        html +='</select>'
        html +='</div></div>'

        html += '      <div class=\"form-group\">';
        html += '        <label class=\"col-sm-2 control-label\" for=\"input-order_image' + token + '-language";
        // line 311
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 311);
        echo "\">Order</label>';
        html += '        <div class=\"col-sm-10\"><input class=\"form-control\" type=\"text\" name=\"ocslideshow_image[' + token + '][order_image]\" placeholder=\"\" id=\"input-order_image' + token + '-language";
        // line 312
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 312);
        echo "\" value=\"\"/></div>';
        html += '      </div>';

        html +='<div class=\"form-group\">';
        html +='<label class=\"col-sm-2 control-label\">";
        // line 316
        echo ($context["entry_store"] ?? null);
        echo "</label>';
        html +='<div class=\"col-sm-10\">'
        html +='<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';

        ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 321
            echo "            html +='<div class=\"checkbox\">';
            html +='<label>';
            html +='<input type=\"checkbox\" name=\"ocslideshow_image[' + token + '][banner_store][]\" value=\"";
            // line 323
            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["store"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["store_id"] ?? null) : null);
            echo "\"  />";
            echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["store"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["name"] ?? null) : null);
            echo " ';
            html +='</label>';
            html +='</div>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "
        html +='</div>';
        html +='</div>';
        html +='</div>';




        html += '  </div>';
        html += '</div>';

        \$('.tab-content:first-child').prepend(html);

        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 341
            echo "            \$('#input-description' + token + '-language";
            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["language"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["language_id"] ?? null) : null);
            echo "').summernote({
                height: 300
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "
        \$('#module-add').before('<li><a href=\"#tab-module' + token + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module' + token + '\\\\\\']\\').parent().remove(); \$(\\'#tab-module' + token + '\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ";
        // line 346
        echo ($context["tab_banner"] ?? null);
        echo " ' + module_row + '</a></li>');

        \$('#module a[href=\\'#tab-module' + token + '\\']').tab('show');

        \$('#language' + token + ' li:first-child a').tab('show');

        module_row++;
    }
    //--></script>
    <script type=\"text/javascript\"><!--
    \$('#module li:first-child a').tab('show');
        ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ocslideshow_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow_image"]) {
            // line 358
            echo "        \$('#language";
            echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["ocslideshow_image"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["key"] ?? null) : null);
            echo " li:first-child a').tab('show');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "    //--></script>
<style type=\"text/css\">
    #module-add img {display:none!important;}
</style>
";
        // line 364
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocslideshow/ocslideshow_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  975 => 364,  969 => 360,  960 => 358,  956 => 357,  942 => 346,  939 => 345,  928 => 341,  924 => 340,  909 => 327,  897 => 323,  893 => 321,  889 => 320,  882 => 316,  875 => 312,  871 => 311,  860 => 303,  851 => 297,  843 => 296,  837 => 293,  828 => 289,  821 => 287,  817 => 285,  803 => 281,  797 => 280,  790 => 277,  786 => 276,  779 => 271,  762 => 269,  758 => 268,  748 => 261,  730 => 245,  724 => 244,  722 => 243,  715 => 238,  705 => 234,  697 => 233,  693 => 231,  689 => 230,  683 => 227,  664 => 223,  657 => 221,  651 => 217,  645 => 213,  642 => 212,  638 => 210,  634 => 208,  631 => 207,  627 => 205,  623 => 203,  620 => 202,  615 => 199,  611 => 197,  608 => 196,  606 => 195,  602 => 194,  597 => 192,  582 => 186,  564 => 185,  555 => 183,  541 => 178,  523 => 177,  514 => 175,  511 => 174,  480 => 167,  471 => 165,  463 => 163,  459 => 162,  453 => 158,  434 => 156,  430 => 155,  426 => 154,  421 => 153,  416 => 152,  414 => 151,  405 => 146,  399 => 145,  397 => 144,  384 => 143,  379 => 142,  377 => 141,  369 => 135,  364 => 133,  359 => 132,  354 => 130,  349 => 129,  347 => 128,  341 => 125,  333 => 119,  328 => 117,  323 => 116,  318 => 114,  313 => 113,  311 => 112,  305 => 109,  298 => 104,  293 => 102,  288 => 101,  283 => 99,  278 => 98,  276 => 97,  270 => 94,  263 => 89,  258 => 87,  253 => 86,  248 => 84,  243 => 83,  241 => 82,  235 => 79,  228 => 74,  223 => 72,  218 => 71,  213 => 69,  208 => 68,  206 => 67,  200 => 64,  189 => 56,  182 => 54,  177 => 52,  169 => 46,  146 => 44,  142 => 43,  136 => 40,  131 => 37,  125 => 35,  123 => 34,  117 => 33,  112 => 31,  106 => 28,  100 => 25,  96 => 23,  88 => 19,  86 => 18,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  54 => 8,  50 => 7,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocslideshow/ocslideshow_form.twig", "");
    }
}
