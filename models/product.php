<?php
class Product {
    public $proCode;
    public $proName;
    public $proDescription;
    public $brandID;
    public $salePrice;
    public $remainQuantity;

    public function __construct($proCode,$proName,$proDescription,$brandID,$salePrice,$remainQuantity)
    {
        $this->proCode = $proCode;
        $this->proName = $proName;
        $this->proDescription = $proDescription;
        $this->brandID = $brandID;
        $this->salePrice = $salePrice;
        $this->remainQuantity = $remainQuantity;
    }


    public static function getAll(){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM product');
        foreach($req->fetchAll() as $rc) {
            $list[] = new Product($rc['proCode'], $rc['proName'],  $rc['proDescription'],$rc['brandID'], $rc['salePrice'],  $rc['remainQuantity']);
        }
        return $list;
    }
}