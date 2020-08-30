<?php
class Supplier {
//    public $supplierCode;
//    public $supplierName;
//    public $addressId;
//    public $addedDate;

    /*
    public function __construct($supplierCode, $supplierName, $addressId, $addedDate)
    {
        $this->supplierCode = $supplierCode;
        $this->supplierName = $supplierName;
        $this->addressId = $addressId;
        $this->addedDate = $addedDate;
    }
    */

    public static function getAll(){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM supplier');
        foreach($req->fetchAll() as $rc) {
            $list[] = $rc;
            //$list[] = new Supplier($rc['supplierCode'], $rc['supplierName'],  $rc['addressId'], $rc['addedDate']);
        }
        return $list;
    }
}