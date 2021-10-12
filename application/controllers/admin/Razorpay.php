<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Razorpay extends CI_Controller {

    function __construct() {
        parent::__construct();
         //$this->load->model("stuattendence_model");
         $this->load->model('login_model');
       // $this->setting = $this->setting_model->get();
    }

 
	
public function index(){
	
		$params = $this->session->userdata('params');
		
        $data = array();
        $student_fees_master_id = $params['student_fees_master_id'];
        $fee_groups_feetype_id = $params['fee_groups_feetype_id'];
        $student_id = $params['student_id'];
        $total = $params['total'];

        $data['name'] = $params['name'];
        
        $data['merchant_order_id']=time()."01"; 
        $data['txnid']=time()."02";
        
      
        $data['title'] = 'Student Fee';  
        $data['return_url'] = site_url().'students/razorpay/callback';
        
       
       
        $data['total'] =$total*100;
        $data['amount'] = $total;
        //$api_config = $this->paymentsetting_model->getActiveMethod();
        $data['key_id']= 'rzp_test_ypIiVro2YoVpAt';
        $data['currency_code']=$params['invoice']->currency_name;
       // print_r($data); die;

	$this->load->view('student/razorpay',$data);
}
 
 
public function index1(){
	
		$params = $this->session->userdata('params');
		
		
	 
        $data = array();
    
         $student_fees_master_id = $params['student_fees_master_id'];
        $fee_groups_feetype_id = $params['fee_groups_feetype_id'];
        $student_id = $params['student_id'];
        $total = $params['total'];

        $data['name'] = $params['name'];
        
        $data['merchant_order_id']=time()."01";
        $data['txnid']=time()."02";
        
      
        $data['title'] = 'Membership Fee';  
       $data['return_url'] = site_url().'students/razorpay/callback1';
        
       
       
        $data['total'] =$total*100;
        $data['amount'] = $total;
        //$api_config = $this->paymentsetting_model->getActiveMethod();
        $data['key_id']= 'rzp_test_xia4P1qzoDFz4C';
        $data['currency_code']="INR";
      // echo "<pre>"; print_r($data); die;

	$this->load->view('admin/razorpay1',$data);
}  


 public function callback1() {   
 
     /*$params = $this->session->userdata('params');
        $payment_id = $_POST['razorpay_payment_id'];
        $json_array = array(
            'amount' => $params['total'],
            'date' => date('Y-m-d'),
            'amount_discount' => 0,
            'amount_fine' => 0,
            'description' => "Online fees deposit through Razorpay TXN ID: " . $payment_id,
            'received_by' => '',
            'payment_mode' => 'Razorpay',
        );

        $data = array(
            'scode' => $params['school_id'],
            'student_id' => $params['student_id'],
            'amount' => $params['total'],
            'payment_id' => $payment_id,
            'amount_detail' => date('Y-m-d')
        );
         $scode =$params['school_id'];
        $send_to = $params['guardian_phone'];
       // $inserted_id = $this->login_model->fee_deposit($data);
        //$invoice_detail = json_decode($inserted_id);
        //$array=array('invoice_id'=>$invoice_detail->invoice_id,'sub_invoice_id'=>$invoice_detail->sub_invoice_id);
		
        $array=array('invoice_id'=>'1','sub_invoice_id'=>"4");
        echo json_encode($array);
        */  
        $array=array('invoice_id'=>'1','sub_invoice_id'=>"4");
        echo json_encode($array);
           
    }


public function index2(){
	
		$params = $this->session->userdata('params');
		
		
	 
        $data = array();
    
         $student_fees_master_id = $params['student_fees_master_id'];
        $fee_groups_feetype_id = $params['fee_groups_feetype_id'];
        $student_id = $params['student_id'];
        $total = $params['total'];

        $data['name'] = $params['name'];
        
        $data['merchant_order_id']=time()."01";
        $data['txnid']=time()."02";
        
      
        $data['title'] = 'Course Fee';  
        $data['return_url'] = base_url().'students/razorpay/callback2';
        
       
       
        $data['total'] =$total*100;
        $data['amount'] = $total;
        //$api_config = $this->paymentsetting_model->getActiveMethod();
        $data['key_id']= 'rzp_test_ypIiVro2YoVpAt';
        $data['currency_code']="INR";
       // print_r($data); die;

	$this->load->view('student/razorpay2',$data);
}  


public function index3(){
	
		$params = $this->session->userdata('params');
		
		
	 
        $data = array();
    
         
        $fee_session_id = $params['fee_session_id'];
        $total = $params['total'];

        $data['name'] = $params['name'];
		$data['school_id'] = $params['school_id'];
        
        $data['merchant_order_id']=time()."01";
        $data['txnid']=time()."02";
        
      
        $data['title'] = 'School Fee';  
        $data['return_url'] = site_url().'students/razorpay/callback3';
        
       
       
        $data['total'] =$total*100;
        $data['amount'] = $total;
        //$api_config = $this->paymentsetting_model->getActiveMethod();
        $data['key_id']= 'rzp_test_ypIiVro2YoVpAt';
        $data['currency_code']="INR";
       // print_r($data); die;

	$this->load->view('student/razorpay3',$data);
}  


public function index4(){
	
$params = $this->session->userdata('params');		
		$data = array();
    
        
        $student_id = $params['student_id'];
        $total = $params['total'];

        $data['name'] = $params['name'];
        
        $data['merchant_order_id']=time()."01";
        $data['txnid']=time()."02";
        
      
        $data['title'] = 'Registration Fee';  
        $data['return_url'] = site_url().'students/razorpay/callback4';
        
       
       
        $data['total'] =$total*100;
        $data['amount'] = $total;
        //$api_config = $this->paymentsetting_model->getActiveMethod();
        $data['key_id']= 'rzp_test_ypIiVro2YoVpAt';
        $data['currency_code']="INR";
       // print_r($data); die;

	 
	$this->load->view('student/razorpay4',$data);
}  


    public function callback() {    

     $params = $this->session->userdata('params');
        $payment_id = $_POST['razorpay_payment_id'];
        $json_array = array(
            'amount' => $params['total'],
            'date' => date('Y-m-d'),
            'amount_discount' => 0,
            'amount_fine' => 0,
            'description' => "Online fees deposit through Razorpay TXN ID: " . $payment_id,
            'received_by' => '',
            'payment_mode' => 'Razorpay',
        );

        $data = array(
            'student_fees_master_id' => $params['student_fees_master_id'],
            'fee_groups_feetype_id' => $params['fee_groups_feetype_id'],
            'amount_detail' => $json_array
        );
        
        $send_to = $params['guardian_phone'];
        //$inserted_id = $this->studentfeemaster_model->fee_deposit($data, $send_to);
        //$invoice_detail = json_decode($inserted_id);
        //$array=array('invoice_id'=>$invoice_detail->invoice_id,'sub_invoice_id'=>$invoice_detail->sub_invoice_id);
        $array=array('invoice_id'=>1,'sub_invoice_id'=>1);
        echo json_encode($array);
        
        
           
    } 
    
    
    


 public function callback2() {    

    $params = $this->session->userdata('params');
        $payment_id = $_POST['razorpay_payment_id'];
        $json_array = array(
            'amount' => $params['total'],
            'date' => date('Y-m-d'),
            'amount_discount' => 0,
            'amount_fine' => 0,
            'description' => "Online fees deposit through Razorpay TXN ID: " . $payment_id,
            'received_by' => '',
            'payment_mode' => 'Razorpay',
        );

        $data = array(
            'scode' => $params['school_id'],
            'student_id' => $params['student_id'],
            'amount' => $params['total'],
            'payment_id' => $payment_id,
            'amount_detail' => date('Y-m-d')
        );
         $scode =$params['school_id'];
        $send_to = $params['guardian_phone'];
        $inserted_id = $this->webservice_model->fee_deposit_cource($data);
        //$invoice_detail = json_decode($inserted_id);
        //$array=array('invoice_id'=>$invoice_detail->invoice_id,'sub_invoice_id'=>$invoice_detail->sub_invoice_id);
        $array=array('invoice_id'=>$inserted_id,'sub_invoice_id'=>$params['student_id']);
        echo json_encode($array);
         
        
           
    }


   public function callback3() {    

    $params = $this->session->userdata('params');
        $payment_id = $_POST['razorpay_payment_id'];
        $json_array = array(
            'amount' => $params['total'],
            'date' => date('Y-m-d'),
            'amount_discount' => 0,
            'amount_fine' => 0,
            'description' => "Online fees deposit through Razorpay TXN ID: " . $payment_id,
            'received_by' => '',
            'payment_mode' => 'Razorpay',
        );

        $data = array(
            'scode' => $params['school_id'],
            'fee_session_id' => $params['fee_session_id'],
            'amount' => $params['total'],
            'payment_id' => $payment_id,
            'amount_detail' => date('Y-m-d')
        );
         $scode =$params['school_id'];
        $send_to = $params['guardian_phone'];
        $inserted_id = $this->subject_model->fee_deposit_school($data);
		$array1=array('school_feeid'=>$params['fee_session_id'],'amount' => $params['total'],'invoice_id'=>$inserted_id);
	     $this->subject_model->school_feeupdateinstallment($array1);
        //$invoice_detail = json_decode($inserted_id);
        //$array=array('invoice_id'=>$invoice_detail->invoice_id,'sub_invoice_id'=>$invoice_detail->sub_invoice_id);
        $array=array('invoice_id'=>$scode,'sub_invoice_id'=>$inserted_id);
        echo json_encode($array);
         
        
           
    }


   public function callback4() {    

    $params = $this->session->userdata('params');
        $payment_id = $_POST['razorpay_payment_id'];
        $json_array = array(
            'amount' => $params['total'],
            'date' => date('Y-m-d'),
            'amount_discount' => 0,
            'amount_fine' => 0,
            'description' => "Online fees deposit through Razorpay TXN ID: " . $payment_id,
            'received_by' => '',
            'payment_mode' => 'Razorpay',
        );

        $data = array(
            'scode' => $params['school_id'],
            'student_id' => $params['student_id'],
            'amount' => $params['total'],
            'payment_id' => $payment_id,
            'amount_detail' => date('Y-m-d')
        );
         $scode =$params['school_id'];
        $send_to = $params['guardian_phone'];
        $inserted_id = $this->webservice_model->fee_deposit_courcea2z($data);
        //$invoice_detail = json_decode($inserted_id);
        //$array=array('invoice_id'=>$invoice_detail->invoice_id,'sub_invoice_id'=>$invoice_detail->sub_invoice_id);
        $array=array('invoice_id'=>$inserted_id,'sub_invoice_id'=>$params['student_id']);
        echo json_encode($array);
         
        
           
    }

}
