<?php

class Contact
{

    public static function addMessage($fName, $lName, $email, $company, $subject)
    {
        $db = Database::getInstance();

        try {
            $sql = "INSERT INTO contact (firstName, lastName, emailID, company, message)
                    VALUES('$fName', '$lName', '$email', '$company', '$subject')";

            $db->exec($sql);
            return "1";
        } catch (PDOException $e) {
            return "Error sending message. " . $e->getMessage();
        }
    }
}
