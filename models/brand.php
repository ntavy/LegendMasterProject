<?php
class Brand {
    public static function getAll(){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM brand');
        foreach ($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }
}