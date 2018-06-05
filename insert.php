<?php
include_once("configuration.php");
if(isset($_POST['fname']) && isset($_POST['sname']) && isset($_POST['email']) && isset($_POST['mobile']))
{
	  $fname= $_POST['fname'];
	  $sname= $_POST['sname'];
	  $email= $_POST['email'];
	  $mob= $_POST['mobile'];
	  
	  $sql = "INSERT INTO tbl_registration (first_name, last_name, email_id,phone)
VALUES ('".$fname."', '".$sname."', '".$email."','".$mob."')";


if ($conn->query($sql)) {
    header('Location:'.$home_url.'?msg=as1d');
} else {
    header('Location:'.$home_url.'?msg=af0d');
}
	  
}
else
{
	 header('Location:'.$home_url.'?msg=af3d');
}


?>