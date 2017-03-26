<?php
class ControllerExtensionModuleUpdateprice extends Controller {
	public function index() {
		$this->load->language('extension/module/updateprice');

		$data['heading_title'] = $this->language->get('heading_title');

		return $this->load->view('extension/module/updateprice', $data);
	}
}