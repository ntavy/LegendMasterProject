<?php 
class HomeAdminController extends Controller{
    public function index(){
        echo 'index';
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
        $target_dir = UPLOAD_DIR;

        $uploadOk = 1;

        $fileName = basename($_FILES["proPhoto"]["name"]);
        $target_file = $target_dir . basename($_FILES["proPhoto"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["proPhoto"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }


        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["proPhoto"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["proPhoto"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["proPhoto"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $proType =  $_POST["proType"];
        $proName = $_POST["proName"];
        $proDesc = $_POST["proDesc"];
        $proBrand = $_POST["proBrand"];
        $proSupplier = $_POST["proSupplier"];
        $proSalePrice = 0;
        $proPurchasedPrice = 0;
        $proQuantity = 0;
        if(isset($_POST["proPurchasedPrice"])){
            $proPurchasedPrice = $_POST["proPurchasedPrice"];
        }
        if(isset($_POST["proSalePrice"])){
            $proSalePrice = $_POST["proSalePrice"];
        }
        if(isset($_POST["proQuantity"])){
            $proQuantity = $_POST["proQuantity"];
        }
        $proPhoto = $fileName;

        $this->model('product');
        Product::insertProduct($proName, $proDesc, $proBrand, $proSupplier, $proQuantity, $proQuantity,$proType, $proPurchasedPrice, $proSalePrice,
            100, $proPhoto, date("Y/m/d H:i:s"),date("Y/m/d H:i:s"));

    }
}
?>