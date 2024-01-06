<?php
include 'model.php';
//controller
if (isset($_POST['submit'])){
$email = $_POST['email'];
$user = get_user($email);
}
include 'view.php';
?>
