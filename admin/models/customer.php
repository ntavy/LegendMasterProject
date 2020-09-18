<?php

class Customer
{

    public static function getFormSubmissions()
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM contactus C 
                                    left join personalcustomer P on C.contactID = P.perCusID');

        foreach ($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }


}