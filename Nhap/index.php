<?
class Database{
//private(sd trong class nay), protected(ai muon sd thi sd), public(sd trong lop dc ke thua)
private $_database_name;
private $_database_user;
private $_database_password;
private $_database_port;
private $_database_host;
public $name ="ABC";

}
$database = new Database();
var_dump($database);

?>