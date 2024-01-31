<?php
  $conn=mysqli_connect("localhost","root","","travels");
//   print_r($_POST);

  extract($_POST);

  $sql="INSERT INTO parabooking_form(f_name,l_name,mobile_no,email_address,date,time,sub_total,total) VALUES
  ('$f_name','$l_name','$mobile_no','$email_address','$date','$time','$sub_total','$total')";

  mysqli_query($conn,$sql);
?>