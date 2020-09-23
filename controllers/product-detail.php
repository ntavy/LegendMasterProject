<?php 
class ProductDetailController extends Controller{
    public function index(){

        $this->view('product-detail');
    }
    
    public function viewproduct($proCode){
        $productModel = $this->model('product');
        $productItem = Product::getProductByProCode($proCode);
        return $this->view('product-detail', ['productItem'=>$productItem, 'activeMenu'=>"shopping"]);
    }
}
?>