<?php 
class ShoppingController extends Controller{
    public function index(){
        $productModel = $this->model('product');
        $listProducts = Product::getAll();
        print_r($listProducts);
        return $this->view('shopping', ['listProducts'=>$listProducts]);
    }
}
?>