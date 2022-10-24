<?php

namespace Config\Query\QueryAutos;

class QueryAutos
{
    public function findAll()
    {
        return "select autos.*,anio.anio,cm.marca,c.modelo from tb_autos as autos
            inner join cat_submodelos as sub on autos.submodeloID = sub.id
            inner join cat_marcas cm on sub.marcaID = cm.id
            inner join  cat_modelos c on autos.submodeloID = c.id
            inner join cat_anios as anio on autos.anioID = anio.id
            where(sub.estatus=:estatus);";
    }

    public function findByID()
    {
        return "select autos.*,anio.anio,cm.marca,c.modelo 
            from tb_autos as autos
            inner join cat_submodelos as sub on autos.submodeloID = sub.id
            inner join cat_marcas cm on sub.marcaID = cm.id
            inner join  cat_modelos c on autos.submodeloID = c.id
            inner join cat_anios as anio on autos.anioID = anio.id
            where(autos.id=:id and autos.estatus=:estatus);";
    }

    public function save()
    {
        return "insert into tb_autos value (default,:submodelo,:anio,:precio,:kilometraje,:color,:email,default,default,default);";
    }

    public function update()
    {
        return "update tb_autos set 
                    submodeloID=:submodelo,
                    anioID=:anio,
                    precio=:precio,
                    kilometraje=:kilometraje,
                    color=:color,
                    email=:email,
                    modificacion=default 
                where(id=:id)";
    }

    public function delete()
    {
        return "delete from tb_autos where (id=:id)";
    }
}