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
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            Address where service is requested<input type="text" id="HOL" required="required" name="AddressRequired"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div class="ur-field-item field-checkbox">
                    <table border="1">  
                        <tr>
                            <td colspan="2" id="CP">Select Certifications Provided:</td>  
                            <label style="color:#FF0000;" id="errorLabel2"></label>
                        </tr>  
                        <tr> 
                            <td>Quality</td>  
                            <td><input type="checkbox" id="Q" name="CertificationsProvided[]" value="Quality"></td>  
                        </tr>
                        <tr>  
                            <td>Workplace Health And Safety</td>  
                            <td><input type="checkbox" id="WHS" name="CertificationsProvided[]" value="Workplace Health And Safety"></td>
                        </tr>
                        <tr>  
                            <td>Environmental Sustainability</td>  
                            <td><input type="checkbox" id="ES" name="CertificationsProvided[]" value="Environmental Sustainability"></td>
                        </tr>  
                        <tr>  
                            <td>Sourcing Practices</td>  
                            <td><input type="checkbox" id="SP" name="CertificationsProvided[]" value="Sourcing Practices"></td>  
                        </tr>   
                        <tr>  
                            <td>Supply Chain Monitoring</td>  
                            <td><input type="checkbox" id="SM" name="CertificationsProvided[]" value="Supply Chain Monitoring"></td>  
                        </tr>
                        <tr>  
                            <td>Energy Management</td>  
                            <td><input type="checkbox" id="EM" name="CertificationsProvided[]" value="Energy Management"></td>
                        </tr>
                        <tr>  
                            <td>Corporate Social Responsibility</td>  
                            <td><input type="checkbox" id="CSR" name="CertificationsProvided[]" value="Corporate Social Responsibility"></td>
                        </tr>  
                        <tr>  
                            <td>Sustainability Reporting</td>  
                            <td><input type="checkbox" id="SR"name="CertificationsProvided[]" value="Sustainability Reporting"></td>  
                        </tr> 
                    </table> 
                </div>
            </div>
        </div>
        <div class="ur-form-grid ur-grid-2" style="width: 48%;">
            <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                <div id="radio_1598611551_field" class="form-row validate-required" data-priority="">
                    <table border="1">  
                        <tr>
                            <td colspan="2" id="CP">Additional services:</td>  
                        </tr>  
                        <tr>  
                            <td>Remote audit</td>  
                            <td><input type="checkbox" id="RA" name="AdditionalServices" value="Remote audit"></td>  
                        </tr>
                        <tr>  
                            <td>Gap audit</td>  
                            <td><input type="checkbox" id="GA" name="AdditionalServices" value="Gap audit"></td>
                        </tr>
                        <tr>  
                            <td>Others</td>  
                            <td><input type="checkbox" id="OTH" name="AdditionalServices" value="Others"></td>
                        </tr>  
                    </table> 
                </div>
            </div>
        </div>
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <div class="ur-field-item field-checkbox">
                <table border="1">  
                    <tr>
                        <td colspan="2" id="CP">Services Urgency:</td>  
                    </tr>  
                    <tr>  
                        <td>Urgent</td>  
                        <td><input type="checkbox" id="urgent" name="Urgent" value="urgent"></td>  
                    </tr>
                </table> 
            </div>
        </div>
        <div class="ur-form-grid ur-grid-2" style="width: 48%;">
            <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                <div id="radio_1598611551_field" class="form-row validate-required" data-priority="">
                    <table border="1">  
                        <tr>
                            <td colspan="2" id="CP">Current certification stauts:</td>  
                        </tr>  
                        <tr>  
                            <td>Exsits</td>  
                            <td><input type="radio" id="RA" name="CurrentStatus" value="Exsits"></td>  
                        </tr>
                        <tr>  
                            <td>Do not exist</td>  
                            <td><input type="radio" id="GA" name="CurrentStatus" value="Do not exist"></td>
                        </tr>
                    </table> 
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 99%;">
                Terms and Conditions<input type="checkbox" id="Demo" name="Demo">
                <input type="hidden" id="CertProvided" name="CertProvided">
                <input type="hidden" id="addServices" name="addServices">
                <input type="hidden" id="Uregent" name="Uregent">
                <input type="hidden" id="CurrentStatus" name="CurrentStatus">
            </div>        
        </div>
        <div class="ur-button-container ">
            <input type="submit" name="submit" value="Submit" onclick="validateSubmit()">
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
    function getCheckdValue(){
        checkboxes = document.querySelectorAll('input[name="CertificationsProvided"]:checked');
        let values = [];
        var string = ""
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        for(var i=0;i<values.length;i++){
            if(i===(values.length-1)){
                string+=values[i];
            }
            else {
                string+=values[i]+",";
            }     
        }
        var hidden = document.getElementById("CertProvided");
        hidden.value=string
        alert(hidden.value)
    }
    function getServicesValue(){
        checkboxes = document.querySelectorAll('input[name="AdditionalServices"]:checked');
        let values = [];
        var string = ""
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        for(var i=0;i<values.length;i++){
            if(i===(values.length-1)){
                string+=values[i];
            }
            else{
                string+=values[i]+",";
            }     
        }
        var addServices = document.getElementById("addServices");
        addServices.value=string
        alert(addServices.value)        
    }
    function getUrgentValue(){
        checkboxes = document.querySelectorAll('input[name="Urgent"]:checked');
        let values = [];
        var string = ""
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        for(var i=0;i<values.length;i++){
            if(i===(values.length-1)){
                string+=values[i];
            }
            else{
                string+=values[i]+",";
            }     
        }
        var Urgent = document.getElementById("Urgent");
        Urgent.value=string
        alert(Urgent.value)        
    }
    function getCurrentstatusValue(){
    radiobox = document.querySelectorAll('input[name="CurrentStatus"]:checked');
    let values = [];
    var string = ""
    radiobox.forEach((radio) => {
        values.push(radio.value);
    });

    for(var i=0;i<values.length;i++){
        if(i===(values.length-1)){
            string+=values[i];
        }else{
            string+=values[i]+",";
        }     
    }
    var CurrentStatus = document.getElementById("CurrentStatus");
    CurrentStatus.value=string
    alert(CurrentStatus.value)
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
        'Date' => $_POST['Date'],
        'AddressRequired' => $_POST['AddressRequired'],
        'CertificationsProvided' => $_POST['CertProvided'],
        'AdditionalServices' => $_POST['addServices'],
        'Urgent' => $_POST['Urgent'],
        'CurrentStatus' => $_POST['CurrentStatus']

    );
    $table_name = 'Buyer';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>