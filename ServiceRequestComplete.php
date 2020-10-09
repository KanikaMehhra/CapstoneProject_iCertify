<?php
?>
<form action="https://icertify.net.au/">
    <div class="ur-form-row">
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <p>Thank you for choosing iCertify and filling in your service request. We will contact you shortly regarding your request.</p>

            <p>*Approximte wait : 3 - 5 business days.</p>

            <input id="submit" type="submit" name="submit" value="Go to Home Page" />
        </div>
    </div>
</form>
<?php
if (isset($_POST['submit'])) {
    global $wpdb;
    $data_array = array(
        'OrganisationName' => $_POST['OrganisationName'],
        'ContactName' => $_POST['ContactName'],
        'PositionTitle' => $_POST['PositionTitle'],
        'NoOfEmployees' => $_POST['NoOfEmployees'],
        'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
        'ABNNo' => $_POST['ABNNo'],
        'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
        'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
        'Mobile' => $_POST['Mobile'],
        'Telephone' => $_POST['Telephone'],
        'ContactEmail' => $_POST['ContactEmail'],
        'Date' => $_POST['Date'],
        'AddressRequired' => $_POST['AddressRequired'],
        'ServicesRequired' => $_POST['ServicesRequired'],
        'CurrentStatus' => $_POST['CurrentStatus'],
        'AdditionalServices' => $_POST['addServices'],
        'Urgent' => $_POST['Urgent']
    );
    $table_name = 'Buyer';
    $rowResult = $wpdb->insert($table_name, $data_array, $format = NULL);
    die;
}
?>