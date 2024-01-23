<?

namespace App\Model;

use App\Model\Database;

class UserFunction
{
    public function checkAccount($user_account, $user_password)
    {
        // $user_password = md5($user_password);
        $Data = new Database();
        $select = "SELECT * FROM user WHERE user_account = '$user_account' AND user_password = '$user_password' AND is_deleted = 2";
        $result = $Data->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function checkUser($user_account, $user_password)
    {
        // $user_password = md5($user_password);
        $Data = new Database();
        $select = "SELECT * FROM user WHERE user_account = '$user_account' AND user_password = '$user_password'";
        $result = $Data->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function checkRole($user_account, $user_password)
    {
        // $user_password = md5($user_password);
        $Data = new Database();
        $select = "SELECT user.role_id FROM user, `role` 
        WHERE user.role_id = role.role_id AND user_account = '$user_account' AND user_password ='$user_password'";
        $result = $Data->pdo_query_one($select);
        return $result;
    }

    function get_Info_User_account($user_account, $column)
    {
        $Data = new Database();
        $sql = "SELECT * FROM user WHERE user_account ='$user_account'";
        $result = $Data->pdo_query($sql);
        foreach ($result as $row) {
            return $row[$column];
        }
    }
    public function user_id($user_account, $user_password)
    {
        $Data = new Database();
        $select = "SELECT user_id FROM user WHERE user_account='$user_account' AND user_password='$user_password'";
        $result = $Data->pdo_query_one($select);
        return $result;
    }

    // đăng kí
    function user_create($user_name, $user_phone_number, $pass1)
    {
        $Data = new Database();
        $sql = "INSERT INTO user(user_name, user_phone_number, user_password, role_id, is_deleted ) VALUES ('$user_name', '$user_phone_number', '$pass1', 2, 2)";
        $result = $Data->pdo_execute($sql);
        return $result;
    }
////////////////////
    public function check_User($Product, $Type_ID, $cate_ID)
    {

        $Data = new Database();
        $sql = "SELECT * FROM products WHERE LOWER(product_name) = '$Product' AND type_id = $Type_ID AND category_id = $cate_ID";
        $result = $Data->pdo_execute($sql);
        return $result;
    }

    function Add_User($product_name, $product_price, $product_sale, $product_img, $product_quantily, $category_id, $type_id, $product_short_description, $product_description, $user_created)
    {

        $Data = new Database();
        $sql = "INSERT INTO 
        products(product_name,product_img, product_price, product_sale,product_quantily, category_id, type_id ,product_short_description ,product_description, user_created, is_deleted )
        VALUES
        ('$product_name','$product_img' , $product_price, $product_sale, $product_quantily, $category_id , $type_id,'$product_short_description' ,'$product_description', $user_created,1  )";
        $result = $Data->pdo_execute($sql);
    }
}
