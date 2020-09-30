<?php
class Product {
    public static function getAll(){
            $list = [];
            $db = Database::getInstance();
            $req = $db->query('SELECT * FROM product');
            foreach($req->fetchAll() as $rc) {
                $list[] = $rc;
            }
            return $list;
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

    /**
     * @return mixed total number of product items
     */

    public static function getTotalProductNumber(){
        $db = Database::getInstance();
        $req = $db->query('SELECT count(*) as total FROM product');
        return $req->fetchColumn();
    }

    /**
     * @param $offset
     * @return array
     * Explain offset: The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":
        $sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
     */

    public static function getProductByOffset($offset, $itemPerPage){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM product LIMIT '.$offset.', '.$itemPerPage);
        foreach($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }

    public static function searchProduct($proType, $proBrand, $sortBy){
        $list=[];
        $db = Database::getInstance();
        $prepareSql ="SELECT *, (importedQuantity - remainQuantity) as saledQuantity FROM product";
        if($proType !='' || $proBrand != 0){
            $prepareSql = $prepareSql." WHERE 1 = 1 ";
            if($proType != ''){
                $prepareSql = $prepareSql." AND typeCode = '".$proType."'";
            }
            if($proBrand != 0){
                $prepareSql = $prepareSql." AND brandID = ".$proBrand;
            }
        }
        if($sortBy != ""){
            if($sortBy == "name"){
                $prepareSql = $prepareSql." ORDER BY proName";
            }else if($sortBy == "price_low"){
                $prepareSql = $prepareSql." ORDER BY salePrice asc";
            }else if($sortBy == "price_high"){
                $prepareSql = $prepareSql." ORDER BY salePrice desc";
            }else if($sortBy == "best"){
                $prepareSql = $prepareSql." ORDER BY saledQuantity desc";
            }else if($sortBy == "new"){
                $prepareSql = $prepareSql." ORDER BY addedDate desc";
            }else if($sortBy == "old"){
                $prepareSql = $prepareSql." ORDER BY addedDate asc";
            }
        }
        //echo $prepareSql;
        $req = $db->query($prepareSql);
        foreach ($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }
}