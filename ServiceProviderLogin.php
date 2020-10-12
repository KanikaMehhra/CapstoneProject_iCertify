<?php
?>
<div class="user-registration ur-frontend-form  " id="user-registration-form-5914">
    <h2 style="position:center">Login</h2>
    <form method="post">
        <div class="ur-form-row">
            <div class="form-group">
                <div class="ur-form-grid ur-grid-1" style="width:99%">
                    <label for="username">Login Email:</label>
                    <input oninput="clicked()" id="LoginEmail" type="email" name="LoginEmail" placeholder="Login E-mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Login Password:</label>
                    <input oninput="clicked()" id="Password" type="password" name="Password" placeholder="Login Password" required>
                </div>
            </div>
        </div>
        <div class="ur-button-container ">
            <button id="submit" type="submit" name="submit" value="Login" disabled>
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
//  $q = "select * from Test where LoginEmail='$LoginEmail' and Password=$Password and Verified='Yes')";

if (isset($_POST['LoginEmail']) && isset($_POST['Password'])) {
    global $wpdb;
    $LoginEmail = $_POST['LoginEmail'];
    $Password = $_POST['Password'];
    $Verified = $_POST['Verified'];

    $data_array = array(
        'LoginEmail' => $LoginEmail,
        'Password' => $Password,
        'Verified' => 'Yes'
    );
    $table_name = 'Test';
    $rowResult = $wpdb->update($table_name, $data_array, $format = NULL);
    if (mysqli_num_rows($rowResult) > 0) {
        $_SESSION['LoginEmail'] = $LoginEmail;
        } 
    }
    else {
        unset($_POST['LoginEmail']);
        unset($_POST['Password']);
        //nav bar
        echo "<div class=\"alert alert-danger alert-dismissible fade in\">";
        echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
        echo "<strong>Failed!</strong> Username or password is incorrect. ";
        echo "</div>";
    }
    die;
}
?>