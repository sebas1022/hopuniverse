<?php
class ControllerExtensionModule4Category extends Controller {
    public function index() {
        $this->load->language('extension/module/4category');

        if (isset($this->request->get['path'])) {
            $parts = explode('_', (string)$this->request->get['path']);
        } else {
            $parts = array();
        }
        if (isset($parts[0])) {
            $data['category_id'] = $parts[0];
        } else {
            $data['category_id'] = 0;
        }
        if (isset($parts[1])) {
            $data['child_id'] = $parts[1];
        } else {
            $data['child_id'] = 0;
        }
        if (isset($parts[2])) {
            $data['child_id_3'] = $parts[2];
        } else {
            $data['child_id_3'] = 0;
        }
        if (isset($parts[3])) {
            $data['child_id_4'] = $parts[3];
        } else {
            $data['child_id_4'] = 0;
        }      
        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
$data['mod'] = 'li-' . mt_rand(1, 99) . mt_rand(100, 999);
        $data['categories'] = array();
        $categories = $this->model_catalog_category->getCategories(0);
        foreach ($categories as $category) {
            $children_data = array();
            if ($category['category_id'] == $data['category_id']) {
                $children = $this->model_catalog_category->getCategories($category['category_id']);
                foreach($children as $child) {
                    $filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);
                    $level_3_data = array();
                    $categories_3 = $this->model_catalog_category->getCategories($child['category_id']);
                    foreach ($categories_3 as $category_3) {
                    $filter_data = array('filter_category_id' => $category_3['category_id'], 'filter_sub_category' => true);
                    $level_4_data = array();
                    $categories_4 = $this->model_catalog_category->getCategories($category_3['category_id']);
                    foreach ($categories_4 as $category_4) {
                        $filter_data = array('filter_category_id' => $category_4['category_id'], 'filter_sub_category' => true);
                        $level_4_data[] = array(
                            'category_id' => $category_4['category_id'],
                            'name' => $category_4['name'],
                            'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $category_3['category_id'] . '_' . $category_4['category_id'])
                        );
                    }
                    $level_3_data[] = array(
                            'category_id' => $category_3['category_id'],
                            'name' => $category_3['name'],
                            'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $category_3['category_id']),
                            'children'   => $level_4_data
                        );
                    }
                    $children_data[] = array(
                        'category_id' => $child['category_id'],
                        'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
                        'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
                        'children'   => $level_3_data
                    );
                }
            }
            $filter_data = array(
                'filter_category_id'  => $category['category_id'],
                'filter_sub_category' => true
            );
            $data['categories'][] = array(
                'category_id' => $category['category_id'],
                'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
                'children'    => $children_data,
                'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
            );
        }
        return $this->load->view('extension/module/4category', $data);
    }
}