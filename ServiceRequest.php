<?php
?>
<div id="user-registration-form-5882" class="user-registration ur-frontend-form ">
    <form method=post enctype="multipart/form-data">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                Organisation Name<input type="text" id="ON" name="OrganisationName"><br>
                Contact Name<input type="text" id="CN" name="ContactName"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                Position Title<input type="text" id="PT" name="PositionTitle"><br>
                Number of employees<input type="text" id="NOE" name="NoOfEmployees"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                Head office location<input type="text" id="HOL" required="required" name="HeadOfficeAddress"><br>
                ABN/ACN<input type="number" id="ABN" required="required" name="ABNNo"><br>
                <label style="color:#FF0000;" id="errorLabel1"></label>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                No. of physical locations within Aus<input type="number" min="1" id="LIA" required="required" name="NoOfPhysicalLocationsInAus"><br>
                No. of physical locations outside Aus<input type="number" min="1" id="AOA" required="required" name="NoOfPhysicalLocationsOutAus"><br>  
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                Mobile (+XX XXX XXX XXX)<input type="text" pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" required="required" name="Mobile"><br>
                Telphone (XX X XXXX XXXX)<input type="text" pattern="[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required="required" name="Telephone"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                E-mail<input type="email" id="EMAIL" required="required" name="ContactEmail"><br>
                Date (YYYY-MM-DD)<input type="date" id="DATE" required="required" name="Date"><br>
            </div>
        </div>
        <div class="ur-button-container ">
            <input type="submit" name="submit" value="Submit" onclick="myfunction()">
        </div>
        <div style="clear: both;"></div>
        <input name="ur-user-form-id" type="hidden" value="5882" />
        <input name="ur-redirect-url" type="hidden" value="" />
        <input id="ur_frontend_form_nonce" name="ur_frontend_form_nonce" type="hidden" value="5db8c0f987" />
    </form>
    <div style="clear: both;"></div>
</div>
<script>
    var errors = 0;
    var abnCheck=0;
    var checkboxCheck=0;
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
    function validateABN() {    
        var abn = document.getElementById("ABN").value.length;
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
        'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
        'ABNNo' => $_POST['ABNNo'],
        'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
        'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
        'Mobile' => $_POST['Mobile'],
        'Telephone' => $_POST['Telephone'],
        'ContactEmail' => $_POST['ContactEmail'],
        'Date' => $_POST['Date']
    );
    $table_name = 'Buyer';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>