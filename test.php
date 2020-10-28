<form method="post">
<input type="file" id="image" name="image" multiple>
<input type="submit" name="submit"/>
</form>
<?php
$uploaddir = './5.5.1/wp-content';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

// echo '<pre>';
if(isset($_POST['submit'])) {
echo move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile); 
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    echo 'Here is some more debugging info:';
print_r($_FILES);
} else {
    echo "Possible file upload attack!\n";
}
}


// print "</pre>";

?>