<?

namespace Src\Models;

use Src\Models\Database;

class Student
{
        // check tồn tại tên danh mục
    public function checkDuplicateCate($Cate)
    {
        $Data = new Database();
        $select = "SELECT * FROM category WHERE LOWER(category_name) = '$Cate'";
        $result = $Data->pdo_query($select);
        return $result;
    }

    function create_category($name, $birthday, $phone, $address)
    {
        $Data = new Database();
        $select = "INSERT INTO student(name, birthday, phone, address, is_deleted) VALUES ('$name',$birthday,$phone,$address, 1 )";
        $result = $Data->pdo_execute($select);
        return $result;
    }
}
