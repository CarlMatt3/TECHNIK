<?php
session_start();
header('location:services.html');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'customerinformation');

$name = $_POST['customername'];
$email = $_POST['customeremail'];
$phone = $_POST['customerphone'];
$address1 = $_POST['customeraddressline1'];
$address2 = $_POST['customeraddressline2'];
$city = $_POST['customercity'];
$state = $_POST['customerstate'];
$zip = $_POST['customerpostal'];
$country = $_POST['customercountry'];

$service = $_POST['customerservice'];
$date = $_POST['customerdate'];
$time = $_POST['customertime'];
$comment = $_POST['customercomment'];

if(isset($_POST["submit"]))
	{
		$post = "insert into customerpersonal (customerid, name, email, phone, address1, address2, city, state, zip, country) values 
        (NULL, '$name', '$email', '$phone', '$address1', '$address2', '$city', '$state', '$zip', '$country')";

        mysqli_query($con, $post);

        $post2 = "insert into customerappointment (customerid, service, date, time, comment) values 
        (NULL, '$service', '$date', '$time', '$comment')";

        mysqli_query($con, $post2);


	}

?>