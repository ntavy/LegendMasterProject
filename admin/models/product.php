<?php
class Product {
//    public $proCode;
//    public $proName;
//    public $proDescription;
//    public $brandID;
//    public $supplierCode;
//    public $importedQuantity;
//    public $remainQuantity;
//    public $typeCode;
//    public $purchasedPrice;
//    public $salePrice;
//    public $sizePerPack;
//    public $imagePath;
//    public $addedDate;
//    public $updatedDate;


//    public function __construct($proCode, $proName, $proDescription, $brandID, $supplierCode, $importedQuantity, $remainQuantity, $typeCode, $purchasedPrice)
//    {
////        $this->brandID = $brandID;
////        $this->name = $name;
////        $this->description = $description;
//    }


    public static function getAll(){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM product');
        foreach($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }

    public static function insertProduct($proName, $proDescription, $brandID, $supplierCode, $importedQuantity, $remainQuantity, $typeCode, $purchasedPrice, $salePrice, $sizePerPack, $imagePath, $addedDate, $updatedDate){
        $db = Database::getInstance();
        try {

            $sql = "INSERT INTO product (proName, proDescription, brandID, supplierCode, importedQuantity, remainQuantity, typeCode, purchasedPrice, salePrice, sizePerPack, imagePath, addedDate, updatedDate)
                     VALUES ('".$proName."', '".$proDescription."', ".$brandID.", ".$supplierCode.", ".$importedQuantity.", ".$remainQuantity.", '".$typeCode."', ".$purchasedPrice.", ".$salePrice.", ".$sizePerPack.", '".$imagePath."', '".$addedDate."', '".$updatedDate."')";
            // use exec() because no results are returned
            $db->exec($sql);
            echo "New record created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    }
}