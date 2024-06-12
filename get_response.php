<?php 
require_once("config.php");
if((isset($_POST['UserID'])&& $_POST['UserID'] !='') && (isset($_POST['PackageID'])&& $_POST['PackageID'] !=''))
{
 require_once("contact_mail.php");

 $UserID = $conn->real_escape_string($_POST['UserID']);
$PackageID = $conn->real_escape_string($_POST['PackageID']);
$InquiryDate = $conn->real_escape_string($_POST['InquiryDate']);
$InquiryMessage = $conn->real_escape_string($_POST['InquiryMessage']);
$sql="INSERT INTO contact_form_info (UserID, PackageID, InquiryDate, InquiryMessage) VALUES ('".$UserID."','".$PackageID."', '".$InquiryDate."', '".$InquiryMessage."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill UserID and PackageID";
}
?>
