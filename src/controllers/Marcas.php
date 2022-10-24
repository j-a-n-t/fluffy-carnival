<?php

namespace Controllers\Marcas;

use Config\Connection\connection;
use Config\Query\QueryAutos\QueryMarcas;

include_once("./src/config/connection.php");
include_once("./src/config/query/QueryMarcas.php");
include_once(dirname(__DIR__) . "/config/const.php");
include_once(dirname(__DIR__) . "/controllers/Marcas.php");

class Marcas extends connection
{

    protected $query;

    public function __construct()
    {
        parent::__construct();
        $this->query = new QueryMarcas();
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
}