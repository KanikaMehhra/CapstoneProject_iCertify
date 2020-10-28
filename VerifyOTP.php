<?php
session_start();
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            An OTP is emailed to the entered email address, if it is registered with iCertify.
            <br>
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
                <a href="">Resend OTP</a>
            </div>
        </div>
    </form>
</div>
<?php
echo $_SESSION["otp"];
?>