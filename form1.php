<?php
//variable Setting
$name = $_REQUEST['name'];
$spouseName = $_REQUEST['spouseName'];
$email = $_REQUEST['email'];
$number = $_REQUEST['number'];
$venue = $_REQUEST['venue'];
$more = $_REQUEST['more'];

//check input fields
if (empty($name) || empty($spouseName) || empty($email) || empty($number) || empty($venue) || empty($more))

{
	echo "Please Fill All The Details";
}
else
{
	mail("groupsterling04@gmail.com", "BOOKING INFO", $message, "From: $name < $email >");
	echo "<script type='text/javascript'>alert('your message sent succesfully');
	window.history.log(-1);
	</script>";
}
?>
