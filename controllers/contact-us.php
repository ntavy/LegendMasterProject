<?php

class ContactUsController extends Controller
{
    public function index()
    {
        $this->view('contact-us', ['activeMenu'=>"contact-us"]);
    }
}

?>