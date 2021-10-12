<?php session_start(); 
  //$studid = $_SESSION['sid']; 
 $payentid = $_POST['razorpay_payment_id'];
 $id = $_REQUEST['id'];
 $studid = $_REQUEST['studid'];
 
  $fee = $_REQUEST['fee'];
// $totalAmount = $_POST['totalAmount'];
// $studid = $_POST['studid'];
  //print_r($_REQUEST); die;

  //$array=array('invoice_id'=>$payentid,'sub_invoice_id'=>$studid);
    //    echo json_encode($array); 
 header("location:successinvoice2.php?id=".$id."&fee=".$fee."&payid=".$payentid."&studid=".$studid); 
?>