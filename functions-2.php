<?php
?>
<form method=post enctype="multipart/form-data">
    Organisation Name<input type="text" id="ON" name="OrganisationName"><br>
    Contact Name<input type="text" id="CN" name="ContactName"><br>
    
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
    Terms and Conditions<input oninput="demo()" type="checkbox" id="Demo" name="Demo">
    <input type="hidden" id="CurrentStatus" name="CurrentStatus">
    <input type="submit" name="submit" value="Submit" onclick="myfunction()">
</form>
</div>
<script>
function myfunction() {
    console.log(document.getElementById("ON").value);
    console.log(document.getElementById("CN").value);
    console.log(document.getElementById("CP").value);
}
function demo() {
    getCheckdValue()
}
function getCurrentstatusValue(){
    radioboxes = document.querySelectorAll('input[name="CurrentStatus"]:checked');
    let values = [];
    var string=""
    radioboxes.forEach((radio) => {
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
        'CurrentStatus' => $_POST['CurrentStatus']
    );
    $table_name = 'Test';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>