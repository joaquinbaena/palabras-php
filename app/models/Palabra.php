<?php

namespace App\Models;

class Palabra extends DBAbstractModel
{
    private static $instancia;
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miClase = __CLASS__;
            self::$instancia = new $miClase;
        }
        return self::$instancia;
    }

    public function __clone()
    {
        trigger_error("No se puede clonar una instancia de " . get_class($this) . "", E_USER_ERROR);
    }

    private $id;
    private $palabra;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPalabra()
    {
        return $this->palabra;
    }

    public function setPalabra($palabra)
    {
        $this->palabra = $palabra;
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    //crud de la tabla palabra
    public function get($id = '')
    {
        $this->query = "
            SELECT *
            FROM palabras
            WHERE id = :id";

        $this->parametros['id'] = $id;

        $this->get_results_from_query();

        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;
            }
            $this->mensaje = 'Palabra encontrada';
        } else {
            $this->mensaje = 'Palabra no encontrada';
        }
        return $this->rows;
    }

    public function set()
    {
        $this->query = "INSERT INTO palabras (palabra) VALUES (:palabra)";
        $this->parametros['palabra'] = $this->palabra;
        $this->get_results_from_query();
        $this->mensaje = "insert OK";
    }

    public function edit()
    {
        $this->query = "UPDATE palabras SET palabra= :palabra, update_at=CURRENT_TIMESTAMP WHERE id= :id";
        $this->parametros['id'] = $this->id;
        $this->parametros['palabra'] = $this->palabra;
        $this->get_results_from_query();
        $this->mensaje = 'Palabra editada correctamente';
    }

    public function delete()
    {
        $this->query = "DELETE FROM palabras WHERE id = :id";
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
        $this->mensaje = 'Palabra eliminada';
    }

    public function getAll()
    {
        $this->query = "SELECT * FROM palabras";

        $this->get_results_from_query();
        foreach ($this->rows[0] as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }

        return $this->rows;
    }

    public function getLastWords()
    {
        $this->query = "SELECT id, palabra, create_at FROM palabras ORDER BY id DESC LIMIT 5";
        $this->get_results_from_query();
        $this->mensaje = 'Palabras obtenidas correctamente';
        return $this->rows;
    }

}
