<?php
class ControllerToolSitemap extends Controller {
	public function index(){
		$out  = '<?xml version="1.0" encoding="UTF-8"?>';
		$out .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
		$this->load->model('catalog/product');
		$results = $this->model_catalog_product->getProducts();
		echo "<pre>";
//		print_r ($results);
		
		$ff=[];
		$fp = [];
		foreach ($results as $key) {
			$loc='http://localhost/index.php?route=product/product&product_id=';
			$fp=[];
			foreach ($key as $i=>$j) {
				switch ($i){
					case "product_id":
					$loc=$loc+$j;
					array_push($fp, $j);
					continue;
					case "date_modified":
					array_push($fp, $j);
					continue;
				}
			}
			array_push($ff, $fp);
		}
	//	print_r ($ff);
		
		foreach ($results as $key) {
			$out .='<url>';
			
			foreach ($ff as $k){
				foreach ($k as $i=>$j){
					$out .='<loc>'.$loc.$k[0].'</loc><br>';
					$out .='<lastmod>'.$loc.$k[1].'</lastmod><br>';
				}
			}
			$out .='<changefreq>weekly</changefreq><br>';
			$out .='<priority>1.0</priority><br>';
			$out .='</url><br>';
		} 
		print_r ($out);
	}
}