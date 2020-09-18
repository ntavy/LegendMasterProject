<?php

class FormSubmissionsAdminController extends Controller
{

    public function index()
    {
        $this->model('contact');
        $listContact = Contact::getAll();

        return $this->view('form-submissions', ['listContact' => $listContact]);
    }

}
