<?php
?>
<form method="post">
<input type="file" id="image" name="image" multiple>
<input type="submit" name="submit"/>
</form>
<?php
if(isset($_POST['submit'])) {
$upload_dir   = wp_upload_dir()['path'];
echo $upload_dir;
$filename = sanitize_text_field($_FILES["image"]["name"]);
$deprecated = null;
$bits = file_get_contents($_FILES["image"]["tmp_name"]);
$time = current_time('mysql');

$upload = wp_upload_bits($filename, $deprecated, $bits, $time);
}
?>