<?php
?>
<div class="user-registration ur-frontend-form  " id="user-registration-form-5914">
    <div class="ur-form-row">
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <strong><u>Organisation Details </u></strong>
        </div>
    </div>
    <div onclick="toggleEditOn()">
        <i class="fa fa-edit"></i>
    </div>
    <div id="user-registration-form-5882" class="user-registration ur-frontend-form  ">
        <form class="information" action="#" method="post" onsubmit="formSubmission1();return false;">
            <div class="textInput">
                <div class="ur-form-row">
                    <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                        Organisation Name<input type="text" id="ON" name="OrganisationName" required="required"
                            value="Lloyds Register Quality Assurance Limited" disabled />
                        Contact Name<input type="text" id="CN" name="ContactName" required="required"
                            value="Wai Kiong Foong" disabled />
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    Position Title<input type="text" id="PT" name="PositionTitle" required="required" value="Manager"
                        disabled />
                    Number of employees<input type="number" id="NOE" name="NoOfEmployees" min="1" value="1000"
                        required="required" disabled />
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    ABN/ACN<input type="number" id="ABN" required="required" name="ABNNo" oninput="validateABN()"
                        value="111111111" disabled />
                    <label style="color:#FF0000;" id="errorLabel1"></label>
                    E-mail<input type="email" id="EMAIL" required="required" name="ContactEmail"
                        value="wai-kiong.foong@lr.org" disabled />
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    Head Office Location<input id="headOfficeLocation"
                        value="Level 16, 461 Bourke Street, Melbourne VIC 3000, Australia" required="required"
                        type="text" placeholder="Head Office Location" disabled />
                    Avg. no. of certifications/annum<input id="avgCerts" type="number" value="500"
                        placeholder="Avg. no. of certifications/annum" required="required" disabled />
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    No. of physical locations within Aus<input id="ausLocation" max="1000" min="1" required="required"
                        type="number" placeholder="No. of physical locations within Aus" value="10" disabled />
                    No. of physical locations outside Aus<input id="outAusLocation" max="1000" min="1" type="number"
                        placeholder="No. of physical locations outside Aus" value="20" required="required" disabled />
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    Mobile (+XX XXX XXX XXX)<input type="text" pattern="\+[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}"
                        id="MOB" required="required" name="Mobile" value="+61 222 222 222" disabled />
                    Telephone (XX X XXXX XXXX)<input type="text" pattern="[0-9]{2}\s[0-9]{1}\s[0-9]{4}\s[0-9]{4}"
                        id="TEL" required="required" name="Telephone" value="61 3 2222 2222" disabled />
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 48%;">
                    <div class="ur-field-item field-checkbox">

                        <div>

                            <label class="ur-label">Certifications Provided <abbr class="required"
                                    title="required">*</abbr></label>

                            <div>
                                <label style="color:#FF0000;" id="errorLabel2"></label>
                            </div>

                            <ul class="checkbox">
                                <li class="ur-checkbox-list">
                                    <input checked disabled oninput="checkedCheckbox()" id="Quality"
                                        class="input-checkbox ur-frontend-field  " name="Quality" type="checkbox"
                                        value="Quality" /> <label class="ur-checkbox-label"
                                        for="Quality">Quality</label></li>
                                <li class="ur-checkbox-list"><input checked disabled oninput="checkedCheckbox()"
                                        id="workplaceHealthAndSafety" class="input-checkbox ur-frontend-field  "
                                        name="workplaceHealthAndSafety" type="checkbox"
                                        value="workplaceHealthAndSafety" /> <label class="ur-checkbox-label"
                                        for="workplaceHealthAndSafety">Workplace Health and Safety</label></li>
                                <li class="ur-checkbox-list"><input disabled oninput="checkedCheckbox()"
                                        id="environmentalSustainability" class="input-checkbox ur-frontend-field  "
                                        name="environmentalSustainability" type="checkbox"
                                        value="environmentalSustainability" /> <label class="ur-checkbox-label"
                                        for="environmentalSustainability">Environmental Sustainability</label></li>
                                <li class="ur-checkbox-list"><input disabled oninput="checkedCheckbox()"
                                        id="sourcingPractices" class="input-checkbox ur-frontend-field  "
                                        name="sourcingPractices" type="checkbox" value="sourcingPractices" /> <label
                                        class="ur-checkbox-label" for="sourcingPractices">Sourcing Practices</label>
                                </li>
                                <li class="ur-checkbox-list"><input disabled oninput="checkedCheckbox()"
                                        id="supplyChainMonitoring" class="input-checkbox ur-frontend-field  "
                                        name="supplyChainMonitoring" type="checkbox" value="supplyChainMonitoring" />
                                    <label class="ur-checkbox-label" for="supplyChainMonitoring">Supply Chain
                                        Monitoring</label></li>
                                <li class="ur-checkbox-list"><input disabled oninput="checkedCheckbox()"
                                        id="energyManagement" class="input-checkbox ur-frontend-field  "
                                        name="energyManagement" type="checkbox" value="energyManagement" /> <label
                                        class="ur-checkbox-label" for="energyManagement">Energy Management</label></li>
                                <li class="ur-checkbox-list"><input disabled oninput="checkedCheckbox()"
                                        id="corporateSocialResponsibility" class="input-checkbox ur-frontend-field  "
                                        name="corporateSocialResponsibility" type="checkbox"
                                        value="corporateSocialResponsibility" /> <label class="ur-checkbox-label"
                                        for="corporateSocialResponsibility">Corporate Social Responsibility</label></li>
                                <li class="ur-checkbox-list"><input disabled oninput="checkedCheckbox()"
                                        id="sustainabilityReporting" class="input-checkbox ur-frontend-field  "
                                        name="sustainabilityReporting" type="checkbox"
                                        value="sustainabilityReporting" /> <label class="ur-checkbox-label"
                                        for="sustainabilityReporting">Sustainability Reporting</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ur-form-grid ur-grid-2" style="width: 48%;">
                    <div class="ur-field-item field-radio " data-field-id="radio_1598611551">
                        <div id="radio_1598611551_field" class="form-row validate-required" data-priority="">

                            <label class="ur-label">Additional Services</label>

                            <div>
                                <label style="color:#FF0000;"></label>
                            </div>

                            <ul class="additionalServices">
                                <li class="ur-radio-list"><input disabled id="Remote Audit"
                                        class="input-radio ur-frontend-field  " name="Remote Audit" type="checkbox"
                                        value="Remote Audit" /> <label class="radio" for="Remote Audit">Remote
                                        Audit</label></li>
                                <li class="ur-radio-list"><input disabled id="Gap Audit"
                                        class="input-radio ur-frontend-field  " name="Gap Audit" type="checkbox"
                                        value="Gap Audit" /> <label class="radio" for="Gap Audit">Gap Audit</label></li>

                                <li class="ur-radio-list">Other Services<input disabled id="Other Services"
                                        class="input-radio ur-frontend-field  " name="Other Services" type="text"
                                        placeholder="Other Services(comma seperated)" /> </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ur-form-row">
                <div class="ur-form-grid ur-grid-1" style="width: 99%;">

                    <div class="ur-field-item field-checkbox ">
                        <div id="check_box_1598611632_field" class="form-row validate-required">

                            <label class="ur-label">Terms & Conditions <abbr class="required"
                                    title="required">*</abbr></label>
                            <ul>
                                <li class="ur-checkbox-list"><input checked disabled id="policyConfirmation"
                                        class="input-checkbox ur-frontend-field  " name="policyConfirmation"
                                        required="required" type="checkbox" /> <label class="ur-checkbox-label"
                                        for="policyConfirmation">By signing up I agree to the <a>terms of service and
                                            privacy policy.</a></label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ur-button-container ">
                <input disabled value="Save" id="submit" type="submit" onclick="validateSubmit()">
            </div>
            <br>
            <br>
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
                <!-- <button onclick="togglePricingEditOn()">click</button> -->
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
                                        <li class="ur-radio-list"><input disabled oninput="checkedRadio()" id="variable"
                                                class="input-radio ur-frontend-field  " name="pricing" type="radio"
                                                value="variable" /> <label class="radio" for="variable">Variable</label>
                                        </li>
                                    </div>
                                    <li>
                                        <div id="rangeDisplay"></div>
                                        <span class="multi-range">
                                            <input disabled style="top:40px; z-index:1;" type="range" min="20"
                                                max="2000" value="20" id="lower" step="5">
                                            <input disabled type="range" min="20" max="2000" value="2000" id="upper"
                                                step="5">
                                        </span>
                                    </li>
                                    <div onclick="disableRangeSlider()">
                                        <li class="ur-radio-list"><input disabled oninput="checkedRadio()" id="fixed"
                                                class="input-radio ur-frontend-field  " name="pricing" type="radio"
                                                value="fixed" /> <label class="radio" for="fixed">Fixed</label></li>
                                    </div>
                                    <li><input id="pricingFixedTextBox" oninput="checkBaseHourlyRate()" type="number"
                                            placeholder="Enter hourly rate (AUD)" required disabled /></li>
                                    <label style="color:#FF0000;" id="checkBaseHourlyRate"></label>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="ur-button-container ">
                    <input disabled value="Save" id="submit2" type="submit" onclick="checkPricing()">

                </div>
                <br>
                <br>
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

    <hr style="height: 10px;">

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

            <div class="ur-button-container ">
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
    var abn = document.getElementById("abn").value.length;
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