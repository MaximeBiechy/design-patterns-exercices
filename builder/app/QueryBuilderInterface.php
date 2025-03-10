<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface
{
    public function select($fields);

    public function from($from);

    public function where($where);
}