<?php
require_once "vendor/autoload.php";

use App\Core\Database;
use App\Controller\Admin\AdminProductController as AdminProductController;
use App\Controller\Client\ProductController as ClientProductController;

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

$AdminProductController = new AdminProductController();
$database = new Database();
$database->name;
$database->connect();
?>