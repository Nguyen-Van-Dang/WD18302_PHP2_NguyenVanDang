<?
session_start();
require_once "vendor/autoload.php";
use Src\Model\Database;
use Src\Model\UserFunction;

$Data = new Database;
$user = new UserFunction();
if (!isset($_COOKIE['userID'])) {
    header("location: login.php");
}
// Admin
include('./src/Public/linkAdmin.php');
// User
include('./src/Public/link.php');


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
                include 'login.php';
            } else {
                if ($_COOKIE['role'] == 1) {
                    switch ($_GET['action']) {
                            //trang chu
                        case 'Dashboard':
                            include './src/View/ViewAdmin/Resources/dashboard.php';
                            break;

                        default:
                            include './src/View/ViewAdmin/Resources/dashboard.php';
                            break;
                    }
                    break;
                }
            }
        case 'user':
            switch ($_GET['action']) {
                    //trang chu
                case 'Home':
                    include './src/View/ViewUser/Resources/home.php';
                    break;

                    //đăng xuất
                case "Logout":
                    setcookie("viewCount", '', time() + 1, "/");
                    setcookie("role", '', time() + 1, "/");
                    setcookie("userID", '', time() + 1, "/");
                    setcookie("Oauth", '', time() + 1, "/");
                    header("location: login.php");
                    break;
            }
            break;
        default:
            include './src/View/ViewUser/Resources/home.php';
            break;
    }
} else {
    include 'login.php';
}
