<?php 
class AboutUsController extends Controller{
    public function index(){
        $this->view('about-us', ['activeMenu'=>"about-us"]);
    }
}
?>