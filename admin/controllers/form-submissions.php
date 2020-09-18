<?php

class FormSubmissionsAdminController extends Controller
{

    public function index()
    {
        $this->model('customer');
        $listContact = Customer::getFormSubmissions();

        return $this->view('form-submissions', ['listContact' => $listContact]);
    }

}
