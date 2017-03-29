<?php
class ControllerExtensionModuleUpdateprice2 extends Controller {
	public function index() {
		$this->load->model('catalog/product');
		$product_info = $this->model_catalog_product->getProducts();
		echo "<pre>";
		print_r ($product_info);
		foreach ($product_info as $key) {
			$fp=[];
			foreach ($key as $i=>$j) {
				switch ($i){
					case "product_id":
					array_push($fp, $j);
					continue;
					case "meta_title":
					array_push($fp, $j);
					continue;
					case "quantity":
					array_push($fp, $j);
					continue;
				}
			}
			array_push($ff, $fp);
		}
		print_r ($ff);
	}
}