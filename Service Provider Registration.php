<?php 
if (isset($_POST['submit'])) {
    global $wpdb;
    $abn = $_POST['ABNNo'];
    $LoginEmail = $_POST['LoginEmail'];
    $password = $_POST['Password'];
    $salt = "8dC_9Kl?";
    $encrypted_password = md5($password . $salt);

    $results = $wpdb->get_results("select * from Supplier Where ABNNo='".$abn."' OR LoginEmail='".$LoginEmail."'");
    if (count($results) > 0) {
        echo "<span style='color:#f44336;text-align:center;'> We have an entry with this registered ABN or login Email. Please <a href='https://icertify.net.au/service-provider/service-provider-login/'>login</a> to check your details</span>";
    }
    else {
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
        wp_mail("inquiries@icertify.net.au","New Service Provider Registration!",$msg);
        header("location: https://icertify.net.au/service-provider/service-provider-registeration/registration-complete/");
        die;
    }
}
?>
<html>
<div id="user-registration-form-5882" class="user-registration ur-frontend-form  ">
    <form method="post" enctype="multipart/form-data">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <b>Organisation Name </b><abbr class="required" title="required">*</abbr><input type="text" id="ON"
                        name="OrganisationName" required>
                </div>
                <div>
                    <b>Contact Name </b><abbr class="required" title="required">*</abbr><input type="text" id="CN"
                        name="ContactName" required>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <b>Position Title </b><abbr class="required" title="required">*</abbr><input type="text" id="PT"
                        name="PositionTitle" required>
                </div>
                <div>
                    <b>Number of employees </b><abbr class="required" title="required">*</abbr><input type="number"
                        id="NOE" name="NoOfEmployees" min="1" required>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <b>ABN/ACN </b><abbr class="required" title="required">*</abbr><input type="number" id="ABN"
                        required name="ABNNo" oninput="validateABN()"><label style="color:#FF0000;"
                        id="errorLabel1"></label>
                </div>
                <div>
                    <b>E-mail </b><abbr class="required" title="required">*</abbr><input type="email" id="EMAIL"
                        required name="ContactEmail">
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <b>Mobile (+XX XXX XXX XXX) </b><input type="text"
                        pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" name="Mobile">
                </div>
                <div>
                    <b>Telphone (+XX X XXXX XXXX) </b><abbr class="required" title="required">*</abbr><input type="text"
                        pattern="\+[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required name="Telephone">
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <b>Head office location </b><abbr class="required" title="required">*</abbr><input type="text"
                        id="HOL" required name="HeadOfficeAddress">
                </div>
                <div>
                    <b>Avg. no. of certifications/annum </b><abbr class="required" title="required">*</abbr><input
                        type="number" id="ACA" required name="AverageOfYearlyCert">
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <b>No. of physical locations within Australia </b><abbr class="required"
                        title="required">*</abbr><input type="number" min="1" id="LIA" required
                        name="NoOfPhysicalLocationsInAus">
                </div>
                <div>
                    <b>No. of physical locations outside Australia</b><abbr class="required"
                        title="required">*</abbr><input type="number" id="AOA" required
                        name="NoOfPhysicalLocationsOutAus">
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div class="ur-field-item field-checkbox">
                    <table class="checkbox">
                        <tr>
                            <td colspan="2" id="CP"> <b> Select Certifications Provided: <abbr class="required"
                                        title="required">*</abbr></b></td>
                            <label style="color:#FF0000;" id="errorLabel2"></label>
                        </tr>
                        <tr>
                            <td>Quality</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="Q" name="CertificationsProvided"
                                    value="Quality"></td>
                        </tr>
                        <tr>
                            <td>Workplace Health And Safety</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="WHS"
                                    name="CertificationsProvided" value="Workplace Health And Safety"></td>
                        </tr>
                        <tr>
                            <td>Environmental Sustainability</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="ES" name="CertificationsProvided"
                                    value="Environmental Sustainability"></td>
                        </tr>
                        <tr>
                            <td>Sourcing Practices</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="SP" name="CertificationsProvided"
                                    value="Sourcing Practices"></td>
                        </tr>
                        <tr>
                            <td>Supply Chain Monitoring</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="SM" name="CertificationsProvided"
                                    value="Supply Chain Monitoring"></td>
                        </tr>
                        <tr>
                            <td>Energy Management</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="EM" name="CertificationsProvided"
                                    value="Energy Management"></td>
                        </tr>
                        <tr>
                            <td>Corporate Social Responsibility</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="CSR"
                                    name="CertificationsProvided" value="Corporate Social Responsibility"></td>
                        </tr>
                        <tr>
                            <td>Sustainability Reporting</td>
                            <td><input oninput="checkedCheckbox()" type="checkbox" id="SR" name="CertificationsProvided"
                                    value="Sustainability Reporting"></td>
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
                            <td>Other services</td>
                            <td><input type="text" id="OTH" name="AdditionalServices" type="text"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <table border="1">
                    <tr>
                        <td colspan="2" id="CP"><b>Credentials Setup: <abbr class="required"
                                    title="required">*</abbr></b></td>
                    </tr>
                    <tr>
                        <td><input id="LoginEmail" type="email" name="LoginEmail"
                                placeholder="E-mail to be used for login" required></td>
                    </tr>
                    <tr>
                        <td><input id="Password" minlength="8" name="Password" type="password" placeholder="Password must be at least 8 characters" required></td>
                    </tr>
                    <tr>
                        <td><input id="confirmPassword" type="password" placeholder="Confirm password" required
                                oninput="validatePasswordMatch()"></td>
                    </tr>
                </table>
                <label style="color:#FF0000;" id="errorLabel"></label>
            </div>
        </div>
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <input type="checkbox" id="Demo" name="Demo" required oninput="demo()"><b>By signing up I agree to the <a href="https://icertify.net.au/terms-and-conditions-for-service-providers/" target="_blank" style="color:#2271b1;">terms of service and privacy policy.</a></b><abbr class="required" title="required">*</abbr>
                <input type="hidden" id="CertProvided" name="CertProvided">
                <input type="hidden" id="addServices" name="addServices">
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
    var passwordMatchCheck = 0;
    var errors = 0;
    var abnCheck = 0;
    var checkboxCheck = 0;
    function validateABN() {
        var abn = document.getElementById("ABN").value.length;
        var label = document.getElementById("errorLabel1");
        if (abn !== 11 && abn !== 9) {
            label.innerHTML = "ABN must be 11 and ACN must be 9 digit long";
            errors += 1;
            abnCheck += 1;
        }
        else {
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
            label.innerHTML = "*Please select at least one certification.";
        }
        if (errors > 0) {
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
    function getCheckdValue() {
        checkboxes = document.querySelectorAll('input[name="CertificationsProvided"]:checked');
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
        var hidden = document.getElementById("CertProvided");
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
            }
            else {
                string += values[i] + ",";
            }
        }
        var addServices = document.getElementById("addServices");
        addServices.value = string
    }
    function validatePasswordMatch() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var label = document.getElementById("errorLabel");
        if (password !== confirmPassword) {
            label.innerHTML = "*Passwords do not match";
            errors += 1;
            passwordMatchCheck += 1;
        } else {
            label.innerHTML = "";
            errors = errors - passwordMatchCheck;
        }
    }
    function demo() {
        getCheckdValue();
        getServicesValue();
    }
</script>
</html>
