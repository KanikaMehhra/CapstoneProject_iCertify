<?php
?>
<div class="user-registration ur-frontend-form" id="user-registration-form-5914">
<form method="post" action="https://icertify.net.au/?page_id=6135">
<div class="ur-form-row">
<div class="ur-form-grid ur-grid-1" style="width:99%">

<div>
<input oninput="clicked()" id="email" type="email" name="LoginEmail" placeholder="E-mail to be used for login"  required>
</div>

<div>
<input oninput="clicked()" id="password" name="Password" type="password" placeholder="Password" required>
</div>

<div>
<input id="confirmPassword" type="password" placeholder="Confirm password" required="required" oninput="validate()">
</div>

<div>
<label style="color:#FF0000;" id="errorLabel"></label>
</div>

</div>
</div>

<input type="hidden" id="ON" name="OrganisationName">
<input type="hidden" id="CN" name="ContactName">
<input type="hidden" id="PT" name="PositionTitle">
<input type="hidden" id="NOE" name="NoOfEmployees">
<input type="hidden" id="ABN"  name="ABNNo">
<input type="hidden" id="EMAIL"  name="ContactEmail">
<input type="hidden" id="MOB"  name="Mobile">
<input type="hidden" id="TEL"  name="Telephone">
<input type="hidden" id="HOL"  name="HeadOfficeAddress">
<input type="hidden" id="ACA"  name="AverageOfYearlyCert">
<input type="hidden" id="LIA"  name="NoOfPhysicalLocationsInAus">
<input type="hidden" id="AOA"  name="NoOfPhysicalLocationsOutAus">
<input type="hidden" id="CertProvided" name="CertProvided">
<input type="hidden" id="addServices" name="addServices">
<input id="E" type="hidden" name="LE"  >
<input id="P" name="P" type="hidden" >



<div class="ur-button-container ">
<input onclick="getAndSetSessionStorage()" value="Finish Registration" id="submit" type="submit" disabled>
</div>

</form>
</div>

<script>
   function getAndSetSessionStorage(){
      var OrganisationName=document.getElementById("ON").value;
      var ContactName=document.getElementById("CN").value;
      var PositionTitle=document.getElementById("PT").value;
                    var NoOfEmployees=document.getElementById("NOE").value;
                    var HeadOfficeAddress=document.getElementById("HOL").value;
                    var ABNNo=document.getElementById("ABN").value;
                    var NoOfPhysicalLocationsInAus=document.getElementById("LIA").value;
                    var NoOfPhysicalLocationsOutAus=document.getElementById("AOA").value;
                    var Mobile=document.getElementById("MOB").value;
                    var Telephone=document.getElementById("TEL").value;
                    var ContactEmail=document.getElementById("EMAIL").value;
                    var AverageOfYearlyCert=document.getElementById("ACA").value;
                    var CertificationsProvided=document.getElementById("CertProvided").value;
                    var AdditionalServices=document.getElementById("addServices").value;

                    OrganisationName.value=sessionStorage.getItem("OrganisationName");
                    ContactName.value=sessionStorage.getItem("ContactName");
                    PositionTitle.value=sessionStorage.getItem("PositionTitle");
                    NoOfEmployees.value=sessionStorage.getItem("NoOfEmployees");
                    HeadOfficeAddress.value=sessionStorage.getItem("HeadOfficeAddress");
                    ABNNo.value=sessionStorage.getItem("ABNNo");
                    NoOfPhysicalLocationsInAus.value=sessionStorage.getItem("NoOfPhysicalLocationsInAus");
                    NoOfPhysicalLocationsOutAus.value=sessionStorage.getItem("NoOfPhysicalLocationsOutAus");
                    Mobile.value=sessionStorage.getItem("Mobile");
                    Telephone.value=sessionStorage.getItem("Telephone");
                    ContactEmail.value=sessionStorage.getItem("ContactEmail");
                    AverageOfYearlyCert.value=sessionStorage.getItem("AverageOfYearlyCert");
                    CertificationsProvided.value=sessionStorage.getItem("CertificationsProvided");
                    AdditionalServices.value=sessionStorage.getItem("AdditionalServices");
   }
function validate() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;
      var label = document.getElementById("errorLabel");
      if (password !== confirmPassword) {
         label.innerHTML = "*Passwords do not match";
      }
      else {
         label.innerHTML = "";
      }
      this.clicked();
   }
function clicked() {
      var label = document.getElementById("errorLabel");
      var password = document.getElementById("password");
      var confirmPassword = document.getElementById("confirmPassword");
      var email = document.getElementById("email");
      if(password!==null && confirmPassword!==null && email!==null){
         if (label.textContent.length === 0 && password.value.length !== 0 && confirmPassword.value.length !== 0 && email.value.length !== 0) {
         document.getElementById("submit").disabled = false;
      }
      else {
         document.getElementById("submit").disabled = true;
      }
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
        'ABNNo' => $_POST['ABNNo'],
        'ContactEmail' => $_POST['ContactEmail'],
        'Mobile' => $_POST['Mobile'],
        'Telephone' => $_POST['Telephone'],
        'HeadOfficeAddress' => $_POST['HeadOfficeAddress'],
        'AverageOfYearlyCert' => $_POST['AverageOfYearlyCert'],
        'NoOfPhysicalLocationsInAus' => $_POST['NoOfPhysicalLocationsInAus'],
        'NoOfPhysicalLocationsOutAus' => $_POST['NoOfPhysicalLocationsOutAus'],
        'CertificationsProvided' => $_POST['CertProvided'],
        'AdditionalServices' => $_POST['addServices']
    );
    $table_name = 'Supplier';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>

