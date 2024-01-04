<?
echo 'PC07460 - Lab1 1.1 <br>';
$course = [
    's1' => 'Sinh',
    's2' => 'Sử',
    's3' => 'Địa',
    's4' => 'Toán',
    's5' => 'Lý',
    's6' => 'Hóa'
];
//model
/**
 * Hàm này dùng để lấy ra mảng tuần tự
 *
 * @return array
 */
function get_courses()
{
    global $course;
    return array_values($course);
}
/**
 * Hàm này dùng để kt coi có cái môn nào không
 *
 * @return string
 */
function find_by_subject($subject)
{
    global $course;
    return (array_key_exists($subject, $course) ? $course[$subject] : 'Môn: ');
}
// controtter
$list_of_courses = get_courses();
$subject = (!empty($_GET['subject'])) ? $_GET['subject'] : '';
$course_name = find_by_subject($subject);
$page_content = $course_name;
?>
<!-- view -->
<?= $page_content; ?>
<form action="">
<select name="$subject">
    <? foreach ($list_of_courses as $course_name) : ?>
        <option><?= $course_name ?></option>
    <? endforeach; ?>
</setect>
<button type="submit">Tìm..</button>
</form>