<?
/**
 * Hàm này dùng để xuất toàn bộ dữ liệu của 1 bản ra
 *
 * @return
 */
function display_user()
{
    include 'config.php';
    $sql = "SELECT * FROM user";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $users[] = $row;
        }
    }
    $db->close();
    return $users;
}
function delete_user($id)
{
    include 'config.php';

}