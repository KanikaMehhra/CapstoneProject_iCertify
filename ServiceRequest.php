<?php
?>
<form method=post enctype="multipart/form-data">
    Organisation Name<input type="text" id="ON" name="OrganisationName"><br>
    Contact Name<input type="text" id="CN" name="ContactName"><br>
    Position Title<input type="text" id="PT" name="PositionTitle"><br>
    Number of employees<input type="text" id="NOE" name="NoOfEmployees"><br>
    Head office location<input type="text" id="HOL" required="required" name="HeadOfficeAddress"><br>
    ABN/ACN<input type="number" id="ABN" required="required" name="ABNNo"><br>
    No. of physical locations within Aus<input type="number" min="1" id="LIA" required="required" name="NoOfPhysicalLocationsInAus"><br>
    No. of physical locations outside Aus<input type="number" min="1" id="AOA" required="required" name="NoOfPhysicalLocationsOutAus"><br>  
    Mobile (+XX XXX XXX XXX)<input type="text" pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" required="required" name="Mobile"><br>
    Telphone (XX X XXXX XXXX)<input type="text" pattern="[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required="required" name="Telephone"><br>
    E-mail<input type="email" id="EMAIL" required="required" name="ContactEmail"><br>
    Date (YYYY-MM-DD)<input type="date" id="DATE" required="required" name="Date"><br>
    <input type="submit" name="submit" value="Submit" onclick="myfunction()">
</form>
<script>
function myfunction() {
    alert(document.getElementById("ON").value);
    alert(document.getElementById("CN").value);
    alert(document.getElementById("PT").value);
    alert(document.getElementById("NOE").value);
    alert(document.getElementById("HOL").value);
    alert(document.getElementById("ABN").value);
    alert(document.getElementById("LIA").value);
    alert(document.getElementById("AOA").value);
    alert(document.getElementById("MOB").value);
    alert(document.getElementById("TEL").value);
    alert(document.getElementById("EMAIL").value);
    alert(document.getElementById("DATE").value);
} 
</script>
<?php
if(isset($_POST['submit'])) {
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
        'Date' => $_POST['Date']
    );
    $table_name = 'buyer';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>