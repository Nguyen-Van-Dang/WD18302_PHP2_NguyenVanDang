<?
if (isset($_POST['AddStudent'])) {
    $name = $_POST['name'] ?? "";
    $birthday = $_POST['birthday'] ?? "";
    $phone = $_POST['phone'] ?? "";
    $address = $_POST['address'] ?? "";

    if (!$name == "" ) {
        if ($category->checkDuplicateCate(trim($category_name))) {
            echo '
                <script>Danh mục Đã Tồn Tại !!!</script>';
        } else {
            $category->create_category($category_name);
            echo '
                <script>Thêm Danh Mục Thành Công !!!"</script>';
        }
    } else {
        echo '
            <script>Vui Lòng Nhập Đầy Đủ Thông Tin !!!"</script>';
    }
}
?>