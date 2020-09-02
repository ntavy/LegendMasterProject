<?php 
class ProductDetailController extends Controller{
    public function index(){

        $this->view('product-detail');
    }
    
    public function viewproduct($proCode){
        $productModel = $this->model('product');
        $listProducts = Product::getProductByProCode($proCode);
        return $this->view('product-detail', ['listProducts'=>$listProducts]);
    }
}
?>