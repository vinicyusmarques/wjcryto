<?php

namespace wjcryto\Sql;

use PDO;

class Connection
{
    const HOST = "localhost";
    const DB = "WJCRYTO_DB";
    const USER = "root";
    const PASS = "vini1994";

    public static function creatConnection()
    {
            $connection = new PDO(
                "mysql:host=" . self::HOST . "; dbname=" . self::DB,
                self::USER,
                self::PASS
            );
            return $connection;
    }
}