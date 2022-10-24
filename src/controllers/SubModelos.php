<?php

namespace Controllers\SubModelos;

use Config\Connection\connection;
use Config\Query\QuerySubModelos\QuerySubModelos;
use Controllers\Marcas\Marcas;
use Controllers\Modelos\Modelos;

include_once("./src/config/connection.php");
include_once("./src/config/query/QuerySubModelos.php");

class SubModelos extends connection
{
    protected $query;

    public function __construct()
    {
        parent::__construct();
        $this->query = new QuerySubModelos();
    }

    public function viewIndex()
    {
        $data = $this->findAll("activo");

        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_SUB_MODELOS . "/index.php";
        $_GET["typeView"] = "";
        $_GET["title"] = "SubModelos Disponibles";
        $_POST["save"] = "submodelos/nuevo";
        $_POST["data"] = $data;
        include(VIEWS . "index.php");
    }

    public function viewEditar($url)
    {
        $val = explode("/", $url);
        $id = $val[1];
        $data = $this->findByID(base64_decode($id));

        $newModel = new Modelos();
        $model = $newModel->findAll('activo');
        $newMarcas = new Marcas();
        $marcas = $newMarcas->findAll("activo");


        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_SUB_MODELOS . "/edit.php";
        include(VIEWS . "index.php");
    }

    public function viewSave()
    {
        $newModel = new Modelos();
        $model = $newModel->findAll('activo');
        $newMarcas = new Marcas();
        $marcas = $newMarcas->findAll("activo");

        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_SUB_MODELOS . "/save.php";
        include(VIEWS . "index.php");
    }

    public function findAll()
    {
        try {
            $find = $this->conn->prepare($this->query->findAll());
            $find->execute(array(":estatus" => "activo"));
            $data = $find->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        } catch (\PDOException $th) {
            return $th;
        }

    }

    public function findByID($id)
    {
        try {
            $find = $this->conn->prepare($this->query->findByID());
            $find->execute(array(":id" => $id, ":estatus" => "activo"));
            $data = $find->fetchAll(\PDO::FETCH_ASSOC);
            return $data[0];
        } catch (\PDOException $th) {
            return $th;
        }
    }

    public function save($inicial, $vehiculo, $marca, $modelo)
    {
        $inicial = trim($inicial);
        $inicial = strtoupper($inicial);
        $vehiculo = trim($vehiculo);
        $vehiculo = strtolower($vehiculo);
        $marca = trim($marca);
        $marca = strtolower($marca);
        $modelo = trim($modelo);
        $modelo = strtolower($modelo);
        try {
            $query = $this->query->save();
            $save = $this->conn->prepare($query);
            $save->execute(array(":inicial" => $inicial, ":vehiculo" => $vehiculo, ":marca" => $marca, ":modelo" => $modelo));
            $data = $save->fetchAll(\PDO::FETCH_ASSOC);
            header("Location: http://pruebaalexis.42web.io/prueba/submodelos");
        } catch (\PDOException $th) {
            echo $th;
            return $th;
        }
    }

    public function update($id, $inicial, $vehiculo, $marca, $modelo)
    {
        $id = trim($id);
        $inicial = trim($inicial);
        $inicial = strtoupper($inicial);
        $vehiculo = trim($vehiculo);
        $vehiculo = strtolower($vehiculo);
        $marca = trim($marca);
        $marca = strtolower($marca);
        $modelo = trim($modelo);
        $modelo = strtolower($modelo);
        try {
            $update = $this->conn->prepare($this->query->update());
            $update->execute(array(
                ":inicial" => $inicial,
                ":vehiculo" => $vehiculo,
                ":marca" => $marca,
                ":modelo" => $modelo,
                ":id" => $id));
            $data = $update->fetchAll(\PDO::FETCH_ASSOC);

            header("Location: http://pruebaalexis.42web.io/prueba/submodelos");
        } catch (\PDOException $th) {
            echo $th;
            return $th;
        }
    }

    public function delete($id)
    {
        try {
            $destroy = $this->conn->prepare($this->query->delete());
            $destroy->execute(array(":id" => $id));
            $destroy->fetchAll(\PDO::FETCH_ASSOC);
            header("Location: http://pruebaalexis.42web.io/prueba/submodelos");
        } catch (\PDOException $th) {
            return $th;
        }
    }

}