<?php
/**
 * Hàm này dùng để lấy ra mảng tuần tự
 *
 * @return array
 */
function get_courses(){
include 'data.php';
return array_values($course);
}
function get_key(){
    include 'data.php';
    return array_keys($course);
    }
/**
 * Hàm này dùng để kt coi có cái môn nào không
 *
 * @return string
 */
function find_by_subject ($subject) {
include 'data.php';
return (array_key_exists($subject,$course) ? $course[$subject]:'Môn: ');
}
?>
