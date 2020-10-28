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
    global $wpdb;
    // Select data
    $LoginEmail =  $_POST["LoginEmail"];
    echo $LoginEmail;
    $results = $wpdb->get_results("select * from Supplier Where LoginEmail='" . $LoginEmail . "'");
    print_r(count($results));
    if(count($results) == 1){
        // the message
        $msg = generate_string($permitted_chars, 10);

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        wp_mail($LoginEmail,"My subject",$msg);
        // echo $_SESSION['LoginEmail'];
        // header("Location:https://icertify.net.au/");

    } 
    // else{
    //     echo "This login email is not registered. Register" "<a href=''> here</a> first.";
    // }
}


?>