<?php

namespace Config\Query\QueryAutos;

class QueryMarcas
{
    public function findAll()
    {
        return "SELECT * FROM cat_marcas where(estatus=:estatus)";
    }

    public function findByID()
    {
        return "select * from cat_marcas where(id=:id)";
    }

    public function save()
    {
        return "insert into cat_marcas values (default,:inicial,:marca,default,default,default)";
    }

    public function update()
    {
        return "update cat_marcas set inicial=:inicial, marca=:marca, creacion=default where(id=:id and estatus='activo')";
    }

    public function delete()
    {
        return "delete from cat_marcas where (id=:id)";
    }
}