<?php session_start();
 
 $date = date("Y-m-d");
 //$sid = $_SESSION['sid']; 
  $fee = $_GET['fee']; 
 $payentid = $_GET['payid'];  
 $sid = $_GET['id'];
 $conn = new mysqli("localhost", "root", "ShowBiz@Casting2021", "jaymataji");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = "INSERT INTO admission_invoice (student_id, amount, payment_id,amount_detail)
VALUES ('$sid', '$fee', '$payentid', '$date')";  
$conn->query($sql); 

$sql1 = "UPDATE user SET status='1' WHERE id=".$sid;
 $conn->query($sql1);

//echo "<a href='https://thepbns.com' >Login</a>"; die;


 header("location:/"); ?>