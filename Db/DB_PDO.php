<?php

namespace Db;

use \PDO;

class DB_PDO {
    
    public static $dbh;

    public static function connection() {
        $config = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/config/db.json'), true);
        
        try{
            self::$dbh = new PDO('mysql:host='. $config['db']['host'] .';dbname='. $config['db']['db_name'] .'', $config['db']['username'], $config['db']['password'], array(
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8",
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE=>TRUE
            ));
        } catch(PDOExeception $e) {
            return $e->getMessage();
        }
    }

    public static function close() {
        self::$dbn = null;
    }

}