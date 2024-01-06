<?php

namespace App\Core;
class Database{
//private(sd trong class nay), protected(ai muon sd thi sd), public(sd trong lop dc ke thua)
private $_database_name;
private $_database_user;
private $_database_password;
private $_database_port;
private $_database_host;
public $name ="ABC";

//
function __construct(){
    echo "day la ham khoi tao \n";
}
//
public function connect(){
    echo 'phuong thuc connect <br>';
}
//
}
$database = new Database();
$database->name;
$database->connect();
?>