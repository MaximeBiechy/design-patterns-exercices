<?php


use App\Config;

require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = Config::get();

$config2 = Config::get();

var_dump($config === $config2);
