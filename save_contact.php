<?php
$conn=mysqli_connect("localhost","root","","travels");
// print_r($_POST);

extract($_POST);
$sql="INSERT INTO contact_us (customer_name,customer_email,customer_message)
VALUES('$customer_name','$customer_email','$customer_message')";

mysqli_query($conn,$sql);



?>