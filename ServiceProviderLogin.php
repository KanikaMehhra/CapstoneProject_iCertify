<?php
session_start();
// proccess login using the submit button
if (isset($_POST['login'])) {
    global $wpdb;
    // Select data
    $LoginEmail = $wpdb->escape($_POST['LoginEmail']);
    $Password = $wpdb->escape($_POST['Password']);
    $salt = "8dC_9Kl?";

    $results = $wpdb->get_results("select * from Supplier Where LoginEmail='" . $LoginEmail . "'");
    if (count($results) == 1) {
        $verified = $results[0]->Verified;
        if ($verified == 'Yes') {
            $encodedpass = md5($Password . $salt);
            if ($encodedpass == $results[0]->Password && $LoginEmail == $results[0]->LoginEmail) {
                $_SESSION['LoginEmail'] = $results[0]->LoginEmail;
                $_SESSION['OrganisationName'] = $results[0]->OrganisationName;
                $_SESSION['ContactName'] = $results[0]->ContactName;
                $_SESSION['PositionTitle'] = $results[0]->PositionTitle;
                $_SESSION['NoOfEmployees'] = $results[0]->NoOfEmployees;
                $_SESSION['ABNNo'] = $results[0]->ABNNo;
                $_SESSION['ContactEmail'] = $results[0]->ContactEmail;
                $_SESSION['Mobile'] = $results[0]->Mobile;
                $_SESSION['Telephone'] = $results[0]->Telephone;
                $_SESSION['HeadOfficeAddress'] = $results[0]->HeadOfficeAddress;
                $_SESSION['AverageOfYearlyCert'] = $results[0]->AverageOfYearlyCert;
                $_SESSION['NoOfPhysicalLocationsInAus'] = $results[0]->NoOfPhysicalLocationsInAus;
                $_SESSION['NoOfPhysicalLocationsOutAus'] = $results[0]->NoOfPhysicalLocationsOutAus;
                $_SESSION['CertificationsProvided'] = $results[0]->CertificationsProvided;
                $_SESSION['AdditionalServices'] = $results[0]->AdditionalServices;
                $_SESSION['PricingType'] = $results[0]->PricingType;
                $_SESSION['FixedValue'] = $results[0]->FixedValue;
                $_SESSION['MinPrice'] = $results[0]->MinPrice;
                $_SESSION['MaxPrice'] = $results[0]->MaxPrice;
                header("Location: https://icertify.net.au/service-provider/service-provider-login/service-provider-update-test/");
            } else {
                echo 'The password is inccorrect.';
            }
        } else {
            echo 'Your account has not been verified yet. Please wait unitl verified.';
        }
    } else {
        echo 'Account does not exist for these details. Please register from the Service Provider Registeration.';
        unset($_POST['LoginEmail']);
        unset($_POST['Password']);
    }
}
?>
<div class="container">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <table>
                    <tr>
                        <td>Email: </td>
                        <td><input id="LoginEmail" type="email" name="LoginEmail" required></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input id="Password" name="Password" type="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
<?php
?>