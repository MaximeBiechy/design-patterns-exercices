<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

use App\MySQLQueryBuilder;

$query = new MySQLQueryBuilder();

$fields = ['name', 'email', 'password'];

$response = $query->select($fields)->from('users')->where('email = "test@test.com"');

echo $response;