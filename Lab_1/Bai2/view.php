<!-- view -->
<?=$page_content;?>
<select name="courses">
<? foreach ($list_of_courses as $course_name): ?>
<option><?= $course_name ?></option>
<? endforeach; ?>
</setect>