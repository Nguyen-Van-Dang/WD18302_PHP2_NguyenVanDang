<?php
function get_courses(){
include 'data.php';
return array_values($course);
}
function find_by_subject ($subject) {
include 'data.php';
return (array_key_exists($subject,$course) ? $course[$subject]:'Môn: ');
}
?>
