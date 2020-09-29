<?php
class FormLoginAdminController extends Controller
{
    public function index()
    {
        return $this->view('form-login');
    }

    public function submit(){
        $username = "";
        $password = "";
        if(isset($_POST['username'])){
            $username = $_POST['username'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];

        }

        if($username == ADMIN_USER && $password == ADMIN_PASS){
            $user = ['username'=>$username];
            $_SESSION['user'] = $user;
            header("Location: ".SITE_URL.'/admin');
        }else{
            return $this->view('form-login', ['error-message'=>'Login failed!.']);
        }

    }

    public function logout(){
        unset($_SESSION['user']);
        return $this->view('form-login');

    }
}