<?php
class ManageProductsAdminController extends Controller{
    private $listSuppliers;
    private $listBrands;

    public function __construct()
    {
        $this->model('brand');
        $this->model('supplier');
        $this->model('product');
        $this->listBrands = Brand::getAll();
        $this->listSuppliers = Supplier::getAll();
    }

    public function index(){

        $listProducts = Product::getAll();
        //print_r($listProducts);
        return $this->view('manage-products', ['listBrands'=>$this->listBrands, 'listSuppliers'=>$this->listSuppliers, 'listProducts'=>$listProducts]);
    }

    public function edit($proCode){
        $listBrands = Brand::getAll();
        //print_r($listBrands);
        echo 'procode'.$proCode;
        return $this->view('home', ['listBrands'=>$listBrands, 'listSuppliers'=>$this->listSuppliers, 'isUpdate'=>true, 'proCode'=>$proCode]);
    }
}
?>