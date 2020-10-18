<?php
if (isset($_POST['submit'])) {
    global $wpdb;
    // Select data
    $loginEmail = $_POST['LoginEmail'];
    $password = $_POST['Password'];
    $salt = "8dC_9Kl?";

    $results = $wpdb->get_results("select LoginEmail, Password, Verified from Supplier Where LoginEmail='" . $loginEmail . "'");
    if (count($results) > 0) {
        $verified = $results[0]->Verified;
        if ($verified == 'Yes') {
            $encodedpass = md5($password . $salt);
            if ($encodedpass == $results[0]->Password) {
                header("Location: https://icertify.net.au/service-provider-update-test/");
                exit();
            } else {
                echo 'The password is inccorrect.';
            }
        } else {
            echo 'Your account has not been verified yet.';
        }
    } else {
        echo 'Account does not exist for these details. Please register from the Service Provider Registeration.';
    }
}
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <table border="1">
                    <tr>
                        <td>Email <input id="LoginEmail" type="email" name="LoginEmail" required></td>
                    </tr>
                    <tr>
                        <td>Password <input id="Password" name="Password" type="password" required></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Login">
            </div>
        </div>
    </form>
</div>
<?php
?>