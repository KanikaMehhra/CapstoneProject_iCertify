hello
<?php
// wporg_replace_user_mail_from()
/**
 * Filter the email address to send from and replace the user.
 *
 * @param string $from_email Email address to send from.
 *
 * @return string The new email address.
 */
// function wporg_replace_user_mail_from( $from_email ) {
//     // This will give us and array with the email user and the domain
//     // like this [ 'wordpress', 'example.tld' ]
//     $parts = explode( '@', $from_email );
 
//     // Add our new email user, add @ again, and append the domain
//     // This will be hello@example.tld
//     return 'kanikamygov@' . $parts[1];
// }

function wporg_replace_user_mail_from() {
    return 'inquiries@icertify.net.au';
}

function wpb_sender_name() {
    return 'iCertify';
}
 
add_filter( 'wp_mail_from', 'wporg_replace_user_mail_from' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
wp_mail("kanikamygov@gmail.com","New Service Provider Registration!","hello");

?>