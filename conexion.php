<?php

class Connection{

 private static $hostname = 'localhost';
private  static $database = 'agencia_disenio';
private  static $username = 'root';
private   static $password = '';
private   static $port = '3306';
private static $con;

 public  static function connectDb(){

	try {   
        self::$con = new PDO('mysql:host='.self::$hostname.';port='.self::$port.';dbname='.self::$database, self::$username, self::$password);
        self::$con->exec("set names utf8");


            return self::$con;

  
    }
    catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage();
        die();
    }

}

public static function obtenerArray($query){
    if(!$query){

        return [];
    
    } 
        if($query->rowCount()>0){
    while ($rows = $query->fetch()) { 	
    
        $array[] = $rows;
    }
    
    return $array;
    
    }
        return [];
    
    
}



}

    ?>