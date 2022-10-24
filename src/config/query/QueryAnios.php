<?php

namespace Config\Query\QueryAutos;

class QueryAnios
{

    public function findAll()
    {
        return "SELECT * FROM cat_anios where(estatus=:estatus)";
    }
}