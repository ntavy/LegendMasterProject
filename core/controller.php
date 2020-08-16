<?php 

class Controller{
    public function view($view, $data = []){
        require_once 'views/header.php';
        require_once 'views/' . $view . '.php';
        require_once 'views/footer.php';
    }
}