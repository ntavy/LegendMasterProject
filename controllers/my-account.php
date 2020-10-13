<?php
class MyAccountController extends Controller
{
    public function index(){

        $this->view('my-account', ['activeMenu'=>"shopping"]);
    }

    public function profile(){
        $this->view('profile');
    }

    public function changePassword(){
        $this->view('change-password');
    }

    public function updateProfile(){
        $errorMsg = "";
        if(isset($_SESSION['userData'])){
            if(!isset($_POST['firstName'])){
                $errorMsg .= "First name is empty.<br>";
            }
            if(!isset($_POST['lastname'])){
                $errorMsg .= "Last name is empty.<br>";
            }
            if(!isset($_POST['username'])){
                $errorMsg .= "Username is empty.<br>";
            }
        }else{
            $errorMsg .= "You must login to update your profile";
        }

        $this->view('profile' , ['error-message'=>$errorMsg] );
    }
}