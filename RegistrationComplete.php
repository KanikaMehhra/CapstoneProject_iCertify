 
<?php
?>
<form action="https://icertify.net.au/">Thank you for registering with iCertify. Kindly wait for your account to be verified. You will be updated by email once verified.

*Approximate wait: 4 business days
*If your details changes, please notify us through the <a>Contact Details provided</a>.
<input id="submit" type="submit" name="submit" value="Go to Home Page">

</form> 
<?php
if(isset($_POST['submit'])) {
    global $wpdb;
    $data_array = array(
        'OrganisationName' => $_POST['OrganisationName'],
        'ContactName' => $_POST['ContactName'],
        'PositionTitle' => $_POST['PositionTitle'],
        'NoOfEmployees' => $_POST['NoOfEmployees'],
        'ABNNo' => $_POST['ABNNo'],
        'ContactEmail' => $_POST['ContactEmail'],
        'Mobile' => $_POST['Mobile'],
        'Telephone' => $_POST['Telephone'],
        'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
        'AverageOfYearlyCert' => $_POST['AverageOfYearlyCert'],
        'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
        'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
        'CertificationsProvided' => $_POST['CertProvided'],
        'AdditionalServices' => $_POST['addServices'],
        'LoginEmail' => $_POST['LoginEmail'],
        'Password' => $_POST['Password']
    );
    $table_name = 'Supplier';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>