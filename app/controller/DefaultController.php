<?php
    namespace App\Controller;
    class DefaultController 
    {
        public function render($fichero, $data){
            $data *= 2;
            // extract($data);
            include "../view/{$fichero}.php";
        }

        public function indexAction() {
            include '../view/index_view.html';
            // render("../view/index.php", $data);
        }
    }