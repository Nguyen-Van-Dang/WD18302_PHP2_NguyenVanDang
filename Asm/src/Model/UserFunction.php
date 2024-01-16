<?

namespace Src\Model;

use Src\Model\Database;

class UserFunction
{
    public function checkAccount($user_account, $user_password)
    {
        // $user_password = md5($user_password);
        $Data = new Database();
        $select = "SELECT * FROM sign_in WHERE user_account = '$user_account' AND user_password = '$user_password' AND is_deleted = 2";
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
        $select = "SELECT * FROM sign_in WHERE user_account = '$user_account' AND user_password = '$user_password'";
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
        $select = "SELECT sign_in.role_id FROM sign_in, `role` 
        WHERE sign_in.role_id = role.role_id AND user_account = '$user_account' AND user_password ='$user_password'";
        $result = $Data->pdo_query_one($select);
        return $result;
    }

    function get_Info_User_account($user_account, $column)
    {
        $Data = new Database();
        $sql = "SELECT * FROM sign_in WHERE user_account ='$user_account'";
        $result = $Data->pdo_query($sql);
        foreach ($result as $row) {
            return $row[$column];
        }
    }
    public function user_id($user_account, $user_password)
    {
        $Data = new Database();
        $select = "SELECT user_id FROM sign_in WHERE user_account='$user_account' AND user_password='$user_password'";
        $result = $Data->pdo_query_one($select);
        return $result;
    }

    // đăng kí

    function user_create($user_name, $user_phone_number, $pass1)
    {
        $Data = new Database();
        $sql = "INSERT INTO sign_in(user_name, user_phone_number, user_password, role_id, is_deleted ) VALUES ('$user_name', '$user_phone_number', '$pass1', 2, 2)";
        $result = $Data->pdo_execute($sql);
        return $result;
    }
}
