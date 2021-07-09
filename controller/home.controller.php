<?php
require_once 'model/model.home.php';

class HomeController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Home();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/Home/home.php';
        require_once 'view/footer.php';

    }


    

}