<?php
session_destroy();
session_start();
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <table>
                    <tr>
                        <td>Enter registered Login-Email: </td>
                        <td><input id="LoginEmail" type="email" name="LoginEmail" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Send OTP"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
<?php
//sending the one time password to the login email of the service provider 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}


function wporg_replace_user_mail_from() {
    return 'inquiries@icertify.net.au';
}

function wpb_sender_name() {
    return 'iCertify';
}
// getting the loginEmail from the database
if(isset($_POST['submit'])) {
    global $wpdb;
    // Select data
    $LoginEmail =  $_POST["LoginEmail"];
    $results = $wpdb->get_results("select * from ServiceProviders Where LoginEmail='" . $LoginEmail . "'");
    if(count($results) == 1){
        // the message
        $otp=generate_string($permitted_chars, 10);
        $msg="Dear customer, \n\nPlease enter the following OTP to verify your email in order to reset the password.\n\nOTP: " .$otp."\n\nThanks, \nCOMPLIANCE. EASY. \ninquiries@icertify.net.au";
        $_SESSION["otp"] = $otp;
        $_SESSION["LoginEmail"] = $LoginEmail;

        // send email
        add_filter( 'wp_mail_from', 'wporg_replace_user_mail_from' );
        add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
        wp_mail($LoginEmail,"Reset Password OTP",$msg);
        header("Location: https://icertify.net.au/service-provider/service-provider-login/otp-verification-code/verify-otp/");
    }
    else{
        session_destroy();
        echo "<span style='color:#f44336;text-align:center;'>This login email is not registered. Register <a href='https://icertify.net.au/service-provider/service-provider-registeration/'>here</a> first.</span>";
    } 
}
?>