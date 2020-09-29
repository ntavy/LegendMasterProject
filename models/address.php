<?php
class Address {
    public static function getAll(){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM address');

        foreach($req->fetchAll() as $rc) {
            $list[] = $rc;
        }
        return $list;
    }

    public static function insertAddress($street, $suburb, $postCode, $city, $state, $country, $phoneNumber, $isShippingAdd, $firstName, $lastName, $email, $addedDate, $company){
        $db = Database::getInstance();
        try {

            $sql = "INSERT INTO address (street, suburb, postCode, city, state, country, phoneNumber, isShippingAdd)
                     VALUES ('".$street."', '".$suburb."', ".$postCode.", '".$city."', '".$state."', '".$country."', '".$phoneNumber."', ".$isShippingAdd.")";
            $db->exec($sql);
             $addressId = $db->lastInsertId();
            if($sql)
            {
               $sql1="INSERT INTO personalcustomer (firstName,lastName,phoneNumber,email,addedDate,addressId,company)
                        VALUES ('".$firstName."','".$lastName."','".$phoneNumber."','".$email."','".$addedDate."',".$addressId.",'".$company."')";
               $db->exec($sql1);
            }
          
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    }
}