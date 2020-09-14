<?php 
class ShoppingController extends Controller{
    public function index(){
        $this->model('product'); //create instance product model before call function in Product model
        $this->model('brand'); //create instance brand model before call function in Brand model.
        $listProducts = Product::getAll();
        $listBrands = Brand::getAll();
        //print_r($listProducts);
        return $this->view('shopping', ['listProducts'=>$listProducts, 'listBrands'=>$listBrands]);
    }

    public function viewproduct($proCode){
        return $this->view('product-detail', ['test'=>1]);
    }

}
?>