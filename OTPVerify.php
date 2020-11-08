<?php
session_start();
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <p>An OTP is emailed to the registered email address with iCertify.</p>
                </div>
                <table>
                    <tr>
                        <td>Enter OTP: </td>
                        <td><input id="otp" type="text" name="otp" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Verify OTP"></td>
                    </tr>
                </table>
                <a style="color:#2271b1;" href="https://icertify.net.au/service-provider/service-provider-login/otp-verification-code//">Resend OTP</a>
            </div>
        </div>
    </form>
</div>
<?php
// verifying the one time password
if (isset($_POST['submit'])) {
    if ($_POST['otp'] == $_SESSION["otp"]) {
        header("Location:https://icertify.net.au/service-provider/service-provider-login/otp-verification-code/verify-otp/reset-password/");
    } else {
        echo "<span style='color:#f44336;text-align:center;'>Incorrect OTP. Try again or click on Resend OTP above.</span>";
    }
}
?>