<?php 
class HomeController extends Controller{
    public function index(){
        $brandModel = $this->model('brand');
        $listBrands = Brand::getAll();
        //print_r($listBrands);
        $this->view('home');
    }
}
?>