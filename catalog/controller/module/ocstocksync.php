<?php

class ControllerModulePbStaticHtml extends Controller {
	protected function index($setting) {
		//Load the language file for this module - catalog/language/module/my_module.php
		$this->language->load('module/pb_static_html');

		//Get the title from the language file
      	$this->data['heading_title'] = (isset($setting['heading'])) ? $setting['heading'] : null;

		//Load any required model files - catalog/product is a common one, or you can make your own DB access
		//methods in catalog/model/module/my_module.php
		//$this->load->model('module/pb_static_html');

		//Example functionality: pull through customer firstnames and make them available to the view.
		//$this->data['customers'] = $this->model_module_my_module->getCustomerFirstnames();
		$this->data['content'] = $setting['content'];

		//Choose which template to display this module with
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/pb_static_html.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/pb_static_html.tpl';
		} else {
			$this->template = 'default/template/module/pb_static_html.tpl';
		}

		//Render the page with the chosen template
		$this->render();
	}
}
?>