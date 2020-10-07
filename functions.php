<?php
?>
<!-- <body>
    <h2>JavaScript</h2>
    <h3>The window.location object</h3>
    <input id="Email" type="email" name="Email" required>
    <input id="Password" name="Password" type="password" required>
    <a href="https://www.w3schools.com">
    <input type="button" name="submit" value="Load new document">
    </a>
    <script>
    function newDoc() {
        window.location.assign("https://www.w3schools.com")
    }
    </script>
</body>
 -->
<?php
?>
<div class="user-registration ur-frontend-form" id="user-registration-form-5914">
    <form method="post">
        <div class="ur-form-row">
            <div class="ur-form-grid ur-grid-1" style="width:99%">
                <input id="Email" type="email" name="Email" required>
                <input id="Password" name="Password" type="password" required>
            </div>
        </div>
        <div class="ur-button-container ">
            <a href="https://www.w3schools.com" name="submit">MERAY</a>
                <input value="Finish Registration" id="submit" type="submit">
        
        </div>
    </form>
</div>
<script> 
function myfunction() {
    window.location.replace("https://stackoverflow.com/questions/16398690/window-location-assignlink-is-not-working");
}
</script>
<?php
if(isset($_POST['submit'])) {
    global $wpdb;
    $data_array = array(
        'Email'=> $_POST['Email'],
        'Password'=> $_POST['Password']
    );
    $table_name = 'Test';
    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
    die;
}
?>