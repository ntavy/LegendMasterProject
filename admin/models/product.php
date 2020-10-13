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
                     VALUES ('".$proName."', '".$proDescription."', ".$brandID.", ".$supplierCode.", ".$importedQuantity.", ".$remainQuantity.", '".$typeCode."', ".$purchasedPrice.", ".$salePrice.", '".$sizePerPack."', '".$imagePath."', '".$addedDate."', '".$updatedDate."')";
//            echo $sql;
            // use exec() because no results are returned
            $db->exec($sql);
            echo "New record created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    }

    public static function getProductByProCode($proCode){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query("SELECT B.name, P.* FROM product P
                                    left join brand B on P.brandID = B.brandID
                                    WHERE P.proCode =" . $proCode);
        $row = $req->fetch();       //fetch one row
        return $row;
    }

    public static function updateProduct($proCode, $proName, $proDescription, $brandID, $supplierCode, $importedQuantity, $remainQuantity, $typeCode, $purchasedPrice, $salePrice, $sizePerPack, $imagePath, $updatedDate){
        $db = Database::getInstance();
        try {

            $sql = "UPDATE product SET  proName = ".$proName.", 
                       proDescription = '".$proDescription."',
                        brandID = ".$brandID.",
                        supplierCode = ".$supplierCode.",
                        importedQuantity = ".$importedQuantity.",
                        remainQuantity = ".$remainQuantity.",
                        typeCode = '".$typeCode."',
                        purchasedPrice = ".$purchasedPrice.",
                        salePrice = ".$salePrice.",
                        sizePerPack = '".$sizePerPack."',
                        imagePath = '".$imagePath."',
                        updatedDate = '".$updatedDate."'
                    WHERE product.proCode = ".$proCode;
//            echo $sql;
            // use exec() because no results are returned
            $db->exec($sql);
            echo "the record updated successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    }
}