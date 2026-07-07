<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return $this->view('home2');
    }

    public function view($route){
        if(file_exists("../resources/views/{$route}.php")){
            return include "../resources/views/{$route}.php";
        }else{
            return "El archivo no existe";
        }

    }
}