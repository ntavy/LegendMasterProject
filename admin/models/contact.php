<?php

class Contact
{

    public static function getAll()
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM contact');

        foreach ($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }
}