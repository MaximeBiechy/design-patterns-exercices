<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    public function select($fields): string
    {
        return "SELECT " . $fields;
    }

    public function from($from): string
    {
        return " FROM " . $from;
    }

    public function where($where): string
    {
        return " WHERE " . $where;
    }
}