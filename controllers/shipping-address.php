<?php 
class shippingAddressController extends Controller{
    public function index(){

        $this->view('shipping-address', ['activeMenu'=>"shopping"]);
    }
}
?>