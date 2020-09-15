<?php 
class PaymentController extends Controller{
    public function index(){

        $this->view('payment', ['activeMenu'=>"shopping"]);
    }
}
?>