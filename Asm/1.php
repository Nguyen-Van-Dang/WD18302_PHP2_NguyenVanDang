<?
session_start();
require_once "vendor/autoload.php";
use Src\Models\Database;
use Src\Models\UserFunction;

$Data = new Database;
// $user = new UserFunction();
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
       //học sinh
       case 'student':
        include './src/View/ViewAdmin/Resources/student.php';
        break;
       //
       case 'academicability':
        include './src/View/ViewAdmin/Resources/academicability.php';
        break;
       //điểm số
       case 'scores':
        include './src/View/ViewAdmin/Resources/scores.php';
        break;
               //bảng điểm
       case 'tablescores':
        include './src/View/ViewAdmin/Resources/tablescores.php';
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
                                        //thông báo
                case 'notification':
                    include './src/View/ViewUser/Resources/notification.php';
                    break;
                    //bản điểm theo kỳ
                    case 'semestetranscripts':
                        include './src/View/ViewUser/Resources/semestetranscripts.php';
                        break;
                        //lịch sử học
                    case 'learninghistory':
                        include './src/View/ViewUser/Resources/learninghistory.php';
                        break;
                          //Bảng điểm
                    case 'transcript':
                        include './src/View/ViewUser/Resources/transcript.php';
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
