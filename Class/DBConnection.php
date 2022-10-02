<?php
class DBConnection {//make sure the server doesnot have a password and the user is the default 'root'
    public static function connect(){
        $server = "localhost";
        $username = "root";
        $password = "vertrigo";
        $database = "stores";
        $connection = mysqli_connect($server, $username, $password, $database);
        return $connection;
    }
    public static function executeQuery($query){
        $result = mysqli_query(DBConnection::connect(),$query);
        return $result;
    }
}