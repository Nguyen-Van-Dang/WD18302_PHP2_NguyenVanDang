<?php
include 'model.php';
echo 'PC07460 - Lab1 1.3 <br>';
//controller
if (isset($_POST['submit'])){
$email = $_POST['email'];
$user = get_user($email);
}
include 'view.php';
?>
