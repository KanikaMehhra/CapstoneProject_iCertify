<?php
session_start();
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <div><p>An OTP is emailed to the entered email address, if it is registered with iCertify.</p></div>
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
                <a href="https://icertify.net.au/otp-verification-code/">Resend OTP</a>
            </div>
        </div>
    </form>
</div>
<?php
echo $_SESSION["otp"];
// echo $_REQUEST["otp"];
if(isset($_POST['submit'])) {
if($_POST['otp']==$_SESSION["otp"]){
    echo "MATCHED";
}
else{
    echo "<span style='color:#f44336;text-align:center;'>Incorrect OTP. Try again or click on Resend OTP above.</span>";
}
}
    // if(isset($_POST['submit'])) {
    //     if($_POST['otp']==$_SESSION["otp"]){
    //         echo "MATCHED";
    //     }
        // else{
        //     echo "<span style='color:#f44336;text-align:center;'>Incorrect OTP. Try again or click on Resend OTP below.</span>"
        // }
    // }
?>