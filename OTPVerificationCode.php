<?php
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

if(isset($_POST['submit'])) {
    // the message
$msg = generate_string($permitted_chars, 10);

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
wp_mail("kanikamygov@gmail.com","My subject",$msg);
echo $_SESSION['LoginEmail'];
// header("Location:https://icertify.net.au/");
}


?>