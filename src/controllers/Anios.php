<?php

namespace Controllers\Anios;

use Config\Connection\connection;
use Config\Query\QueryAutos\QueryAnios;

include_once("./src/config/connection.php");
include_once("./src/config/query/QueryAnios.php");

class Anios extends connection
{
    protected $query;

    public function __construct()
    {
        parent::__construct();
        $this->query = new QueryAnios();
    }

    public function findAll($estatus)
    {
        try {
            $find = $this->conn->prepare($this->query->findAll());
            $find->execute(array(":estatus" => $estatus));
            $data = $find->fetchAll(\PDO::FETCH_ASSOC);
            return $data;
        } catch (\PDOException $th) {
            return $th;
        }

    }
}