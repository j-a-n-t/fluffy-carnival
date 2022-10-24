<?php

namespace Config\Query\QuerySubModelos;

class QuerySubModelos
{
    public function findAll()
    {
        return "select 
            submod.id,
            submod.inicial,
            submod.vehiculo,
            submod.estatus,
            submod.creacion,
            submod.modificacion,
            mas.marca,
            modl.modelo,
            submod.marcaID,
            submod.modeloID
        from cat_submodelos as submod
        inner join  cat_marcas mas on submod.marcaID = mas.id
        inner join cat_modelos modl on submod.modeloID = modl.id
        where(submod.estatus = :estatus)";
    }

    public function findByID()
    {
        return "select 
            submod.id,
            submod.inicial,
            submod.vehiculo,
            submod.estatus,
            submod.creacion,
            submod.modificacion,
            mas.marca,
            modl.modelo,
            submod.marcaID,
            submod.modeloID
        from cat_submodelos as submod
        inner join  cat_marcas mas on submod.marcaID = mas.id
        inner join cat_modelos modl on submod.modeloID = modl.id
        where(submod.id = :id and submod.estatus = :estatus)";
    }

    public function save()
    {
        return "insert into cat_submodelos value (default,:inicial,:vehiculo,:marca,:modelo,default,default,default)";
    }

    public function update()
    {
        return "update cat_submodelos set 
                    inicial=:inicial,
                    vehiculo=:vehiculo,
                    marcaID=:marca,
                    modeloID=:modelo,
                    modificacion=default 
                where (id=:id);";
    }

    public function delete()
    {
        return "delete from cat_submodelos where (id=:id)";
    }
}