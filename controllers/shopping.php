<?php 
class ShoppingController extends Controller{
    public function index(){
        $productModel = $this->model('product');
        $listProducts = Product::getAll();
        print_r($listProducts);
        $this->view('shopping');
    }
}
?>