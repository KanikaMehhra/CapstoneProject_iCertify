<?php
?>
<div class="user-registration ur-frontend-form" id="user-registration-form-5914">
    <form method="post" action="https://icertify.net.au/?page_id=6135">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width:99%">
                <div>
                    <input oninput="clicked()" id="LoginEmail" type="email" name="LoginEmail" required>
                </div>
                <div>
                    <input oninput="clicked()" id="Password" name="Password" type="password" required>
                </div>
                <div>
                    <input id="confirmPassword" type="password" placeholder="Confirm password" required="required"
                        oninput="validate()">
                </div>
                <div>
                    <label style="color:#FF0000;" id="errorLabel"></label>
                </div>
            </div>
        </div>
        <div class="ur-button-container ">
            <input onclick="getAndSetSessionStorage()" value="Finish Registration" name="submit" id="submit"
                type="submit" disabled>
        </div>
    </form>
</div>
<script>
function getAndSetSessionStorage() {
    var LoginEmail = document.getElementById("LoginEmail").value;
    var Password = document.getElementById("Password").value;
    sessionStorage.setItem("LoginEmail", LoginEmail);
    sessionStorage.setItem("Password", Password);
}
function validate() {
    var password = document.getElementById("Password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var label = document.getElementById("errorLabel");
    if (password !== confirmPassword) {
        label.innerHTML = "*Passwords do not match";
    } else {
        label.innerHTML = "";
    }
    this.clicked();
}
function clicked() {
    var label = document.getElementById("errorLabel");
    var password = document.getElementById("Password");
    var confirmPassword = document.getElementById("confirmPassword");
    var email = document.getElementById("LoginEmail");
    if (password !== null && confirmPassword !== null && email !== null) {
        if (label.textContent.length === 0 && password.value.length !== 0 && confirmPassword.value.length !== 0 && email
            .value.length !== 0) {
            document.getElementById("submit").disabled = false;
        } else {
            document.getElementById("submit").disabled = true;
        }
    }
}
</script>
<?php
    // if(isset($_POST['submit'])) {
    //     global $wpdb;
    //     $data_array = array(
    //         'OrganisationName' => $_POST['OrganisationName'],
    //         'ContactName' => $_POST['ContactName'],
    //         'PositionTitle' => $_POST['PositionTitle'],
    //         'NoOfEmployees' => $_POST['NoOfEmployees'],
    //         'ABNNo' => $_POST['ABNNo'],
    //         'ContactEmail' => $_POST['ContactEmail'],
    //         'Mobile' => $_POST['Mobile'],
    //         'Telephone' => $_POST['Telephone'],
    //         'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
    //         'AverageOfYearlyCert' => $_POST['AverageOfYearlyCert'],
    //         'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
    //         'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
    //         'CertificationsProvided' => $_POST['CertProvided'],
    //         'AdditionalServices' => $_POST['addServices']
    //     );
    //     $table_name = 'Supplier';
    //     $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    //     die;
    // }
?>