<?php session_start(); 
  $studid = $_SESSION['sid']; 
 $payentid = $_POST['razorpay_payment_id'];
 $id = $_REQUEST['id'];
  $fee = $_REQUEST['fee'];
// $totalAmount = $_POST['totalAmount'];
// $studid = $_POST['studid'];
  //print_r($_REQUEST); die;

  $array=array('invoice_id'=>$payentid,'sub_invoice_id'=>$studid);
        echo json_encode($array); 
 header("location:successinvoice.php?id=".$id."&fee=".$fee."&payid=".$payentid); 
?>