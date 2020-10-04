<?php
?>
<form method=post enctype="multipart/form-data">
    Organisation Name<input type="text" id="ON" name="OrganisationName"><br>
    Contact Name<input type="text" id="CN" name="ContactName"><br>
    Position Title<input type="text" id="PT" name="PositionTitle"><br>
    Number of employees<input type="text" id="NOE" name="NoOfEmployees"><br>
    ABN/ACN<input type="number" id="ABN" required="required" name="ABNNo"><br>
    Mobile (+XX XXX XXX XXX)<input type="text" pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" required="required" name="Mobile"><br>
    Telphone (XX X XXXX XXXX)<input type="text" pattern="[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required="required" name="Telephone"><br>
    E-mail<input type="email" id="EMAIL" required="required" name="ContactEmail"><br>
    Head office location<input type="text" id="HOL" required="required" name="HeadOfficeAddress"><br>
    No. of physical locations within Aus<input type="number" min="1" id="LIA" required="required" name="NoOfPhysicalLocationsInAus"><br>
    No. of physical locations outside Aus<input type="number" min="1" id="AOA" required="required" name="NoOfPhysicalLocationsOutAus"><br>    
    Avg. no. of certifications/annum<input type="number" id="ACA" required="required" name="AverageOfYearlyCert"><br>
    <table>
        <input type="checkbox" name="CertificationsProvided[]" value="Quality"/>Quality
        <input type="checkbox" name="CertificationsProvided[]" value="Workplace Health And Safety">Workplace Health And Safety
        <input type="checkbox" name="CertificationsProvided[]" value="Environmental Sustainability">Environmental Sustainability
        <input type="checkbox" name="CertificationsProvided[]" value="Sourcing Practices">Sourcing Practices
        <input type="checkbox" name="CertificationsProvided[]" value="Supply Chain Monitoring">Supply Chain Monitoring
        <input type="checkbox" name="CertificationsProvided[]" value="Energy Management">Energy Management
        <input type="checkbox" name="CertificationsProvided[]" value="Corporate Social Responsibility">Corporate Social Responsibility
        <input type="checkbox" name="CertificationsProvided[]" value="Sustainability Reporting">Sustainability Reporting
    </table>
    <input type="submit" name="submit" value="Submit" onclick="myfunction()">
</form>
</div>
<script>
function myfunction() {
    alert(document.getElementById("ON").value);
    alert(document.getElementById("CN").value);
    alert(document.getElementById("PT").value);
    alert(document.getElementById("NOE").value);
    alert(document.getElementById("ABN").value);
    alert(document.getElementById("MOB").value);
    alert(document.getElementById("TEL").value);
    alert(document.getElementById("EMAIL").value);
    alert(document.getElementById("HOL").value);
    alert(document.getElementById("LIA").value);
    alert(document.getElementById("AOA").value);
    alert(document.getElementById("ACA").value);
} 
</script>
<?php
$CertificationsProvided = $_POST['CertificationsProvided'];
if(empty($CertificationsProvided)) {
   echo("You didn't select any certification.");
} 
else {
   $N = count($CertificationsProvided);

   echo("You selected $N certification(s): ");
   for($i=0; $i < $N; $i++){
     echo($CertificationsProvided[$i] . " ");
    }
}
if(isset($_POST['submit'])) {
    global $wpdb;
    $data_array = array(
        'OrganisationName' => $_POST['OrganisationName'],
        'ContactName' => $_POST['ContactName'],
        'PositionTitle' => $_POST['PositionTitle'],
        'NoOfEmployees' => $_POST['NoOfEmployees'],
        'ABNNo' => $_POST['ABNNo'],
        'Mobile' => $_POST['Mobile'],
        'Telephone' => $_POST['Telephone'],
        'ContactEmail' => $_POST['ContactEmail'],
        'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
        'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
        'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
        'AverageOfYearlyCert' => $_POST['AverageOfYearlyCert'],
        'CertificationsProvided' => $_POST['CertificationsProvided'] 
    );
    $table_name = 'Supplier';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>