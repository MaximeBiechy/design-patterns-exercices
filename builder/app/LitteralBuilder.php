<?php

namespace App;

class LitteralBuilder implements QueryBuilderInterface
{

    public function select($fields)
    {
        return "Je sélectionne les champs " . $fields;
    }

    public function from($from)
    {
        return " de la table " . $from;
    }

    public function where($where)
    {
        return "où " . $where;
    }
}