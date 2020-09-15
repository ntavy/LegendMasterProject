<?php 
class shippingAddressController extends Controller{
    public function index(){

        $this->view('shippingAddress', ['activeMenu'=>"shopping"]);
    }
}
?>