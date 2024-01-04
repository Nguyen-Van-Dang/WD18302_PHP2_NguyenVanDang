<?php
include 'model.php';
echo 'PC07460 - Lab1 1.2 <br>';
//controtter
$list_of_courses = get_courses();
$subject = (!empty($_GET['subject']) ? $_GET['subject']:'');
$course_name = find_by_subject($subject);
$page_content = $course_name;
include 'view.php';
?>
