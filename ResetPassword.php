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
                        <td><input id="Password" type="Password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm New Password: </td>
                        <td><input id="ConfirmPassword" name="ConfirmPassword" type="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <a href="https://icertify.net.au/otp-verification-code/">Forgot Password </a>
</div>
<?php
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>