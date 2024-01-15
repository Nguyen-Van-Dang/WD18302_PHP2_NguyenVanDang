<?

namespace Src\Model;

class UserFunction
{

    public function checkAccount($Email, $password)
    {
        $pass_hash = md5($password);
        $Data = new Database();
        $select = "SELECT * FROM user WHERE email = '$Email' AND user_password = '$pass_hash' AND is_deleted = 2";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function checkUser($Email, $password)
    {
        $pass_hash = md5($password);
        $Data = new Database();
        $select = "SELECT * FROM user WHERE email = '$Email' AND user_password = '$pass_hash'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function checkRole($Email, $password)
    {
        $pass_hash = md5($password);
        $Data = new Database();
        $select = "SELECT user.role_id FROM user, `role` 
        WHERE user.role_id = role.role_id AND email = '$Email' AND user_password ='$pass_hash'";
        $result = $db->pdo_query_one($select);
        return $result;
    }

    function getInfoUserEmail($Email, $column)
    {
        $Data = new Database();
        $sql = "SELECT * FROM user WHERE email ='$Email'";
        $result = $db->pdo_query($sql);
        foreach ($result as $row) {
            return $row[$column];
        }
    }

    public function userid($userAccount, $password)
    {
        $Data = new Database();
        $select = "SELECT user_id FROM khachhang WHERE ho_ten='$userAccount' AND mat_khau='$password'";
        $result = $db->pdo_query_one($select);
        return $result;
    }
}
