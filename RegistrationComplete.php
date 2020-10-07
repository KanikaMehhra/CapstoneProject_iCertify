<?php
?>
<body>
    <form action="https://icertify.net.au/">
        Thank you for registering with iCertify. Kindly wait for your account to be verified. You will be updated by
        email once verified.

        *Approximate wait: 4 business days

        <input type="hidden" id="ON" name="OrganisationName">
        <input type="hidden" id="CN" name="ContactName">
        <input type="hidden" id="PT" name="PositionTitle">
        <input type="hidden" id="NOE" name="NoOfEmployees">
        <input type="hidden" id="ABN" name="ABNNo">
        <input type="hidden" id="EMAIL" name="ContactEmail">
        <input type="hidden" id="MOB" name="Mobile">
        <input type="hidden" id="TEL" name="Telephone">
        <input type="hidden" id="HOL" name="HeadOfficeAddress">
        <input type="hidden" id="ACA" name="AverageOfYearlyCert">
        <input type="hidden" id="LIA" name="NoOfPhysicalLocationsInAus">
        <input type="hidden" id="AOA" name="NoOfPhysicalLocationsOutAus">
        <input type="hidden" id="CertProvided" name="CertProvided">
        <input type="hidden" id="addServices" name="addServices">
        <input type="hidden" id="LoginEmail" name="LoginEmail">
        <input type="hidden" id="Password" name="Password">
        <input type="submit" value="Go to Home Page" />
    </form>
</body>
<script>
if (typeof(Storage) !== "undefined") { 
    var LoginEmail = document.getElementById("LoginEmail").value;
    var Password = document.getElementById("Password").value;
    var OrganisationName = document.getElementById("ON").value;
    var ContactName = document.getElementById("CN").value;
    var PositionTitle = document.getElementById("PT").value;
    var NoOfEmployees = document.getElementById("NOE").value;
    var HeadOfficeAddress = document.getElementById("HOL").value;
    var ABNNo = document.getElementById("ABN").value;
    var NoOfPhysicalLocationsInAus = document.getElementById("LIA").value;
    var NoOfPhysicalLocationsOutAus = document.getElementById("AOA").value;
    var Mobile = document.getElementById("MOB").value;
    var Telephone = document.getElementById("TEL").value;
    var ContactEmail = document.getElementById("EMAIL").value;
    var AverageOfYearlyCert = document.getElementById("ACA").value;
    var CertificationsProvided = document.getElementById("CertProvided").value;
    var AdditionalServices = document.getElementById("addServices").value;
    LoginEmail.value = sessionStorage.getItem("LoginEmail");
    Password.value = sessionStorage.getItem("Password");
    OrganisationName.value = sessionStorage.getItem("OrganisationName");
    ContactName.value = sessionStorage.getItem("ContactName");
    PositionTitle.value = sessionStorage.getItem("PositionTitle");
    NoOfEmployees.value = sessionStorage.getItem("NoOfEmployees");
    HeadOfficeAddress.value = sessionStorage.getItem("HeadOfficeAddress");
    ABNNo.value = sessionStorage.getItem("ABNNo");
    NoOfPhysicalLocationsInAus.value = sessionStorage.getItem("NoOfPhysicalLocationsInAus");
    NoOfPhysicalLocationsOutAus.value = sessionStorage.getItem("NoOfPhysicalLocationsOutAus");
    Mobile.value = sessionStorage.getItem("Mobile");
    Telephone.value = sessionStorage.getItem("Telephone");
    ContactEmail.value = sessionStorage.getItem("ContactEmail");
    AverageOfYearlyCert.value = sessionStorage.getItem("AverageOfYearlyCert");
    CertificationsProvided.value = sessionStorage.getItem("CertificationsProvided");
    AdditionalServices.value = sessionStorage.getItem("AdditionalServices");
}
</script>
<?php
sleep(10);

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
?>