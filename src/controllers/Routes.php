<?php

namespace Controllers\Routes;

use Controllers\Autos\Autos;
use Controllers\SubModelos\SubModelos;
use Controllers\Modelos\Modelos;

include_once(dirname(__DIR__) . "/config/const.php");
include_once(dirname(__DIR__) . "/controllers/Modelos.php");
include_once(dirname(__DIR__) . "/controllers/SubModelos.php");
include_once(dirname(__DIR__) . "/controllers/Marcas.php");
include_once(dirname(__DIR__) . "/controllers/Autos.php");
include_once(dirname(__DIR__) . "/controllers/Anios.php");

class Routes
{

    private $route;
    private $route2;

    public function __construct($url, $url2 = null)
    {
        $this->route = $url;
        $this->route2 = $url2;
        $this->Routing($this->route, $this->route2);
    }


    public function Routing($route, $route2)
    {

        $route = trim($route);
        $route = filter_var($route, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $route = strtolower($route);

        switch ($route):
            case "home":
                $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
                $_GET["page"] = VIEWS_COMPONET . "/home.php";
                include(VIEWS . "index.php");
                break;
            case "modelos":
                $URL = explode("/", $route2 ?? '');
                $url = $URL[0];
                $this->Modelos($url, $route2);
                break;
            case "submodelos":
                $URL = explode("/", $route2 ?? '');
                $url = $URL[0];
                $this->SubModelo($url, $route2);
                break;
            case "autos":
                $URL = explode("/", $route2 ?? '');
                $url = $URL[0];
                $this->Autos($url, $route2);
                break;
            default:
                $request = new Modelos();
                $data = $request->findAll("activo");

                $_GET["header"] = VIEWS_LAYOUTS . "/header.php";
                $_GET["page"] = VIEW_MODELOS . "/index.php";
                $_GET["typeView"] = "catalogo";
                $_GET["title"] = "modelos";
                $_POST["save"] = "modelos/nuevo";
                include(VIEWS . "index.php");
                break;

        endswitch;

    }


    public function Modelos($interno, $values)
    {
        $request = new Modelos();
        switch ($interno):
            case "nuevo":
                $request->viewSave();
                break;
            case "editar":
                $request->viewEditar($values);
                break;
            case "postNew":
                $request->save($_POST["inicial"], $_POST["modelo"]);
                break;
            case "postUpdate":
                $inicial = strtoupper($_POST["inicial"]);
                $modelo = strtolower($_POST["modelo"]);
                $id = $_POST["id"];
                $request->update($id, $inicial, $modelo);
                break;
            case "postDelete":
                $val = explode("/", $values ?? '');
                $id = $val[1];
                $request->delete(base64_decode($id));
                break;
            default:
                $request->viewIndex();
                break;
        endswitch;
    }

    public function SubModelo($interno, $values)
    {
        $req = new SubModelos();

        switch ($interno) {
            case "nuevo":
                $req->viewSave();
                break;
            case "editar":
                $req->viewEditar($values);
                break;
            case "postNew":
                $req->save($_POST["inicial"], $_POST["vehiculo"], $_POST["marca"], $_POST["modelo"]);
                break;
            case "postUpdate":
                $req->update($_POST["id"], $_POST["inicial"], $_POST["vehiculo"], $_POST["marca"], $_POST["modelo"]);
                return;
                break;
            case "postDelete":
                $val = explode("/", $values ?? '');
                $id = $val[1];
                $req->delete(base64_decode($id));
                break;
            default:
                $req->viewIndex();
                break;
        }
    }

    public function Autos($interno, $values)
    {
        $req = new Autos();
        switch ($interno) {
            case "nuevo":
                $req->viewSave();
                break;
            case "editar":
                $req->viewEditar($values);
                break;
            case "postNew":
                $req->save($_POST);
                break;
            case "postUpdate":
                $req->update($_POST["id"], $_POST);
                return;
                break;
            case "postDelete":
                $val = explode("/", $values ?? '');
                $id = $val[1];
                $req->delete(base64_decode($id));
                break;
            default:
                $req->viewIndex();
                break;
        }
    }

}