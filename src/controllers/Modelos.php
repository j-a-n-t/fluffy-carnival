<?php

namespace Controllers\Modelos;

use Config\Connection\connection;
use Config\Query\QueryModelos\QueryModelos;

include_once("./src/config/connection.php");
include_once("./src/config/query/QueryModelos.php");
include_once(dirname(__DIR__) . "/config/const.php");
include_once(dirname(__DIR__) . "/controllers/Modelos.php");

class Modelos extends connection
{
    protected $query;

    public function __construct()
    {
        parent::__construct();
        $this->query = new QueryModelos();
    }

    public function viewIndex()
    {
        $data = $this->findAll("activo");
        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_MODELOS . "/index.php";
        $_GET["typeView"] = "catalogo";
        $_GET["title"] = "modelos";
        $_POST["save"] = "modelos/nuevo";
        $_POST["data"] = $data;
        include(VIEWS . "index.php");
    }

    public function viewEditar($url)
    {
        $val = explode("/", $url);
        $id = $val[1];
        $data = $this->findByID(base64_decode($id));

        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_MODELOS . "/edit.php";
        include(VIEWS . "index.php");
    }

    public function viewSave()
    {
        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_MODELOS . "/save.php";
        include(VIEWS . "index.php");
    }

    public function findAll($estatus)
    {
        try {
            $query = $this->query->findAll();

            $find = $this->conn->prepare($query);
            $find->execute(array("estatus" => $estatus));
            $data = $find->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        } catch (\PDOException $th) {
            return $th;
        }
    }

    public function findByID($id)
    {
        try {
            $query = $this->query->findByID();
            $find = $this->conn->prepare($query);
            $find->execute(array("id" => $id));
            $data = $find->fetchAll(\PDO::FETCH_ASSOC);
            return $data[0];
        } catch (\PDOException $th) {
            return $th;
        }
    }

    public function update($id, $inicial, $modelo)
    {
        try {
            $query = $this->query->update();
            $update = $this->conn->prepare($query);
            $update->execute(array(":inicial" => $inicial, ":modelo" => $modelo, ":id" => $id));
            $update->fetchAll(\PDO::FETCH_ASSOC);
            header("Location: http://127.0.0.1/prueba/modelos");
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function delete($id)
    {
        try {
            $query = $this->query->delete();
            $destroy = $this->conn->prepare($query);
            $destroy->execute(array(":id" => $id));
            $destroy->fetchAll(\PDO::FETCH_ASSOC);
            header("Location: http://127.0.0.1/prueba/modelos");
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function save($inicial, $modelo)
    {
        $inicial = trim($inicial);
        $inicial = strtoupper($inicial);
        $modelo = trim($modelo);
        $modelo = strtolower($modelo);
        try {
            $query = $this->query->save();
            $save = $this->conn->prepare($query);
            $save->execute(array(":inicial" => $inicial, ":modelo" => $modelo));
            $data = $save->fetchAll(\PDO::FETCH_ASSOC);
            header("Location: http://127.0.0.1/prueba/modelos");
        } catch (\Throwable $th) {
            echo $th;
            return $th;
        }
    }
}
