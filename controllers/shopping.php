<?php 
class ShoppingController extends Controller{
    private $listProducts;
    private $listBrands;

    public function index(){
        $this->model('product'); //create instance product model before call function in Product model
        $this->model('brand'); //create instance brand model before call function in Brand model.
        $this->listProducts = Product::getAll();
        $this->listBrands = Brand::getAll();
        $_SESSION["listBrands"] = $this->listBrands;
        //print_r($listProducts);
        return $this->view('shopping', ['activeMenu'=>'shopping', 'listProducts'=>$this->listProducts, 'listBrands'=>$this->listBrands]);
    }

    public function searchProduct(){
        $proType = "";
        $proBrand = 0;
        $sortBy = "name";
        echo $_POST["beverage"];
        if($_POST["beverage"] != ""){
            $proType = $_POST["beverage"];

        }
        echo $proType;
        if($_POST["brand"] != ""){
            $proBrand = $_POST["brand"];
        }
        if($sortBy != ""){
            $sortBy = $_POST["sort_by"];
        }
        $this->model('product');
        $this->listProducts = Product::searchProduct($proType, $proBrand, $sortBy);
        $this->listBrands = $_SESSION["listBrands"];
        return $this->view('shopping', ['activeMenu'=>'shopping', 'listProducts'=>$this->listProducts, 'listBrands'=>$this->listBrands]);
    }



}
?>