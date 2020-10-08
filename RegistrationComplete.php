<?php
?>
<form action="https://icertify.net.au/">
    <div class="ur-form-row">
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <p>Thank you for registering with iCertify. Kindly wait for your account to be verified. You will be updated
                by email once verified.</p>
            <p>Thank you for registering with iCertify. Kindly wait for your account to be verified. You will be updated
                by email once verified.</p>
            <p>*Approximate wait: 3-5 business days.</p>
            <p>*If your details changes, please notify us through the <a>Contact Details provided</a>.</p>
            <input id="submit" type="submit" name="submit" value="Go to Home Page">
        </div>
    </div>
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
        'Password' => $_POST[SHA('Password')]
    );
    $table_name = 'Supplier';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>