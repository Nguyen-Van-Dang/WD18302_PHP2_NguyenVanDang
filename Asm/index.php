<?
require_once "vendor/autoload.php";

use Src\Model\Database;

$Data = new Database;

if (isset($_GET['pages'])) {
    switch ($_GET['pages']) {
        case 'login':
            include './admin/auth/login.admin.php';
            break;
        case 'register':
            include './admin/auth/register.admin.php';
            break;
        case 'admin':
            if (!isset($_COOKIE['role'])) {
                include './User/resources/home.php';
            } else {
                if ($_COOKIE['role'] == 1) {
                    switch ($_GET['action']) {
                        case 'Dashboard':
                            include './Admin/resources/admin/dashboard.php';
                            break;
                        case 'productList':
                            include './admin/resources/product/ProductList.php';
                            break;

                        default:
                            include './admin/resources/admin/Dashboard.php';
                            break;
                    }
                    break;
                }
            }
        case 'user':
            switch ($_GET['action']) {

                case 'home':
                    include './User/resources/home.php';
                    break;
                case 'products':
                    include './User/resources/products.php';
                    break;

                default:
                    include './User/resources/home.php';
                    break;
            }
            break;
    }
} else {
    include 'login.php';
};

?>