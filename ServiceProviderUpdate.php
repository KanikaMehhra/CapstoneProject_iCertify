<?php
if (isset($_POST['save'])) {
    global $wpdb;
    $loginEmail = $_POST['LoginEmail'];
    $results = $wpdb->get_results("select OrganisationName, ContactName, PositionTitle, NoOfEmployees, ABNNo, ContactEmail, Mobile, Telephone, HeadOfficeAddress, AverageOfYearlyCert, NoOfPhysicalLocationsInAus, NoOfPhysicalLocationsOutAus, CertificationsProvided, AdditionalServices from Supplier Where LoginEmail='" . $loginEmail . "' ");
    if (count($results) > 0) {
        global $wpdb;
        $abn = $_POST['ABNNO'];
        $data = array(
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
            'PricingType' => $_POST['PricingType'],
            'FixedValue' => $_POST['FixedValue'],
            'MinPrice' => $_POST['MinPrice'],
            'MaxPrice' => $_POST['MaxPrice']
        ); 
        $table = 'Supplier';
        $where =  [ 'ABNNO' => $abn];
        $updated = $wpdb->update($wpdb->$table, $data, $where, $format=NULL);
    }
}
?>
<div class="user-registration ur-frontend-form" id="user-registration-form-5914">
    <div class="ur-form-row">
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <div>
                <strong>Organisation Details</strong>
            </div>
        </div>
        <div onclick="toggleEditOn()">
            <i class="fa fa-edit"></i>
        </div>
    </div>
    <div id="user-registration-form-5882" class="user-registration ur-frontend-form  ">
        <form class="information" action="#" method="post" onsubmit="formSubmission1();return false;">
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Organisation Name </b><input disabled type="text" id="ON" name="OrganisationName" required>
                    </div>
                    <div>
                        <b>Contact Name </b><input disabled type="text" id="CN" name="ContactName" required>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Position Title </b><input disabled type="text" id="PT" name="PositionTitle" required>
                    </div>
                    <div>
                        <b>Number of employees </b><input disabled type="number" id="NOE" name="NoOfEmployees" min="1" required>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>ABN/ACN </b><input disabled type="number" id="ABN" required name="ABNNo" oninput="validateABN()"><label style="color:#FF0000;" id="errorLabel1"></label>
                    </div>
                    <div>
                        <b>E-mail </b><input disabled type="email" id="EMAIL" required name="ContactEmail">
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Mobile (+XX XXX XXX XXX) </b><input disabled type="text" pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}" id="MOB" name="Mobile">
                    </div>
                    <div>
                        <b>Telphone (+XX X XXXX XXXX) </b><input disabled type="text" pattern="\+[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}" id="TEL" required name="Telephone">
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>Head office location </b><input disabled type="text" id="HOL" required name="HeadOfficeAddress">
                    </div>
                    <div>
                        <b>Avg. no. of certifications/annum </b><input disabled type="number" id="ACA" required name="AverageOfYearlyCert">
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div>
                        <b>No. of physical locations within Australia </b><input disabled type="number" min="1" id="LIA" required name="NoOfPhysicalLocationsInAus">
                    </div>
                    <div>
                        <b>No. of physical locations outside Australia</b><input disabled type="number" id="AOA" required name="NoOfPhysicalLocationsOutAus">
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div class="ur-field-item field-checkbox">
                        <table class="checkbox">
                            <tr>
                                <td colspan="2" id="CP"> <b> Select Certifications Provided: </b></td>
                                <label style="color:#FF0000;" id="errorLabel2"></label>
                            </tr>
                            <tr>
                                <td>Quality</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="Q" name="CertificationsProvided" value="Quality"></td>
                            </tr>
                            <tr>
                                <td>Workplace Health And Safety</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="WHS" name="CertificationsProvided" value="Workplace Health And Safety"></td>
                            </tr>
                            <tr>
                                <td>Environmental Sustainability</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="ES" name="CertificationsProvided" value="Environmental Sustainability"></td>
                            </tr>
                            <tr>
                                <td>Sourcing Practices</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="SP" name="CertificationsProvided" value="Sourcing Practices"></td>
                            </tr>
                            <tr>
                                <td>Supply Chain Monitoring</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="SM" name="CertificationsProvided" value="Supply Chain Monitoring"></td>
                            </tr>
                            <tr>
                                <td>Energy Management</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="EM" name="CertificationsProvided" value="Energy Management"></td>
                            </tr>
                            <tr>
                                <td>Corporate Social Responsibility</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="CSR" name="CertificationsProvided" value="Corporate Social Responsibility"></td>
                            </tr>
                            <tr>
                                <td>Sustainability Reporting</td>
                                <td><input disabled oninput="checkedCheckbox()" type="checkbox" id="SR" name="CertificationsProvided" value="Sustainability Reporting"></td>
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
                                <td><input disabled type="checkbox" id="RA" name="AdditionalServices" value="Remote audit"></td>
                            </tr>
                            <tr>
                                <td>Gap audit</td>
                                <td><input disabled type="checkbox" id="GA" name="AdditionalServices" value="Gap audit">
                                </td>
                            </tr>
                            <tr>
                                <td>Other services</td>
                                <td><input disabled type="text" id="OTH" class="input-radio ur-frontend-field" name="AdditionalServices" type="text"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <input disabled type="checkbox" id="Demo" name="Demo" required oninput="demo()"><b>By signing up I agree to the <a href="https://icertify.net.au/terms-and-conditions-for-service-providers/" target="_blank">terms of service and privacy policy.</a></b>
                    <input type="hidden" id="CertProvided" name="CertProvided">
                    <input type="hidden" id="addServices" name="addServices">
                </div>
            </div>
            <div class="ur-button-container ">
                <input disabled value="Save" id="submit" type="submit" name="save" onclick="validateSubmit()">
            </div>
            <div>
                <label style="color:rgb(0, 112, 15);" id="updatedInfo"></label>
            </div>
            <div style="clear: both;"></div>
            <input name="ur-user-form-id" type="hidden" value="5882" />
            <input name="ur-redirect-url" type="hidden" value="" />
            <input id="ur_frontend_form_nonce" name="ur_frontend_form_nonce" type="hidden" value="5db8c0f987" />
        </form>
        <div style="clear: both;"></div>
    </div>
    <hr style="height: 10px;">
    <div id="pricePreferenceForm">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                <div>
                    <strong><u>Pricing Preference (Hourly Rates) </u>
                    </strong>
                </div>
            </div>
            <div onclick="togglePricingEditOn()">
                <i class="fa fa-edit"></i>
            </div>
        </div>
        <div id="user-registration-form-5882" class="user-registration ur-frontend-form  ">
            <form class="pricing" method="post" action="#" onsubmit="return false;">
                <div class="ur-form-row">
                    <div class="ur-form-grid ur-grid-2" style="width: 48%;">
                        <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                            <div id="radio_1598611551_field" class="form-row validate-required" data-priority="">
                                <div>
                                    <label style="color:#FF0000;" id="errorLabel4"></label>
                                </div>
                                <ul class="pricingPreference">
                                    <div onclick="disableTextBox()">
                                        <li class="ur-radio-list"><input disabled oninput="checkedRadio()" id="variable" class="input-radio ur-frontend-field  " name="pricing" type="radio" value="variable" /> <label class="radio" for="variable">Variable</label>
                                        </li>
                                    </div>
                                    <li>
                                        <div id="rangeDisplay"></div>
                                        <span class="multi-range">
                                            <input disabled style="top:40px; z-index:1;" type="range" min="20" max="2000" value="20" id="lower" step="5">
                                            <input disabled type="range" min="20" max="2000" value="2000" id="upper" step="5">
                                        </span>
                                    </li>
                                    <div onclick="disableRangeSlider()">
                                        <li class="ur-radio-list"><input disabled oninput="checkedRadio()" id="fixed" class="input-radio ur-frontend-field  " name="pricing" type="radio" value="fixed" /> <label class="radio" for="fixed">Fixed</label></li>
                                    </div>
                                    <li><input id="pricingFixedTextBox" oninput="checkBaseHourlyRate()" type="number" placeholder="Enter hourly rate (AUD)" required disabled /></li>
                                    <label style="color:#FF0000;" id="checkBaseHourlyRate"></label>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ur-button-container ">
                    <input disabled value="Save" id="submit2" type="submit" onclick="checkPricing()">
                </div>
                <div>
                    <label style="color:rgb(0, 112, 15);" id="updatedPricing"></label>
                </div>
                <div style="clear: both;"></div>
                <input name="ur-user-form-id" type="hidden" value="5882" />
                <input name="ur-redirect-url" type="hidden" value="" />
                <input id="ur_frontend_form_nonce" name="ur_frontend_form_nonce" type="hidden" value="5db8c0f987" />
            </form>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div class="ur-form-row">
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <div>
                <strong><u>Upload any additional documents </u>
                </strong>
            </div>
        </div>
        <div onclick="toggleUploadingEditOn()">
            <i class="fa fa-edit"></i>
        </div>
    </div>
    <div class="user-registration ur-frontend-form  " id="user-registration-form-5914">
        <form class="Upload" method="post" action="#" onsubmit="return false;">
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width:99%">
                    <div>
                        <label style="color:#FF0000;" id="errorLabel3"></label>
                    </div>
                    <input disabled type="file" id="myfile" name="myfile" multiple>
                </div>
            </div>
            <div class="ur-button-container">
                <input disabled onclick="checkUpload()" value="Upload" id="submit3" type="submit">
            </div><br><br>
            <div>
                <label style="color:rgb(0, 112, 15);" id="updatedUploads"></label>
            </div>
            <div style="clear: both;"></div>
            <input name="ur-user-form-id" type="hidden" value="5882" />
            <input name="ur-redirect-url" type="hidden" value="" />
            <input id="ur_frontend_form_nonce" name="ur_frontend_form_nonce" type="hidden" value="5db8c0f987" />
        </form>
        <div style="clear: both;"></div>
    </div>
    <hr style="height: 10px;background-color:black">
    <form method="post" action="https://icertify.net.au/">
        <div class="ur-button-container ">
            <input onclick="saveAndLogout()" value="Save and Logout" id="submit4" type="submit">
        </div>
        <div>
            <label style="color:#FF0000;" id="finalErrorCheck"></label>
        </div>
    </form>
</div>
<script>
    function checkBaseHourlyRate() {
        var errorLabel = document.getElementById("checkBaseHourlyRate");
        var element = document.getElementById("pricingFixedTextBox");
        if (element.value < 20) {
            errorLabel.innerHTML = "*Please enter a value greater than or equal to the minimum wage i.e. $20.";
        } else {
            errorLabel.innerHTML = "";
        }
    }
    var lower = document.getElementById("lower");
    var upper = document.getElementById("upper");
    var rangeDisplay = document.getElementById("rangeDisplay");
    rangeDisplay.innerHTML = "$" + lower.value + " - $" + upper.value;
    lower.addEventListener("input", function() {
        rangeDisplay.innerHTML = "$" + lower.value + " - $" + upper.value;
    }, false);
    upper.addEventListener("input", function() {
        rangeDisplay.innerHTML = "$" + lower.value + " - $" + upper.value;
    }, false);
    function disableTextBox() {
        var element = document.getElementById("pricingFixedTextBox");
        element.value = "";
        element.disabled = true;
    }
    function disableRangeSlider() {
        var rangeElement = document.querySelectorAll('input[type="range"]');
        for (var i = 0; i < rangeElement.length; i += 1) {
            rangeElement[i].disabled = true;
        }
    }
    function enableTextBox() {
        var element = document.getElementById("pricingFixedTextBox");
        if (element.value.length != 0) {
            var label = document.getElementById("errorLabel4");
            label.innerHTML = "";
            element.disabled = false;
        }
    }
    function enableRangeSlider() {
        var rangeElement = document.querySelectorAll('input[type="range"]');
        var element = document.querySelectorAll('input[type="radio"][id="variable"]:checked');
        if (element.length != 0) {
            for (var i = 0; i < rangeElement.length; i += 1) {
                rangeElement[i].disabled = false;
            }
        }
    }
    function saveAndLogout() {
        var submit = document.getElementById("submit");
        var submit2 = document.getElementById("submit2");
        var submit3 = document.getElementById("submit3");
        var finalError = "";
        if (!submit.disabled) {
            finalError = finalError + "*Save the updated Organisation Information.";
        }
        if (!submit2.disabled) {
            finalError = finalError + "\n*Save the updated Pricing Preference.";
        }
        if (!submit3.disabled) {
            finalError = finalError + "\n*Save the uploaded Documents.";
        }
        if (finalError.length != 0) {
            var finalErrorCheck = document.getElementById("finalErrorCheck");
            finalErrorCheck.innerHTML = finalError;
            event.preventDefault();
        } else {
            clearInterval(intervalID);
        }
    }
    function formSubmission1() {
        var label = document.getElementById("updatedInfo");
        label.innerHTML = "*Information successfully updated!";
        toggleEditOff("information");
    }
    var intervalID = setInterval(function() {
        if (document.getElementById("myfile").value.length != 0) {
            var label = document.getElementById("errorLabel3");
            label.innerHTML = "";
        }
    }, 300);
    var pricePreferenceError = 0;
    var errors = 0;
    var abnCheck = 0;
    var checkboxCheck = 0;
    var radioCheck = 0;
    function checkedCheckbox() {
        var label = document.getElementById("errorLabel2");
        if (errors > 0) {
            errors = errors - checkboxCheck;
        }
        label.innerHTML = "";
    }
    function validateSubmit() {
        var label = document.getElementById("errorLabel2");
        var len = document.querySelectorAll('.checkbox input[type="checkbox"]:checked').length;
        if (len === 0) {
            errors += 1;
            checkboxCheck += 1;
            label.innerHTML = "*Please select atleast one certification.";
        }
        if (errors > 0) {
            event.preventDefault();
        }
    }
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
    function toggleEditOn() {
        var label = document.getElementById("updatedInfo");
        label.innerHTML = "";
        var inputs = document.querySelectorAll('.information input[disabled]');
        for (var i = 0; i < inputs.length; i += 1) {
            inputs[i].disabled = false;
        }
    }
    function checkPricing() {
        var label = document.getElementById("errorLabel4");
        var len = document.querySelectorAll('input[type="radio"]:checked').length;
        var lenForTextBox = document.querySelectorAll('input[id="fixed"]:checked').length;
        if (len === 0) {
            pricePreferenceError += 1;
            radioCheck += 1;
            label.innerHTML = "*Please select atleast one pricing option.";
        }
        if (lenForTextBox !== 0) {
            var pricingFixedTextBox = document.getElementById("pricingFixedTextBox");
            if (pricingFixedTextBox.value.length === 0) {
                event.preventDefault();
                var errorLabel = document.getElementById("checkBaseHourlyRate");
                errorLabel.innerHTML = "*Please enter the fixed amount.";
                return;
            }
        }
        if (pricePreferenceError > 0) {
            event.preventDefault();
        } else {
            var label = document.getElementById("updatedPricing");
            label.innerHTML = "*Information successfully updated!";
            toggleEditOff("pricing");
        }
    }
    function checkedRadio() {
        var label = document.getElementById("errorLabel4");
        if (pricePreferenceError > 0) {
            pricePreferenceError = pricePreferenceError - radioCheck;
        }
        label.innerHTML = "";
        enableRangeSlider();
    }
    function checkUpload() {
        if (document.getElementById("myfile").value.length == 0) {
            var label = document.getElementById("errorLabel3");
            label.innerHTML = "*Please select a file first.";
            event.preventDefault();
        } else {
            var label = document.getElementById("updatedUploads");
            label.innerHTML = "*Information successfully updated!";
            toggleEditOff("Upload");
            clearInterval(intervalID);
        }
    }
    function toggleEditOff(formClass) {
        var inputs = document.querySelectorAll('.' + formClass + ' input');
        var len = document.querySelectorAll('input[disabled]').length;
        for (var i = 0; i < inputs.length; i += 1) {
            inputs[i].disabled = true;
        }
    }
    function togglePricingEditOn() {
        var label = document.getElementById("updatedPricing");
        label.innerHTML = "";
        var inputs = document.querySelectorAll('.pricing input[type="radio"]');
        var input = document.querySelectorAll('.pricing input[type="submit"]');
        for (var i = 0; i < inputs.length; i += 1) {
            inputs[i].disabled = false;
        }
        input[0].disabled = false;
        enableTextBox();
        enableRangeSlider();
    }
    function toggleUploadingEditOn() {
        var label = document.getElementById("updatedUploads");
        label.innerHTML = "";
        var inputs = document.querySelectorAll('.Upload input[disabled]');
        for (var i = 0; i < inputs.length; i += 1) {
            inputs[i].disabled = false;
        }
    }
    var element = document.getElementById("fixed");
    element.addEventListener("click", function() {
        var input = document.querySelectorAll('.pricingPreference input[type="number"]');
        input[0].disabled = false;
    }, false);
    var lowerSlider = document.querySelector('#lower'),
        upperSlider = document.querySelector('#upper'),
        lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);
    upperSlider.oninput = function() {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);
        if (upperVal < lowerVal + 4) {
            lowerSlider.value = upperVal - 4;
            if (lowerVal == lowerSlider.min) {
                upperSlider.value = 4;
            }
        }
    };
    lowerSlider.oninput = function() {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);
        if (lowerVal > upperVal - 4) {
            upperSlider.value = lowerVal + 4;
            if (upperVal == upperSlider.max) {
                lowerSlider.value = parseInt(upperSlider.max) - 4;
            }
        }
    };
</script>
<?php
?>