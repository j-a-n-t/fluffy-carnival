<?php

namespace Controllers\Autos;

use Config\Connection\connection;
use Config\Query\QueryAutos\QueryAutos;
use Controllers\Anios\Anios;
use Controllers\SubModelos\SubModelos;


include_once("./src/config/connection.php");
include_once("./src/config/query/QueryAutos.php");

class Autos extends connection
{
    protected $query;

    public function __construct()
    {
        parent::__construct();
        $this->query = new QueryAutos();
    }

    public function viewIndex()
    {
        $data = $this->findAll("activo");
        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_AUTOS . "/index.php";
        $_GET["typeView"] = "";
        $_GET["title"] = "autos Disponibles";
        $_POST["save"] = "autos/nuevo";
        $_POST["data"] = $data;
        include(VIEWS . "index.php");
    }

    public function viewEditar($url)
    {
        $val = explode("/", $url);
        $id = $val[1];
        $data = $this->findByID(base64_decode($id));

        $newSubmodelo = new SubModelos();
        $submodelo = $newSubmodelo->findAll();
        $newAnios = new Anios();
        $anios = $newAnios->findAll('activo');


        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_AUTOS . "/edit.php";
        include(VIEWS . "index.php");
    }

    public function viewSave()
    {
        $newSubmodelo = new SubModelos();
        $submodelo = $newSubmodelo->findAll();
        $newAnios = new Anios();
        $anios = $newAnios->findAll('activo');

        $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
        $_GET["page"] = VIEW_AUTOS . "/save.php";
        include(VIEWS . "index.php");
    }

    public function findAll()
    {
        try {
            $find = $this->conn->prepare($this->query->findAll());
            $find->execute(array(":estatus" => "activo"));
            $data = $find->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        } catch (\Throwable $th) {
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

    public function save($data)
    {
        $submodelo = trim($data["submodelo"]);
        $anio = $data["anio"];
        $precio = $data["precio"];
        $kilometraje = $data["kilometraje"];
        $color = strtolower($data["color"]);
        $color = trim($data["color"]);
        $correo = strtolower($data["email"]);
        $correo = trim($data["email"]);

        try {
            $query = $this->query->save();
            $save = $this->conn->prepare($query);
            $save->execute(array(
                ":submodelo" => $submodelo,
                ":anio" => $anio,
                ":precio" => $precio,
                ":kilometraje" => $kilometraje,
                ":color" => $color,
                ":email" => $correo,
            ));
            $save->fetchAll(\PDO::FETCH_ASSOC);
            header("Location: http://127.0.0.1/prueba/autos");
        } catch (\Throwable $th) {
            echo $th;
            return $th;
        }
    }

    public function update($id, $data)
    {
        $id = trim($id);
        $submodelo = trim($data["submodelo"]);
        $anio = $data["anio"];
        $precio = $data["precio"];
        $kilometraje = $data["kilometraje"];
        $color = strtolower($data["color"]);
        $color = trim($data["color"]);
        $correo = strtolower($data["email"]);
        $correo = trim($data["email"]);
        try {
            $update = $this->conn->prepare($this->query->update());
            $update->execute(array(
                ":submodelo" => $submodelo,
                ":anio" => $anio,
                ":precio" => $precio,
                ":kilometraje" => $kilometraje,
                ":color" => $color,
                ":email" => $correo,
                ":id" => $id));
            $data = $update->fetchAll(\PDO::FETCH_ASSOC);

            header("Location: http://127.0.0.1/prueba/autos");
        } catch (\Throwable $th) {
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
            header("Location: http://127.0.0.1/prueba/autos");
        } catch (\Throwable $th) {
            return $th;
        }
    }
}