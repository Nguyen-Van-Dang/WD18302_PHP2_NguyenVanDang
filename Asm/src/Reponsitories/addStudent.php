<?
if (isset($_POST['addProductbtn'])) {
    $category_id = $_POST['category_id'] ?? "";
    $product_name = $_POST['product_name'] ?? "";
    $product_price = $_POST['product_price'] ?? "";
    $product_sale = $_POST['product_sale'] ?? "";
    $product_quantily = $_POST['product_quantily'] ?? "";
    $type_id = $_POST['type_id'] ?? "";
    $product_description = $_POST['product_description'] ?? "";
    $product_short_description = $_POST['product_short_description'] ?? "";
    $product_img  = $_FILES['product_img']['name'] ?? "";
    $user_created = $_COOKIE['userID'];

    if (
        !$category_id == "" &&
        !$product_name == "" &&
        !$product_price == "" &&
        $product_price > 1000 &&
        !$product_sale == "" ||
        $product_sale >= 0 ||
        $product_sale < 100 &&
        !$product_quantily == "" &&
        $product_quantily >= 0 &&
        !$type_id == "" &&
        !$user_created == "" &&
        !$product_img == "" &&
        !$product_description == "" &&
        !$product_short_description == ""

    ) 
    {
        if ($product->checkDuplicateProduct(trim($product_name),$type_id, $category_id)) {
            echo '
                <script>
                    Toastify({
                        text:"Sản Phẩm Đã Tồn Tại !!!",
                        duration: 3000,
                        gravity: "top",
                        backgroundColor: "#dc3545", // Màu nền của toast khi điều kiện đúng
                        position: "center",
                        stopOnFocus: true,
                        close: true, // Cho phép đóng toast bằng cách nhấp vào
                        style: {
                            // Các thuộc tính CSS để tùy chỉnh hơn
                            fontSize:"23px",
                            padding:"20px",
                        },
                    }).showToast();
                </script>';
        } else { 
                $product->add_product($product_name, $product_price, $product_sale, $product_img, $product_quantily, $category_id, $type_id, $product_short_description, $product_description, $user_created);
                echo '
                    <script>
                        Toastify({
                            text: "Thêm Sản Phẩm Thành Công !!!",
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#28a745", // Màu nền của toast khi điều kiện đúng
                            stopOnFocus: true,
                            close: true, // Cho phép đóng toast bằng cách nhấp vào
                            className: "toastify-custom", // Thêm lớp CSS tùy chỉnh
                            style: {
                                fontSize:"23px",
                                padding:"20px",
                            },
                        }).showToast();
                    </script>';
                $anhne = $_FILES['product_img']['tmp_name'];
                $error = $_FILES['product_img']['error'];
                $path = 'images/product/' . $product_img . '.png';
                if (
                    $error === 0
                ) {
                    move_uploaded_file($anhne, $path);
                }
            }
    }   else {
            echo '
                <script>
                    Toastify({
                        text:"Xin vui lòng nhập đủ thông tin !!!",
                        duration: 3000,
                        gravity: "top",
                        backgroundColor: "#dc3545", // Màu nền của toast khi điều kiện đúng
                        position: "center",
                        stopOnFocus: true,
                        close: true, // Cho phép đóng toast bằng cách nhấp vào
                        style: {
                            fontSize:"23px",
                            padding:"20px",
                        },
                    }).showToast();
                </script>';
    }
}
?>