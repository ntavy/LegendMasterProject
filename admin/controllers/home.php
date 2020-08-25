<?php 
class HomeAdminController extends Controller{
    public function index(){
        $this->model('brand');
        $this->model('supplier');
        $this->model('product');
        $listBrands = Brand::getAll();
        $listSuppliers = Supplier::getAll();
//        print_r($listBrands);
        return $this->view('home', ['listBrands'=>$listBrands, 'listSuppliers'=>$listSuppliers]);
    }

//    public function getBrandNameList(){
//        $brandModel = $this->model('brand');
//        $listBrands = Brand::getAll();
//        $listName = [];
//        foreach ($listBrands as $item){
//            echo $item->name;
//            $listName = $item->name;
//        }
//        return $listName;
//    }

    public function addProduct(){
        $proType =  $_POST["proType"];
        $proName = $_POST["proName"];
        $proDesc = $_POST["proDesc"];
        $proBrand = $_POST["proBrand"];
        $proSupplier = $_POST["proSupplier"];
        $proPurchasedPrice = $_POST["proPurchasedPrice"];
        $proSalePrice = $_POST["proSalePrice"];
        $proQuantity = $_POST["proQuantity"];
        $proPhoto = $_POST["proPhoto"];

        $this->model('product');
        Product::insertProduct($proName, $proDesc, $proBrand, $proSupplier, $proQuantity, $proQuantity,$proType, $proPurchasedPrice, $proSalePrice,
            100, '', date("Y/m/d H:i:s"),date("Y/m/d H:i:s"));

    }
}
?>