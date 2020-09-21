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
    <table border="1">  
        <tr>
            <td colspan="2" id="CP">Select Certifications Provided:</td>  
        </tr>  
        <tr>  
            <td>Quality</td>  
            <td><input type="checkbox" id="Q" name="CertificationsProvided[]" value="Quality"></td>  
        </tr>
        <tr>  
            <td>Workplace Health And Safety</td>  
            <td><input type="checkbox" id="WHS" name="CertificationsProvided[]" value="workplaceHealthAndSafety"></td>
        </tr>
        <tr>  
            <td>Environmental Sustainability</td>  
            <td><input type="checkbox" id="ES" name="CertificationsProvided[]" value="environmentalSustainability"></td>
        </tr>  
        <tr>  
            <td>Sourcing Practices</td>  
            <td><input type="checkbox" id="SP" name="CertificationsProvided[]" value="sourcingPractices"></td>  
        </tr>   
        <tr>  
            <td>Supply Chain Monitoring</td>  
            <td><input type="checkbox" id="SM" name="CertificationsProvided[]" value="supplyChainMonitoring"></td>  
        </tr>
        <tr>  
            <td>Energy Management</td>  
            <td><input type="checkbox" id="EM" name="CertificationsProvided[]" value="energyManagement"></td>
        </tr>
        <tr>  
            <td>Corporate Social Responsibility</td>  
            <td><input type="checkbox" id="CSR" name="CertificationsProvided[]" value="corporateSocialResponsibility"></td>
        </tr>  
        <tr>  
            <td>Sustainability Reporting</td>  
            <td><input type="checkbox" id="SR"name="CertificationsProvided[]" value="sustainabilityReporting"></td>  
        </tr> 
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
if(isset($_POST['submit'])) {
    global $wpdb;
    if(!empty($_POST["CertificationsProvided"])) {
        echo '<h3>You selected the following Certification</h3>';
        foreach($_POST["CertificationsProvided"] as $CertificationsProvided) {
            echo '<p>'.$CertificationsProvided.'</p>';
        }
    }
    else {
        echo 'please select at least one certification';
    } 
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