<?php 

namespace App\Controllers;

class Controller{
        public function view($route, $data = []){

        //Destructurar el array
        extract($data);

        return $title;

        $route = str_replace('.', '/', $route);

        if(file_exists("../resources/views/{$route}.php")){

                ob_star();

            include "../resources/views/{$route}.php";
            $content = ob_get_clean();

            return $content;

        }else{
            return "El archivo no existe";
        }

    }
}