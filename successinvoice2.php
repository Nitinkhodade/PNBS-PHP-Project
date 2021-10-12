<?php session_start();
 
 $date = date("Y-m-d");
 //$sid = $_SESSION['sid']; 
  $fee = $_GET['fee']; 
   $studid = $_GET['studid']; 
 $payentid = $_GET['payid'];  
 $sid = $_GET['id'];
 $conn = new mysqli("localhost", "root", "ShowBiz@Casting2021", "jaymataji");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = "INSERT INTO bhog_invoice (bhog_id, student_id, amount, payment_id,amount_detail)
VALUES ('$sid','$studid', '$fee', '$payentid', '$date')";  
$conn->query($sql); 
if($payentid)
{
$sql1 = "UPDATE user_bhogbooking SET payment_type='1' WHERE id=".$sid;
 $conn->query($sql1);
}
//echo "<a href='https://thepbns.com' >Login</a>"; die;


 header("location:/admin/user/bhogbooking"); ?>