<?php
require_once "vendor\autoload.php";

use Src\Controller\BaseController;
use Src\Database;
use Src\Core\Route;
use Src\Model\BaseModel;

$data = new Database;
new BaseController;
new Route;
new BaseModel;

?>