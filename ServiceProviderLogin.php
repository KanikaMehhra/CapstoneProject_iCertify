<?php
?>
<div class="user-registration ur-frontend-form  " id="user-registration-form-5914">
    <form method="post">
        <div class="ur-form-row">
            <div class="form-group">
                <div class="ur-form-grid ur-grid-1" style="width:99%">
                    <label for="username">E-mail:</label>
                    <input oninput="clicked()" id="LoginEmail" type="email" name="LoginEmail" placeholder="Login E-mail" required>
                </div>
                <div class="form-group">
                    <div class="ur-form-grid ur-grid-1" style="width:99%">
                        <label for="password">Password:</label>
                        <input oninput="clicked()" id="Password" type="password" name="Password" placeholder="Login Password" required>
                    </div>
                </div>
            </div>
            <div class="ur-form-grid ur-grid-2" style="width:99%">
                <div class="ur-button-container ">
                    <input type="submit" name="submit" value="Submit" onclick="validateSubmit()">
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </form>
</div>
<script>
    function clicked() {
        var password = document.getElementById("Password");
        var email = document.getElementById("LoginEmail");
        if (password !== null && email !== null) {
            if (password.value.length !== 0 && email.value.length !== 0) {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;
            }
        }
    }
</script>
<?php
if (isset($_POST['LoginEmail']) && isset($_POST['Password'])) {
    global $wpdb;
    $LoginEmail = $_POST['LoginEmail'];
    $Password = $_POST['Password'];
    $Verified = $_POST['Verified'];

    $db_password = ""; //get the password from the database


    $data_array = array(
        'LoginEmail' => $LoginEmail,
        'Password' => $Password,
        'Verified' => 'Yes'
    );
    $table_name = 'Supplier';
    $rowResult = $wpdb->select($table_name, $data_array, $format = NULL);
    
    if ($_SESSION['LoginEmail'] == $LoginEmail && md5($Password . $salt) == $db_password) {
        header("Loction:https://www.google.com");
        exit(0);
    } else {
        unset($_POST['LoginEmail']);
        unset($_POST['Password']);
        //nav bar
        echo "<div class=\"alert alert-danger alert-dismissible fade in\">";
        echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
        echo "<strong>Failed!</strong> Username or password is incorrect. or you account has not been verifed.";
        echo "</div>";
    }
    die;
}
?>