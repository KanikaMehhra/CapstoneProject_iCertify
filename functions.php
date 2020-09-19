<?php
?>
<div id="user-registration-form-5882" class="user-registration ur-frontend-form  ">
<form method="post" enctype="multipart/form-data">
<div class="ur-form-row">
<div class="ur-form-grid ur-grid-1" style="width: 48%;">
<div>
<input id="organisationName" required="required" type="text" placeholder="Organisation Name" name="OrganisationName"/>
</div>
<div>
<input id="positionTitle" required="required" type="text" placeholder="Position Title" name="PositionTitle"/>
</div>
</div>
<div class="ur-form-grid ur-grid-2" style="width: 48%;">
<div>
<input id="contactName" required="required" type="text" placeholder="Contact Name" name="CertManagerName"/>
</div>
<div>
<input id="numOfEmployees" min="1" type="number" required="required" placeholder="Number of employees" name="NoOfEmployees"/>
</div>
</div>
</div>
<div class="ur-form-row">
<div class="ur-form-grid ur-grid-1" style="width: 48%;">
<div>
<input id="headOfficeLocation" required="required" type="text" placeholder="Head Office Location" name="HeadOfficeAddress"/>
</div>
</div>
<div class="ur-form-grid ur-grid-2" style="width: 48%;">
<div>
<input id="avgCerts" type="number" placeholder="Avg. no. of certifications/annum" required="required" name="AverageOfYearlyCert"/>
</div>
</div>
</div>
<div class="ur-form-row">
<div class="ur-form-grid ur-grid-1" style="width: 48%;">
<div>
<input id="ausLocation" max="1000" min="1" required="required" type="number" placeholder="No. of physical locations within Aus" name="NoOfPhysicalLocationsInAus"/>
</div>
</div>
<div class="ur-form-grid ur-grid-2" style="width: 48%;">
<div>
<input id="outAusLocation" max="1000" min="1" type="number" placeholder="No. of physical locations outside Aus" required="required" name="NoOfPhysicalLocationsOutAus"/>
</div>
</div>
</div>
<div class="ur-form-row">
<div class="ur-form-grid ur-grid-1" style="width: 48%;">
<div>
<input id="email" required="required" type="email" placeholder="E-mail" name="ContactEmail"/>
</div>
</div>
<div class="ur-form-grid ur-grid-2" style="width: 48%;">
<div>
<input id="abn" type="number" placeholder="ABN/ACN" required="required" oninput="validateABN()" name="ABNNo"/>
</div>
<div>
<label style="color:#FF0000;" id="errorLabel1"></label>
</div>
</div>
</div>
<div class="ur-form-row">
<div class="ur-form-grid ur-grid-1" style="width: 48%;">
<div>
<input id="mob" required="required" type="text" placeholder="Mobile (+XX XXX XXX XXX)" name="Mobile"/>
</div>
</div>
<div class="ur-form-grid ur-grid-2" style="width: 48%;">
<div>
<input id="tel" required="required" type="text" placeholder="Telephone (XX X XXXX XXXX)" name="Telephone"/>
</div>
</div>
</div>
<div class="ur-button-container ">
    <input type="submit" name="submit" value="Submit" onclick="validateSubmit()" >
</div>
</form>
<script>
    var errors = 0;
    var abnCheck=0;
    var checkboxCheck=0;
    function checkedCheckbox() {
        var label = document.getElementById("errorLabel2");
        if(errors>0){
        errors=errors-checkboxCheck;           
        }
        label.innerHTML = "";
    }
    function validateSubmit() {
        var label = document.getElementById("errorLabel2");
        var len = document.querySelectorAll('.checkbox input[type="checkbox"]:checked').length;
        if (len === 0) {
            errors += 1;
            checkboxCheck+=1;
            label.innerHTML = "*Please select atleast one certification.";
        }          
        if(errors>0){
            event.preventDefault();
        }
    }
    function validateABN() {
        var abn = document.getElementById("abn").value.length;
        var label = document.getElementById("errorLabel1");
        if (abn !== 11 && abn !== 9) {
            label.innerHTML = "ABN must be 11 and ACN must be 9 digit long";
            errors += 1;
            abnCheck+=1;
        }
        else {
            label.innerHTML = "";
            errors=errors-abnCheck;
        }
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
        'ABNNo' => $_POST['ABNNO'],
        'Mobile' => $_POST['Mobile'],
        'Telephone' => $_POST['Telephone'],
        'ContactEmail' => $_POST['ContactEmail'],
        'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
        'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
        'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
        'AverageOfYearlyCert' => $_POST['AverageOfYearlyCert']
    );
    $table_name = 'Organisation';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>