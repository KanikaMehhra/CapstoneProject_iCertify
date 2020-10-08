<?php
?>
<div id="user-registration-form-5882" class="user-registration ur-frontend-form ">
    <form method=post enctype="multipart/form-data">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>Organisation Name </b><abbr class="required" title="required">*</abbr><input type="text" id="ON"
                        name="OrganisationName" required><br>
                    <b>Contact Name </b><abbr class="required" title="required">*</abbr> <input type="text" id="CN"
                        name="ContactName" required><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>Position Title </b><abbr class="required" title="required">*</abbr> <input type="text" id="PT"
                    name="PositionTitle" required><br>
                <b>Number of employees </b><abbr class="required" title="required">*</abbr> <input type="text" id="NOE"
                    name="NoOfEmployees" required><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>Head office location </b><abbr class="required" title="required">*</abbr> <input type="text" id="HOL"
                    required name="HeadOfficeAddress"><br>
                <b>ABN/ACN </b><abbr class="required" title="required">*</abbr> <input type="number" id="ABN" required
                    name="ABNNo" oninput="validateABN()"><br>
                <label style="color:#FF0000;" id="errorLabel1"></label>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>No. of physical locations within Aus </b><abbr class="required" title="required">*</abbr> <input
                    type="number" min="1" id="LIA" required name="NoOfPhysicalLocationsInAus"><br>
                <b>No. of physical locations outside Aus </b><abbr class="required" title="required">*</abbr> </b><input
                    type="number" min="1" id="AOA" required name="NoOfPhysicalLocationsOutAus"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>Mobile (+XX XXX XXX XXX) </b><abbr class="required" title="required">*</abbr> <input type="text"
                    pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" required name="Mobile"><br>
                <b>Telphone (XX X XXXX XXXX) </b><abbr class="required" title="required">*</abbr> <input type="text"
                    pattern="[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required name="Telephone"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>E-mail </b><abbr class="required" title="required">*</abbr> <input type="email" id="EMAIL" required
                    name="ContactEmail"><br>
                <b>Date (YYYY-MM-DD) </b><abbr class="required" title="required">*</abbr> <input type="date" id="DATE"
                    required name="Date" oninput="changeColor()" disabled><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <b>Address where service is requested </b><abbr class="required" title="required">*</abbr> <input
                    type="text" id="HOL" required name="AddressRequired"><br>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div class="ur-field-item field-checkbox">
                    <table border="1">
                        <tr>
                            <td colspan="2" id="CP"><b>Select required services: </b><abbr class="required"
                                    title="required">*</abbr></td>
                            <label style="color:#FF0000;" id="errorLabel2"></label>
                        </tr>
                        <tr>
                            <td>Quality</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="Q" name="ServicesRequired"
                                    value="Quality"></td>
                        </tr>
                        <tr>
                            <td>Workplace Health And Safety</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="WHS" name="ServicesRequired"
                                    value="Workplace Health And Safety"></td>
                        </tr>
                        <tr>
                            <td>Environmental Sustainability</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="ES" name="ServicesRequired"
                                    value="Environmental Sustainability"></td>
                        </tr>
                        <tr>
                            <td>Sourcing Practices</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="SP" name="ServicesRequired"
                                    value="Sourcing Practices"></td>
                        </tr>
                        <tr>
                            <td>Supply Chain Monitoring</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="SM" name="ServicesRequired"
                                    value="Supply Chain Monitoring"></td>
                        </tr>
                        <tr>
                            <td>Energy Management</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="EM" name="ServicesRequired"
                                    value="Energy Management"></td>
                        </tr>
                        <tr>
                            <td>Corporate Social Responsibility</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="CSR" name="ServicesRequired"
                                    value="Corporate Social Responsibility"></td>
                        </tr>
                        <tr>
                            <td>Sustainability Reporting</td>
                            <td><input type="checkbox" oninput="checkedCheckbox()" id="SR" name="ServicesRequired"
                                    value="Sustainability Reporting"></td>
                        </tr>
                        <tr>
                            <td>Other services</td>
                            <td><input type="text" id="OTHS" class="input-radio ur-frontend-field"
                                    name="AdditionalServices" type="text"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                    <div id="radio_1598611551_field" class="form-row validate-required" data-priority="">
                        <table border="1">
                            <tr>
                                <td colspan="2" id="CP"><b>Current certification stauts: </b><abbr class="required"
                                        title="required">*</abbr></td>
                                <label style="color:#FF0000;" id="errorLabel3"></label>
                            </tr>
                            <tr>
                                <td>Exsits</td>
                                <td><input type="radio" oninput="checkedRadio()" id="RA" name="CurrentStatus"
                                        value="Exsits"></td>
                            </tr>
                            <tr>
                                <td>Do not exist</td>
                                <td><input type="radio" oninput="checkedRadio()" id="GA" name="CurrentStatus"
                                        value="Do not exist"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                    <div id="radio_1598611551_field" class="form-row validate-required" data-priority="">
                        <table border="1">
                            <tr>
                                <td colspan="2" id="CP"><b>Additional services: </b></td>
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
                                <td><input type="text" id="OTHS" class="input-radio ur-frontend-field"
                                        name="AdditionalServices" type="text"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div class="ur-field-item field-checkbox">
                    <table border="1">
                        <tr>
                            <td colspan="2" id="CP"><b>Services Urgency:</b></td>
                        </tr>
                        <tr>
                            <td>Urgent</td>
                            <td><input type="checkbox" id="Urgent" name="Urgent" value="Urgent"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <input type="checkbox" id="Demo" name="Demo" oninput="demo()"><b> Terms and Conditions </b><abbr
                        class="required" title="required">*</abbr>
                <input type="hidden" id="ServicesRequired" name="ServicesRequired">
                <input type="hidden" id="addServices" name="addServices">
                <input type="hidden" id="Uregent" name="Uregent">
                <input type="hidden" id="CurrentStatus" name="CurrentStatus">
            </div>
        </div>
        <div class="ur-button-container ">
            <input type="submit" name="submit" value="Submit" onclick="validateSubmit()">
            <label style="color:#FF0000;" id="finalErrorCheck"></label>
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
var abnCheck = 0;
var checkboxCheck = 0;
var radioCheck=0;
var dateInput = document.getElementById("DATE");
var today = new Date();
var day = today.getDate();
var mon = new String(today.getMonth() + 1);
var yr = today.getFullYear();
if (mon.length < 2) {
    mon = "0" + mon;
}
var date = new String(yr + '-' + mon + '-' + day);
dateInput.disabled = false;
dateInput.setAttribute('min', date);
function validateABN() {
    var abn = document.getElementById("ABN").value.length;
    var label = document.getElementById("errorLabel1");
    if (abn !== 11 && abn !== 9) {
        label.innerHTML = "ABN must be 11 and ACN must be 9 digit long";
        errors += 1;
        abnCheck += 1;
    } else {
        label.innerHTML = "";
        errors = errors - abnCheck;
    }
}
function validateSubmit() {
    var label = document.getElementById("errorLabel2");
    var len = document.querySelectorAll('.checkbox input[type="checkbox"]:checked').length;
    if (len === 0) {
        errors += 1;
        checkboxCheck += 1;
        label.innerHTML = "*Please select at least one service.";
    }
    var label3 = document.getElementById("errorLabel3");
    var len3 = document.querySelectorAll('input[type="radio"]:checked').length;
    if (len3 === 0) {
        errors += 1;
        radioCheck += 1;
        label3.innerHTML = "*Please select current certification status.";
    }
    if (errors > 0) {
        var finalCheck = document.getElementById("finalErrorCheck").innerHTML =
            "*Please fill in all the required details."
        event.preventDefault();
    }
}
function checkedCheckbox() {
    var label = document.getElementById("errorLabel2");
    if (errors > 0) {
        errors = errors - checkboxCheck;
    }
    label.innerHTML = "";
}
function checkedRadio() {
    var label = document.getElementById("errorLabel3");
    if (errors > 0) {
        errors = errors - radioCheck;
    }
    label.innerHTML = "";
}
function getCheckdValue() {
    checkboxes = document.querySelectorAll('input[name="ServicesRequired"]:checked');
    other = document.getElementById('OTH');
    let values = [];
    var string = ""
    if (checkboxes.length > 0) {
        string += ",";
    }
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    for (var i = 0; i < values.length; i++) {
        if (i === (values.length - 1)) {
            string += values[i];
        } else {
            string += values[i] + ",";
        }
    }
    var hidden = document.getElementById("ServicesRequired");
    hidden.value = string
    alert(hidden.value)
}
function getServicesValue() {
    checkboxes = document.querySelectorAll('input[name="AdditionalServices"]:checked');
    other = document.getElementById('OTH');
    let values = [];
    var string = ""
    if (checkboxes.length > 0) {
        string += ",";
    }
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    for (var i = 0; i < values.length; i++) {
        if (i === (values.length - 1)) {
            string += values[i];
        } else {
            string += values[i] + ",";
        }
    }
    var addServices = document.getElementById("addServices");
    addServices.value = string
    alert(addServices.value)
}
function getUrgentValue() {
    checkboxes = document.querySelectorAll('input[name="Urgent"]:checked');
    let values = [];
    var string = ""
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    for (var i = 0; i < values.length; i++) {
        if (i === (values.length - 1)) {
            string += values[i];
        } else {
            string += values[i] + ",";
        }
    }
    var Urgent = document.getElementById("Urgent");
    Urgent.value = string
    alert(Urgent.value)
}
function getCurrentstatusValue() {
    radiobox = document.querySelectorAll('input[name="CurrentStatus"]:checked');
    let values = [];
    var string = ""
    radiobox.forEach((radio) => {
        values.push(radio.value);
    });

    for (var i = 0; i < values.length; i++) {
        if (i === (values.length - 1)) {
            string += values[i];
        } else {
            string += values[i] + ",";
        }
    }
    var CurrentStatus = document.getElementById("CurrentStatus");
    CurrentStatus.value = string
    alert(CurrentStatus.value)
}
function changeColor(){
document.getElementById("DATE").style.color="rgb(59, 59, 59)";
}
var intervalID = setInterval(function () {
      var inputs = document.querySelectorAll('.addressDetails input');
      var completed = true;
      for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value.length == 0) {
          completed = flase;
          break;
        }
      }
    }, 300);
function demo() {
    getCheckdValue()
    getServicesValue()
    getCurrentstatusValue()
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
        'ServicesRequired' => $_POST['ServicesRequired'],
        'CurrentStatus' => $_POST['CurrentStatus'],
        'AdditionalServices' => $_POST['addServices'],
        'Urgent' => $_POST['Urgent']
    );
    $table_name = 'Buyer';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>