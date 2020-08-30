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
}