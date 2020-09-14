<?php 
class ShoppingController extends Controller{
    public function index(){
        $productModel = $this->model('product');
        $listProducts = Product::getAll();
        //print_r($listProducts);
        return $this->view('shopping', ['listProducts'=>$listProducts]);
    }

    public function viewproduct($proCode){
        return $this->view('product-detail', ['test'=>1]);
    }

}
?>