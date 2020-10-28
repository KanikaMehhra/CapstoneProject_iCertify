<?php
    session_start();
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <table>
                    <tr>
                        <td>Enter New Password: </td>
                        <td><input minlength="8" id="Password" type="Password" name="Password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm New Password: </td>
                        <td><input minlength="8" oninput="validatePasswordMatch()" id="ConfirmPassword" name="ConfirmPassword" type="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input onclick="checkErrors()" type="submit" name="submit" value="Change Password"></td>
                    </tr>
                </table>
                <label style="color:#FF0000;" id="errorLabel"></label>
            </div>
        </div>
    </form>
    <a href="https://icertify.net.au/otp-verification-code/">Forgot Password </a>
</div>
<script>
    var errors=0;
function validatePasswordMatch() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("ConfirmPassword").value;
        var label = document.getElementById("errorLabel");
        if (password !== confirmPassword) {
            label.innerHTML = "*Passwords do not match";
            errors += 1;
        } else {
            label.innerHTML = "";
            errors = 0;
        }
    }
    function checkErrors(){
        if(errors!=0){
            event.preventDefault();
        }
    }
</script>
<?php
if(isset($_POST['submit'])) {
    global $wpdb;
    // Select data
    $LoginEmail =  $_SESSION["LoginEmail"];
    $results = $wpdb->get_results("select * from Supplier Where LoginEmail='" . $LoginEmail . "'");
    
    $Password=$_POST["Password"];
    $salt = "8dC_9Kl?";
    $encodedpass = md5($Password . $salt);

    $data = array(
        'Password' => $encodedpass
    );
    $table = 'Supplier';
    $where = array('LoginEmail' => $LoginEmail);
    $wpdb->update($table, $data, $where, $format = NULL);
    header("Location:https://icertify.net.au/service-provider/service-provider-login/");
    // echo '<pre>' . print_r($_SESSION, TRUE) ."\n". $Password."\n".$encodedpass.'</pre>';

}
?>