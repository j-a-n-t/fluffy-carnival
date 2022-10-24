<?php

namespace Config\Query\QueryModelos;

class QueryModelos
{

    protected $query;

    public function findAll()
    {
        return $this->query = "SELECT * FROM cat_modelos where(estatus=:estatus)";
    }

    public function findByID()
    {
        return $this->query = "select * from cat_modelos where(id=:id)";
    }

    public function save()
    {
        return $this->query = "insert into cat_modelos values (default,:inicial,:modelo,default,default,default)";
    }

    public function update()
    {
        return $this->query = "update cat_modelos set inicial=:inicial, modelo=:modelo, creacion=default where(id=:id and estatus='activo')";
    }

    public function delete()
    {
        return $this->query = "delete from cat_modelos where (id=:id)";
    }
}