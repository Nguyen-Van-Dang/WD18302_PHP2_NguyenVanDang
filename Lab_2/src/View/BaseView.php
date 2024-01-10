<?
namespace Src\View;
class BaseView
{
    function display_user($user)
    {
        if (isset($user)) {
?>
            <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th style="width: 15%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?
                            foreach ($user as $row) {
                                echo ' 
                        <tr class="table-info">
                          <td>' . $row['id'] . '</td>
                          <td>' . $row['name'] . '</td>
                          <td>' . $row['password'] . '</td>
                          <td>' . $row['email'] . '</td>
                          <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Thêm</button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editUserModal">Sửa</button>
                          <button type="button" class="btn btn-danger" name="id">Xóa</button>
                          </td>
                        </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
<?
        } else {
            echo "No user";
        }
    }
}
$user = [['id' => 1, 'name' => 'John Doe', 'password' => 'hashed_password', 'email' => 'john@example.com'],];   
$view = new BaseView();
$view->display_user($user);
?>