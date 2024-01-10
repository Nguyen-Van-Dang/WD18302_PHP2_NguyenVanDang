<?php
namespace Src\Model;

include 'BaseConfig.php'; // Import file chứa thông tin kết nối đến CSDL

class BaseModel {
    public function display_user() {
        global $db; // Sử dụng biến kết nối từ file BaseConfig.php
        $users = [];

        // Sử dụng Prepared Statements để ngăn chặn SQL Injection
        $sql = "SELECT * FROM user";
        $stmt = $db->prepare($sql);

        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $users[] = $row;
                }
            }

            $stmt->close(); // Đóng statement sau khi sử dụng
        }

        // Không đóng kết nối ở đây nếu bạn muốn sử dụng dữ liệu nhiều lần sau này

        return $users;
    }
}
?>
