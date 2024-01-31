<?php
$conn=mysqli_connect("localhost","root","","save_from");
print_r($_POST);

extract($_POST);
$sql="INSERT INTO contact_form(Full_name,Email,Phone_number,City_name,Message) VALUES ('$Full_name','$Email','$Phone_number','$City_name','$Message')";

mysqli_query($conn,$sql);

?>