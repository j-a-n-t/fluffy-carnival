<?php

namespace Config\Connection;


class connection
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "4l3r1k4s1312++-.";
    private $db = "db_autos";
    private $format = "utf8";
    protected $conn;
    protected $msg;

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->format}";
        try {
            $this->conn = new \PDO($dsn, $this->user, $this->pass);
            $this->conn->setAttribute(\PDO::ERRMODE_EXCEPTION, \PDO::ATTR_ERRMODE);
        } catch (\PDOException $th) {
            $this->msg = ["estatus" => 500, "msg" => "no se realizó la conexion"];
        }
    }

}