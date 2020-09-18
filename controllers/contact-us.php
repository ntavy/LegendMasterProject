<?php

class ContactUsController extends Controller
{
    public function index()
    {
        $this->view('contact-us', ['activeMenu' => "contact-us"]);
    }

    public function send()
    {
        //print_r($_POST);
        $this->model('contact');
        $insert = Contact::addMessage($_POST['firstname'], $_POST['lastname'], $_POST['emailId'], $_POST['company'], $_POST['subject']);

        //return view with message.
        $this->view('contact-us', [
            'activeMenu' => "contact-us",
            'resMessage' => $insert
        ]);

    }
}

