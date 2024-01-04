<?
define('DB_HOST', 'localhost');
define('DB_ROOT', 'root');
define('DB_PASS', 'mysql');
define('DB_NAME', '');

try {
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=php2".DB_NAME, DB_ROOT, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Kết nối thành công";
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
?>
