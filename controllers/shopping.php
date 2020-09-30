<?php

class ShoppingController extends Controller
{
    private $listProducts;
    private $listBrands;
    private $itemPerPage = 3;
    private $totalPages = 0;

    public function index()
    {
        //unset is searching session
        unset($_SESSION['isSearching']);
        unset($_SESSION['searchByBeverage']);
        unset($_SESSION['searchByBrand']);
        unset($_SESSION['sortBy']);

        $this->model('product'); //create instance product model before call function in Product model
        $this->model('brand'); //create instance brand model before call function in Brand model.

        $totalItems = Product::getTotalProductNumber();
        $this->totalPages = ceil($totalItems / $this->itemPerPage);

        $offset = 0;
        $this->listProducts = Product::getProductByOffset($offset, $this->itemPerPage);
        $this->listBrands = Brand::getAll();



        //print_r($listProducts);
        return $this->view('shopping', ['activeMenu' => 'shopping', 'listProducts' => $this->listProducts,
            'listBrands' => $this->listBrands, 'totalPages' => $this->totalPages, 'currentPage' => 1]);
    }

    public function searchProduct()
    {
        $proType = "";
        $proBrand = 0;
        $sortBy = "name";
        $offset = 0;


        if ( isset($_POST["beverage"])) {
            $proType = $_POST["beverage"];
            $_SESSION['searchByBeverage'] = $proType;
        }
        if ( isset($_POST["brand"]) ){
            $proBrand = $_POST["brand"];
            $_SESSION['searchByBrand'] = $proBrand;

        }
        if (isset($_POST["sort_by"])) {
            $sortBy = $_POST["sort_by"];
            $_SESSION['sortBy'] = $sortBy;

        }

        //store is searching
        $_SESSION['isSearching'] = true;

        $this->model('product'); //create instance product model before call function in Product model
        $this->model('brand'); //create instance brand model before call function in Brand model.

        $this->listProducts = Product::searchProduct($proType, $proBrand, $sortBy, $offset, $this->itemPerPage);
        $totalItems = Product::searchProductTotal($proType, $proBrand, $sortBy, $offset, $this->itemPerPage);
        $this->listBrands = Brand::getAll();


        //paging
        $this->totalPages = ceil($totalItems / $this->itemPerPage);



        return $this->view('shopping', ['activeMenu' => 'shopping', 'listProducts' => $this->listProducts,
                        'listBrands' => $this->listBrands ,'totalPages' => $this->totalPages, 'currentPage' => 1
            ]
        );
    }

    public function page($pageNumber){
        $proType = "";
        $proBrand = 0;
        $sortBy = "name";
        $totalItems = 0;
        $offset = ($pageNumber-1) * $this->itemPerPage;

        $this->model('product');
        $this->model('brand'); //create instance brand model before call function in Brand model.
        if(isset($_SESSION['isSearching'])){
            if(isset($_SESSION['searchByBeverage'])){
                $proType = $_SESSION['searchByBeverage'];
            }
            if(isset($_SESSION['searchByBrand'])){
                $proBrand = $_SESSION['searchByBrand'];
            }
            if(isset($_SESSION['sortBy'])){
                $sortBy = $_SESSION['sortBy'];
            }
            $this->listProducts = Product::searchProduct($proType, $proBrand, $sortBy, $offset, $this->itemPerPage);
            $totalItems = Product::searchProductTotal($proType, $proBrand, $sortBy, $offset, $this->itemPerPage);
            $this->totalPages = ceil($totalItems / $this->itemPerPage);
        }else{
            $this->listProducts = Product::getProductByOffset($offset, $this->itemPerPage);
            $totalItems = Product::getTotalProductNumber();
            $this->totalPages = ceil($totalItems / $this->itemPerPage);
        }


        $this->listBrands = Brand::getAll();

        return $this->view('shopping', ['activeMenu' => 'shopping', 'listProducts' => $this->listProducts,
            'listBrands' => $this->listBrands, 'totalPages' => $this->totalPages, 'currentPage' => $pageNumber]);
    }



}

?>