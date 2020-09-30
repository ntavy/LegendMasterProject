<?php

class LogOutController extends Controller
{

    public function index()
    {
        session_destroy();
        header("refresh:0;url=" . dirname($_SERVER['PHP_SELF']) . "/sign-in");
    }

}