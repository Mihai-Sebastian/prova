<?php
namespace framework\database;
use PDO;

class connection
{
    public static function make($config){
        try {
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] .';dbname' . $config['name'],

                $config['user'], $config['password']);
        }catch (\Exception $e){
            echo "error";
        }


    }
}