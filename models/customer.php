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

    public static function registerUser($fName, $lName, $email, $username, $password)
    {

        $db = Database::getInstance();

        try {
            $sql = "INSERT INTO personalcustomer(firstName, lastName, email)
                    VALUES('$fName', '$lName', '$email')";
            $db->exec($sql);

            $lastId = $db->lastInsertId();

            $sql2 = "INSERT INTO signup(customerID, username, password)
                    VALUES('$lastId', '$username', '$password')";
            $db->exec($sql2);

            //TODO: send verification email to user - but how to send??

            return $lastId;
        } catch (PDOException $e) {
            return "Error registering. " . $e->getMessage();
        }
    }

    public static function confirmUser($id)
    {
        $list = [];

        $db = Database::getInstance();

        try {
            $req = $db->query("SELECT * FROM signup
                WHERE customerID = " . $id);

            foreach ($req->fetchAll() as $rc) {
                $list = $rc;
            }

            $sql = "INSERT INTO customeraccount(cusAccID, username, password)
                VALUES('$list[customerID]', '$list[username]', $list[password])";
            $db->exec($sql);

            return 1;
        } catch (PDOException $e) {
            return "Error adding data. " . $e->getMessage();
        }

    }

    public static function getUserByID($id)
    {
        $list = [];
        $db = Database::getInstance();

        try {
            $req = $db->query("SELECT C.cusAccID, C.username, C.isConfirm, P.* FROM customeraccount C 
                    LEFT JOIN personalcustomer P on C.cusAccID = P.perCusID
                    WHERE C.cusAccID = " . $id);
            foreach ($req->fetchAll() as $rc) {
                $list = $rc;
            }

            return $list;
        } catch (PDOException $e) {
            return "Error. " . $e->getMessage();
        }
    }

    public static function verifyUser($username, $password)
    {
        $list = [];
        $db = Database::getInstance();

        try {
            $req = $db->query("SELECT * FROM customeraccount
                    WHERE username = '" . $username . "' and password = '" . $password . "' and isConfirm = '1'");

            if ($req->rowCount() == 1) {
                foreach ($req->fetchAll() as $rc) {
                    $list = $rc;
                }
                return $list['cusAccID'];
            } else {
                return "Invalid username or password";
            }


        } catch (PDOException $e) {
            return "Error. " . $e->getMessage();
        }
    }

}
