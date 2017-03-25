<?php
class ControllerToolSitemap extends Controller {
	public function index(){
		print "Hello";
		$this->load->model('catalog/product');
		$results = $this->model_catalog_product->getProducts();
		echo '<pre>';
	//	print_r ($results);
		
		foreach ($results as $key=>$j) {
			$dom= new DOMDocument;
			$urlset=$dom->createElement('urlset');
			$new = $dom->appendChild($urlset);
			$url = $dom->createElement('url');
			$urlset->appendChild($url);
			$loc = $dom->createElement('loc');
			$urlset->appendChild($url);
			$priority = $dom->createElement('priority');
			$urlset->appendChild($priority);
			echo '<pre>';
			Echo "$urlset";
		}
	}
}