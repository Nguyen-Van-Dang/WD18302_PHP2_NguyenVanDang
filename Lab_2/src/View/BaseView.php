<?php
namespace Src\View;
class BaseView{
    function __construct(){
        echo'';
    }
}
?>
<!--Bootstrap CSS-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!--Custom style.css-->
<link rel="stylesheet" href="assets/css/quicksand.css">
<link rel="stylesheet" href="assets/css/style.css">
<!--Font Awesome-->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<!--Chartist CSS-->
<link rel="stylesheet" href="assets/css/chartist.min.css">
<!--Bootstrap Calendar-->
<link rel="stylesheet" href="assets/js/calendar/bootstrap_calendar.css">
<!--Page Wrapper-->

<!--Contextual classes table-->
<div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
  <h6 class="mb-2"><? echo '<header>PC07460 - Lab1 1.4 <br></header>'; ?></h6>
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
<!--/Contextual classes  table-->

<!-- Modal for Edit User -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Sửa Tài khoản</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add form elements for editing user details here -->
        <!-- Example: -->
        <form>
          <!-- Form fields go here -->
          <div class="form-group">
            <label for="editUserName">Name</label>
            <input type="text" class="form-control" id="editUserName" placeholder="Nhập tên">
          </div>
          <div class="form-group">
            <label for="editUserName">Password</label>
            <input type="text" class="form-control" id="editUserName" placeholder="Nhập mật khẩu">
          </div>
          <div class="form-group">
            <label for="editUserName">Email</label>
            <input type="text" class="form-control" id="editUserName" placeholder="Nhập email">
          </div>
          <!-- Add other form fields as needed -->
          <button type="button" class="btn btn-primary">Lưu</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal for Edit User -->
<!-- Modal for Add User -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Thêm Tài Khoản</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add form elements for adding a new user here -->
        <!-- Example: -->
        <form>
          <!-- Form fields go here -->
          <div class="form-group">
            <label for="editUserName">Name</label>
            <input type="text" class="form-control" id="editUserName" placeholder="Nhập tên">
          </div>
          <div class="form-group">
            <label for="editUserName">Password</label>
            <input type="text" class="form-control" id="editUserName" placeholder="Nhập mật khẩu">
          </div>
          <div class="form-group">
            <label for="editUserName">Email</label>
            <input type="text" class="form-control" id="editUserName" placeholder="Nhập email">
          </div>
          <!-- Add other form fields as needed -->
          <button type="button" class="btn btn-primary">Thêm</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal for Add User -->

<!--Page Wrapper-->
<!-- Page JavaScript Files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!--Popper JS-->
<script src="assets/js/popper.min.js"></script>
<!--Bootstrap-->
<script src="assets/js/bootstrap.min.js"></script>
<!--Sweet alert JS-->
<script src="assets/js/sweetalert.js"></script>
<!--Progressbar JS-->
<script src="assets/js/progressbar.min.js"></script>
<!--Charts-->
<!--Canvas JS-->
<script src="assets/js/charts/canvas.min.js"></script>
<!--Bootstrap Calendar JS-->
<script src="assets/js/calendar/bootstrap_calendar.js"></script>
<script src="assets/js/calendar/demo.js"></script>
<!--Bootstrap Calendar-->
<!--Custom Js Script-->
<script src="assets/js/custom.js"></script>
<!--Custom Js Script-->