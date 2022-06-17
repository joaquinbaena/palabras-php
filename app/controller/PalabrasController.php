<?php 
namespace App\Controller;

use App\Models\Palabra;

class PalabrasController extends BaseController{

    public function add() {
        if (isset($_POST)) {
            $data = array();
            $procesaform = false;
            $data['word'] = "";


            if (!empty($_POST['word'])) {
                $procesaform = true;
                $data['word'] = $_POST['word'];
            }
            
            
            if ($procesaform) {
                $capital = new Palabra();
                $capital->setPalabra($data['word']);
                $capital->set();
                header("location:" . DIRINDEX . "/");
            } else {
                $this->renderHTML("../view/add_view.php", $data);  
            }
        } else {
            $this->renderHTML("../view/add_view.php", "");
        }
    }

    public function editWord() {
        if (isset($_POST['enviar'])) {
            $procesaForm = false;
            $data = array();

            if (!empty($_POST['word'])) {
                $procesaform = true;
                $data['word'] = $_POST['word'];
            }

            if (!empty($_POST['id'])) {
                $procesaform = true;
                $data['id'] = $_POST['id'];
            }

            if ($procesaform) {
                $capital = new Palabra();
                $capital->setPalabra($data['word']);
                $capital->setId($data['id']);
                $capital->edit();
                header("location:" . DIRINDEX . "/");
            } else {
                $mensaje['error'] = "No se puede editar";
                $this->renderHTML("../view/edit_view.php", $mensaje);
            }
        } else {
            $request = str_replace(DIRINDEX, '', $_SERVER['REQUEST_URI']);
            $elementos = explode('/', $request);
            $data = array();
            $data['id'] = end($elementos);
            $this->renderHTML("../view/edit_view.php", $data);
        }
    }

    public function deleteWord() {
        $request = str_replace(DIRINDEX, '', $_SERVER['REQUEST_URI']);
        $elementos = explode('/', $request);
        $id = end($elementos);
        $palabra = new Palabra();
        $palabra->setId($id);
        $palabra->delete();
        header("location:" . DIRINDEX . "/");

    }
}



?>