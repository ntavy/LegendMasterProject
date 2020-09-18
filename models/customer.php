<?php

class Customer
{

    public static function addMessage($fName, $lName, $email, $company, $subject)
    {
        $db = Database::getInstance();

        try {
            $sql = "INSERT INTO personalcustomer(firstName, lastName, email, company)
                    VALUES('$fName', '$lName', '$email', '$company')";
            $db->exec($sql);

            $lastId = $db->lastInsertId();

            $sql2 = "INSERT INTO contactus(contactID, message)
                    VALUES('$lastId', '$subject')";
            $db->exec($sql2);

            return "1";
        } catch (PDOException $e) {
            return "Error sending message. " . $e->getMessage();
        }
    }

}
