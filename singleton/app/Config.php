<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static $settings;

    private function __construct()
    {
        $this->settings = parse_ini_file(__DIR__ . "/../config.php");
    }

    public static function get()
    {
        if (is_null(self::$settings)) {
            self::$settings = new Config();
        }

        return self::$settings;
    }
}