<?php
include 'model.php';
echo 'PC07460 - Lab1 1.2 <br>';
//controtter
$list_of_key = get_key();
if(isset($_POST['submit'])){
    $subject = (!empty($_POST['subject']) ? $_POST['subject']:'');
    $course_name = find_by_subject($subject);
$page_content = $course_name;
}
include 'view.php';
?>
