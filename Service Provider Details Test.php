<?php
session_start();
if (isset($_SESSION['LoginEmail'])) {
?>
    <div class="ur-form-row">
        <div class="ur-form-grid ur-grid-1" style="width: 48%;">
            <div>
                <a style="color:blue" href="https://icertify.net.au/service-provider/service-provider-login/service-provider-details/service-provider-update-test/"> Update Your Details from here: </a>
            </div>
            <table>
                <tr>
                    <td>Organisation Name: </td><td><?php echo $_SESSION['OrganisationName']; ?></td>
                </tr>
                <tr>
                    <td>Contact Name: </td><td><?php echo $_SESSION['ContactName']; ?> </td>
                </tr>
                <tr>
                    <td>PositionTitle: </td><td><?php echo $_SESSION['PositionTitle']; ?> </td>
                </tr>
                <tr>
                    <td>Number of Employees: </td><td><?php echo $_SESSION['NoOfEmployees']; ?> </td>
                </tr>
                <tr>
                    <td>ABN/ACN Number: </td><td><?php echo $_SESSION['ABNNo']; ?> </td>
                </tr>
                <tr>
                    <td>Contact Email: </td><td><?php echo $_SESSION['ContactEmail']; ?> </td>
                </tr>
                <tr>
                    <td>Mobile: </td><td><?php echo $_SESSION['Mobile']; ?> </td>
                </tr>
                <tr>
                    <td>Telephone: </td><td><?php echo $_SESSION['Telephone']; ?> </td>
                </tr>
                <tr>
                    <td>Head office address: </td><td><?php echo $_SESSION['HeadOfficeAddress']; ?> </td>
                </tr>
                <tr>
                    <td>Avg. no. of certifications/annum: </td><td><?php echo $_SESSION['AverageOfYearlyCert']; ?> </td>
                </tr>
                <tr>
                    <td>No. of physical locations within Australia: </td><td><?php echo $_SESSION['NoOfPhysicalLocationsInAus']; ?> </td>
                </tr>
                <tr>
                    <td>No. of physical locations outside Australia: </td><td><?php echo $_SESSION['NoOfPhysicalLocationsOutAus']; ?> </td>
                </tr>
                <tr>
                    <td>Certifications Provided: </td><td id="Cert"><?php echo $_SESSION['CertificationsProvided']; ?> </td>
                </tr>
                <tr>
                    <td>Additional Services: </td><td id="AddSer"><?php echo $_SESSION['AdditionalServices']; ?> </td>
                </tr>
                <tr>
                    <td>Pricing Type: </td><td><?php echo $_SESSION['PricingType']; ?> </td>
                </tr>
                <tr>
                    <td>Fixed Price: </td><td><?php echo $_SESSION['FixedValue']; ?> </td>
                </tr>
                <tr>
                    <td>Minmum Variable Price: </td><td><?php echo $_SESSION['MinPrice']; ?> </td>
                </tr>
                <tr>
                    <td>Maximum Variable Price: </td><td><?php echo $_SESSION['MaxPrice']; ?> </td>
                </tr>
            </table>

        </div>
    </div>
<?php
} else {
    header("Location: https://icertify.net.au/service-provider-login/");
}
?>