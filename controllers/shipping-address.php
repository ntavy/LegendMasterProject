<?php 
class shippingAddressController extends Controller{
    public function index(){

        $this->view('shipping-address', ['activeMenu'=>"shopping"]);
    }
    public function addShipping(){
        $street =  $_POST["street"];
        $suburb = $_POST["suburb"];
        $postCode = $_POST["postCode"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $phoneNumber = $_POST["phoneNumber"];
        $isShippingAdd = 0;
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $email=$_POST["email"];
        $addedDate=date("Y-m-d H:i:s");
        $company=$_POST["company"];
        $billingAddress=  $_POST["street"]. " ". $_POST["suburb"]." ".$_POST["postCode"]." ".$_POST["city"]." ".  $_POST["state"]." ". $_POST["country"];
        echo $billingAddress;
        $this->model('address');
        Address::insertAddress($street, $suburb, $postCode, $city, $state, $country, $phoneNumber, $isShippingAdd, $firstName, $lastName, $email, $addedDate,$company);
        $this->view('payment', ['activeMenu'=>"shopping"]);
    }  
}
?>