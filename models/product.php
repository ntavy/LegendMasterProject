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
        $req = $db->query("SELECT * FROM product where proCode='".$proCode."'");
        foreach($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }
}