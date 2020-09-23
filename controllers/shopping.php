<?php

class ShoppingController extends Controller
{
    private $listProducts;
    private $listBrands;
    private $itemPerPage = 3;
    private $totalPages = 0;

    public function index()
    {
        $this->model('product'); //create instance product model before call function in Product model
        $this->model('brand'); //create instance brand model before call function in Brand model.

        $totalItems = Product::getTotalProductNumber();
        $this->totalPages = ceil($totalItems / $this->itemPerPage);

        $offset = 0;
        $this->listProducts = Product::getProductByOffset($offset, $this->itemPerPage);
        $this->listBrands = Brand::getAll();
        $_SESSION["listBrands"] = $this->listBrands;        //store in session for reload later.



        //print_r($listProducts);
        return $this->view('shopping', ['activeMenu' => 'shopping', 'listProducts' => $this->listProducts,
            'listBrands' => $this->listBrands, 'totalPages' => $this->totalPages, 'currentPage' => 1]);
    }

    public function searchProduct()
    {
        $proType = "";
        $proBrand = 0;
        $sortBy = "name";
        echo $_POST["beverage"];
        if ($_POST["beverage"] != "") {
            $proType = $_POST["beverage"];

        }
        echo $proType;
        if ($_POST["brand"] != "") {
            $proBrand = $_POST["brand"];
        }
        if ($sortBy != "") {
            $sortBy = $_POST["sort_by"];
        }
        $this->model('product');
        $this->listProducts = Product::searchProduct($proType, $proBrand, $sortBy);

        getSession();

        return $this->view('shopping', ['activeMenu' => 'shopping', 'listProducts' => $this->listProducts, 'listBrands' => $this->listBrands]);
    }

    public function page($pageNumber){
        $offset = ($pageNumber-1) * $this->itemPerPage;

        $this->model('product');
        $this->listProducts = Product::getProductByOffset($offset, $this->itemPerPage);

        $totalItems = Product::getTotalProductNumber();
        $this->totalPages = ceil($totalItems / $this->itemPerPage);

        $this->getSession();

        return $this->view('shopping', ['activeMenu' => 'shopping', 'listProducts' => $this->listProducts,
            'listBrands' => $this->listBrands, 'totalPages' => $this->totalPages, 'currentPage' => $pageNumber]);
    }

    public function getSession(){
        $this->listBrands = $_SESSION["listBrands"];

    }


}

?>