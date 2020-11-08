<?php
if (isset($_POST['submit'])) {
    global $wpdb;
    $abn = $_POST['ABNNo'];
    $LoginEmail = $_POST['LoginEmail'];
    $password = $_POST['Password'];
    $salt = "8dC_9Kl?";
    $encrypted_password = md5($password . $salt);

    $results = $wpdb->get_results("select * from Supplier Where ABNNo='" . $abn . "' OR LoginEmail='" . $LoginEmail . "'");
    if (count($results) > 0) {
        echo "<span style='color:#f44336;text-align:center;'> We have an entry with this registered ABN or login Email. Please <a href='https://icertify.net.au/service-provider/service-provider-login/'>login</a> to check your details</span>";
    } else {
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
            'Password' => $encrypted_password
        );
        $table_name = 'Supplier';
        $rowResult = $wpdb->insert($table_name, $data_array, $format = NULL);
        $msg = "Hi, \n\nA new Service Provider Registration has been made.";
        wp_mail("inquiries@icertify.net.au", "New Service Provider Registration!", $msg);
        header("location: https://icertify.net.au/service-provider/service-provider-registeration/registration-complete/");
        die;
    }
}
?>
<div id="user-registration-form-5882" class="user-registration ur-frontend-form  ">
    <form method="post" enctype="multipart/form-data" action="https://icertify.net.au/buyers-request/request-form/request-complete/">
        <div class="user-registration ur-frontend-form" id="user-registration-form-5914">
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <strong style="color:#2271b1;">Organisation Details</strong>
                    </div>
                </div>
            </div>
            <br>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Organisation Name </b><abbr class="required" title="required">*</abbr><input type="text" id="ON" name="OrganisationName" required>
                    </div>
                    <div>
                        <b>Head office location </b><abbr class="required" title="required">*</abbr><input type="text" id="HOL" required name="HeadOfficeAddress">
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>ABN/ACN </b><abbr class="required" title="required">*</abbr><input type="number" id="ABN" required name="ABNNo" oninput="validateABN()"><label style="color:#FF0000;" id="errorLabel1"></label>
                    </div>
                    <div>
                        <b>Number of employees </b><abbr class="required" title="required">*</abbr><input type="number" id="NOE" name="NoOfEmployees" min="1" required>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>No. of physical locations within Australia </b><abbr class="required" title="required">*</abbr><input type="number" min="1" id="LIA" required name="NoOfPhysicalLocationsInAus">
                    </div>
                    <div>
                        <b>No. of physical locations outside Australia</b><abbr class="required" title="required">*</abbr><input type="number" id="AOA" required name="NoOfPhysicalLocationsOutAus">
                    </div>
                </div>
            </div>
        </div>
        <div class="user-registration ur-frontend-form" id="user-registration-form-5914">
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <strong style="color:#2271b1;">Contact Details</strong>
                    </div>
                </div>
            </div>
            <br>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Contact Name </b><abbr class="required" title="required">*</abbr><input type="text" id="CN" name="ContactName" required>
                    </div>
                    <div>
                        <b>Position Title </b><abbr class="required" title="required">*</abbr><input type="text" id="PT" name="PositionTitle" required>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>E-mail </b><abbr class="required" title="required">*</abbr><input type="email" id="EMAIL" required name="ContactEmail">
                    </div>
                    <div>
                        <b>Mobile (+XX XXX XXX XXX) </b><input type="text" pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" name="Mobile">
                    </div>
                    <div>
                        <b>Telphone (+XX X XXXX XXXX) </b><abbr class="required" title="required">*</abbr><input type="text" pattern="\+[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required name="Telephone">
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Reuqired date for the service </b><abbr class="required" title="required">*</abbr> <input type="date" id="DATE" required name="Date"><br>
                    </div>
                    <div>
                        <b>Address where service is requested </b><abbr class="required" title="required">*</abbr> <input type="text" id="AR" required name="AddressRequired"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-registration ur-frontend-form" id="user-registration-form-5914">
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <strong style="color:#2271b1;">Buyer Request Details</strong>
                    </div>
                </div>
            </div> 
            <br>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div class="ur-field-item field-checkbox">
                        <table class="checkbox">
                            <tr>
                                <td colspan="2" id="CP"> <b> Select required services: <abbr class="required" title="required">*</abbr></b></td>
                                <label style="color:#FF0000;" id="errorLabel2"></label>
                            </tr>
                            <tr>
                                <td>Quality</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="Q" name="ServicesRequired" value="Quality"></td>
                            </tr>
                            <tr>
                                <td>Workplace Health And Safety</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="WHS" name="ServicesRequired" value="Workplace Health And Safety"></td>
                            </tr>
                            <tr>
                                <td>Environmental Sustainability</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="ES" name="ServicesRequired" value="Environmental Sustainability"></td>
                            </tr>
                            <tr>
                                <td>Sourcing Practices</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="SP" name="ServicesRequired" value="Sourcing Practices"></td>
                            </tr>
                            <tr>
                                <td>Supply Chain Monitoring</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="SM" name="ServicesRequired" value="Supply Chain Monitoring"></td>
                            </tr>
                            <tr>
                                <td>Energy Management</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="EM" name="ServicesRequired" value="Energy Management"></td>
                            </tr>
                            <tr>
                                <td>Corporate Social Responsibility</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="CSR" name="ServicesRequired" value="Corporate Social Responsibility"></td>
                            </tr>
                            <tr>
                                <td>Sustainability Reporting</td>
                                <td><input oninput="checkedCheckbox()" type="checkbox" id="SR" name="ServicesRequired" value="Sustainability Reporting"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                        <table border="1">
                            <tr>
                                <td colspan="2" id="CP"><b>Current certification stauts: </b><abbr class="required" title="required">*</abbr></td>
                                <label style="color:#FF0000;" id="errorLabel3"></label>
                            </tr>
                            <tr>
                                <td>Exsits</td>
                                <td><input type="radio" oninput="checkedRadio()" id="RA" name="CurrentStatus" value="Exsits"></td>
                            </tr>
                            <tr>
                                <td>Does not exist</td>
                                <td><input type="radio" oninput="checkedRadio()" id="GA" name="CurrentStatus" value="Do not exist"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div class="ur-field-item field-checkbox">
                        <table class="checkbox">
                            <tr>
                                <td colspan="2" id="CP"> <b>Additional services: </b></td>
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
                                <td>Other Services</td>
                                <td><input type="text" id="OTH" class="input-radio ur-frontend-field" name="AdditionalServices" type="text"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                        <table border="1">
                            <tr>
                                <td colspan="2" id="CP"><b>Is the service urgent:</b></td>
                            </tr>
                            <tr>
                                <td>Yes</td>
                                <td><input type="radio" id="YES" name="ServiceUrgency" value="Yes"></td>
                            </tr>
                            <tr>
                                <td>No</td>
                                <td><input type="radio" id="NO" name="ServiceUrgency" value="No"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <input type="checkbox" id="Demo" name="Demo" required oninput="demo()"><b>By signing up I agree to the <a href="https://icertify.net.au/terms-and-conditions-for-service-providers/" target="_blank" style="color:#2271b1;" rel="noopener noreferrer">terms and conditions.</a></b><abbr class="required" title="required">*</abbr>
                <input type="hidden" id="ServicesRequired" name="ServicesRequired">
                <input type="hidden" id="addServices" name="addServices">
                <input type="hidden" id="Urgent" name="Urgent">
                <input type="hidden" id="CurrStatus" name="CurrentStatus">
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
    var abnCheck = 0;
    var checkboxCheck = 0;
    var radioCheck = 0;
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
        let values = [];
        var string = ""
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        for (var i = 0; i < values.length; i++) {
            if (i === (values.length - 1)) {
                string += values[i];
            }
            else {
                string += values[i] + ",";
            }
        }
        var hidden = document.getElementById("ServicesRequired");
        hidden.value = string
    }
    function getServicesValue() {
        checkboxes = document.querySelectorAll('input[name="AdditionalServices"]:checked');
        other = document.getElementById('OTH');
        let values = [];
        var string = other.value;
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        for (var i = 0; i < values.length; i++) {
            if (i === (values.length - 1)) {
                string += values[i];
            } else {
                string += values[i] + ", ";
            }
        }
        var addServices = document.getElementById("addServices");
        addServices.value = string
    }
    function getUrgentValue() {
        radiobox = document.querySelectorAll('input[name="ServiceUrgency"]:checked');
        let values = [];
        var string = ""
        radiobox.forEach((radio) => {
            values.push(radio.value);
        });
        for (var i = 0; i < values.length; i++) {
            string += values[i];
        }
        var Urgent = document.getElementById("Urgent");
        Urgent.value = string
    }
    function getCurrentstatusValue() {
        radiobox = document.querySelectorAll('input[name="CurrentStatus"]:checked');
        let values = [];
        var string = ""
        radiobox.forEach((radio) => {
            values.push(radio.value);
        });
        for (var i = 0; i < values.length; i++) {
            string += values[i];
        }
        var CurrStatus = document.getElementById("CurrStatus");
        CurrStatus.value = string
    }
    function demo() {
        getCheckdValue()
        getServicesValue()
        getCurrentstatusValue()
        getUrgentValue()
    }
    var dateInput = document.getElementById("DATE");
    var today = new Date();
    var day = today.getDate();
    // Set month to string to add leading 0
    var mon = new String(today.getMonth() + 1); //January is 0!
    var yr = today.getFullYear();
    if (mon.length < 2) { mon = "0" + mon; }
    var date = new String(yr + '-' + mon + '-' + day);
    dateInput.disabled = false;
    dateInput.setAttribute('min', date);
</script>
<?php
?>