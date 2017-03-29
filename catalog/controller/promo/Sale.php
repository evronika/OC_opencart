<?php
class ControllerPromotionSale extends Controller {
	public function index() {
		echo "Hi";
		$this->load->model('catalog/product');
		$product_info = $this->model_catalog_product->getProducts();
		echo "<pre>";
//		print_r ($product_info);
		$fp = [];
		array_push($fp, "product_id");
		array_push($fp, "meta_title");
		array_push($fp, "quantity");
		print_r $fp;
		foreach ($product_info as $key) {
			foreach ($key as $i=>$j) {
				
				echo $j."<br>";
				switch ($i){
					case "product_id":
					file_put_contents('./data.csv',$i, FILE_APPEND | LOCK_EX);
					continue;
					case "meta_title":
					file_put_contents('./data.csv',$i, FILE_APPEND | LOCK_EX);
					continue;
					case "quantity":
					file_put_contents('./data.csv',$i, FILE_APPEND | LOCK_EX);
					continue;
				}
			}

		}

	}
}