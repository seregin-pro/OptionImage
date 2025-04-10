<?php
class ModelExtensionModuleOptionsImage extends Model {
	public function getOptionsImageSetting() {
		$data['product_popup_element'] = $this->config->get('module_options_image_product_popup_element');
		$data['product_popup_attr'] = $this->config->get('module_options_image_product_popup_attr');
		$data['product_thumb_element'] = $this->config->get('module_options_image_product_thumb_element');
		$data['product_thumb_attr'] = $this->config->get('module_options_image_product_thumb_attr');
		
		return $data;
	}
}