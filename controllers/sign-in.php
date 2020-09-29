<?php

class SignInController extends Controller
{
    public function index()
    {
        $this->view('sign-in');
    }

    public function register()
    {

        $this->model('customer');
        $reslt = Customer::registerUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['userName'], $_POST['password']);

        //check if result is numeric --means success
        if (is_numeric($reslt)) {
            $this->view('verify-email', [
                'userID' => $reslt
            ]);

        } else { //registration failed
            $this->view('sign-in', [
                'regResult' => $reslt
            ]);
        }


    }

    public function verify()
    {
        $login = false;
        $this->model('customer');

        if ($_POST['code'] == '123456') {

            $confirm = Customer::confirmUser($_POST['userID']);

            if ($confirm == 1) {
                $login = true;
            } else {
                $msg = "<div class=\"alert alert-danger\">" . $confirm . "</div>";
            }

        } else {
            $msg = "<div class=\"alert alert-danger\">Invalid code. Please enter the code again.</div>";
        }

        if ($login == true) {
            header("refresh:0;url=" . dirname($_SERVER['PHP_SELF']) . "/");
        } else {
            $this->view('verify-email', [
                'userID' => $_POST['userID'],
                'verMessage' => $msg
            ]);
        }
    }
}