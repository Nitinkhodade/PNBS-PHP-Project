<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();
       // check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'User';
        $data['country'] = $this->common_model->select('country');
        $data['power'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/add', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	/*public function bhogbooking()
    {   
	$data['page_title'] = 'User';
        $data['powers'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/user_power', $data, TRUE);
         $this->load->view('admin/user/bhogbooking', $data);
    }*/
	
	public function bhogbooking(){
        $data = array();
        $data['page_title'] = 'User';
		 $data['bhoglist'] = $this->common_model->get_bhoglist();
        $data['main_content'] = $this->load->view('admin/user/bhogbooking', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	public function anjalibooking(){
        $data = array();
        $data['page_title'] = 'User';
		 $data['userlist'] = $this->common_model->get_all_anjalilist('user_power');
        $data['main_content'] = $this->load->view('admin/user/anjalibooking', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	
	
	public function anjalibooking1(){
        $data = array();
        $data['page_title'] = 'User';
		 $data['userlist'] = $this->common_model->get_all_anjalilist1('user_power'); 
        $data['main_content'] = $this->load->view('admin/user/anjalibooking1', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function livetelecat(){
        $data = array();
        $data['page_title'] = 'User';
		 //$data['userlist'] = $this->common_model->get_all_anjalilist('user_power');
        $data['main_content'] = $this->load->view('admin/user/livetelecat', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function mahapanchami(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/mahapanchami', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function mahashashti(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/mahashashti', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function mahasaptami(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/mahasaptami', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function mahaashatami(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/mahaashatami', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function mahanavami(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/mahanavami', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function vijayadashami(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/vijayadashami', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function contactus(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/contactus', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function membership(){
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/membership', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function all_member_list()
    {
        $data['members'] = $this->common_model->get_all_member('members');
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/members', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add new user by admin
  /*  public function add()
    {   
	 //print_r($_POST); die;
        if ($_POST) {

            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
                'mobile' => $_POST['mobile'],
                'country' => $_POST['country'],
                'status' => $_POST['status'],
                'role' => $_POST['role'],
                'created_at' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate email
            $email = $this->common_model->check_email($_POST['email']);

            if (empty($email)) {
                $user_id = $this->common_model->insert($data, 'user');
            
                if ($this->input->post('role') == "user") {
                    $actions = $this->input->post('role_action');
                    foreach ($actions as $value) {
                        $role_data = array(
                            'user_id' => $user_id,
                            'action' => $value
                        ); 
                       $role_data = $this->security->xss_clean($role_data);
                       $this->common_model->insert($role_data, 'user_role');
                    }
                }
                $this->session->set_flashdata('msg', 'User added Successfully');
                redirect(base_url('admin/user/all_user_list'));
            } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another email');
                redirect(base_url('admin/user'));
            }
            
            
            

        }
    }
	*/
	public function add()
    {   
	 //print_r($_POST); die;
        if ($_POST) {

            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'duefees' => $_POST['duefees']
            );
			
			$data = $this->security->xss_clean($data);
            
            //-- check duplicate email
            $email = $this->common_model->check_email($_POST['email']);
			
                $user_id = $this->common_model->insert($data, 'members');
         
                $this->session->set_flashdata('msg', 'Member added Successfully');
                redirect(base_url('admin/user/all_member_list'));
        }
    }
	
	public function add_client()
    { 
  //echo "fds"; die;	
	
        if ($_POST) {
   
           $memcount = $this->common_model->user_membercheck($_POST['mobile'], $_POST['email']);
                   
					if($memcount == 0)
                    {  
					 $this->session->set_flashdata('error_msg', 'Sorry, the registered mobile number does not match with our data. Kindly contact Admin at 7972100450.');              
			         redirect(base_url('admin/pages/register'));
					
                    }	
					
					
 					
            $data = array(
			   'first_name' => $_POST['membername'],
                'member_name' => $_POST['membername'],
                'mobile' => $_POST['mobile'],
                'email' => $_POST['email'],
                //'password' => $_POST['password'],
                'password' => $_POST['password'],
                'member_address' => $_POST['memberaddress'],
				'familymembers' => $_POST['familymembers'],
				'vacc_member' => $_POST['vacc_member'],
				'below18' => $_POST['below18'],
				'member_type' => $_POST['member'],
                'created_at' => current_datetime()						
            );
            
			
                  // password_hash($mobile, PASSWORD_DEFAULT)
			       // $_POST['person_name'."@favivomedia.com"]
			//print_r($data);die;
			
             $user_id = $this->common_model->insert($data, 'user');
			 
			 $amountcheck = $this->common_model->user_membercheckamount1($_POST['mobile'], $_POST['email']);
			 if($amountcheck == 0)
			 {
				 $data1 = array(
			   'id' => $user_id,
                'status' => 1,
                );
				$updaterecord  = $this->common_model->update($data1, $user_id, 'user');
				redirect('/');
			 }			 
			 else 
			 {
			 redirect(base_url('razorpay1.php?id='.$user_id));
			 }
			 /*$data1 = array(
                'name' => $_POST['name'],
                'age' => $_POST['age'],
                'relation' => $_POST['relation'],			
                 'user_id' => $user_id				
            );
			$user_id1=$this->common_model->insert($data1, 'user_familymember');*/
			
			/*  $amount_balance = 1000; 
			 
			$params = array(
                    'key' => 'rzp_test_xia4P1qzoDFz4C',
                    'api_publishable_key' => '',
                    'invoice' => '',
                    'total' => $amount_balance,
                    'student_session_id' => $user_id,
                    'guardian_phone' => $_POST['mobile'],
                    'name' => $_POST['membername'],                   
                    'student_id' => $user_id,
                    'school_id' => $user_id
                );

                $this->session->set_userdata("params", $params);
                redirect(base_url("admin/user/index1"));   
			  */
			   
			   
			   
			  //$this->session->set_flashdata('msg', 'User addes Successfully');
              // redirect(base_url('?id='));
			    //redirect(base_url('admin/pages/login'));
           
           
        }
    } 

    

public function index1(){
	
		$params = $this->session->userdata('params');
		//print_r($params); die;
		
	// echo $_SESSION['params']['student_id']; die; 
        $data = array();
    
         //$student_fees_master_id = $params['student_fees_master_id'];
        //$fee_groups_feetype_id = $params['fee_groups_feetype_id'];
        $student_id = $params['student_id'];
        $total = $params['total'];

        $data['name'] = $params['name'];
        
        $data['merchant_order_id']=time()."01";
        $data['txnid']=time()."02";
        
      
        $data['title'] = 'Membership Fee';  
       $data['return_url'] = site_url().'admin/user/callback1';
        
       
       
        $data['total'] =$total*100;
        $data['amount'] = $total;
        //$api_config = $this->paymentsetting_model->getActiveMethod();
        $data['key_id']= 'rzp_test_xia4P1qzoDFz4C';
        $data['currency_code']="INR";
       //echo "<pre>"; print_r($data); die; 

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

 public function getpackval()
         {
			 $pack = $_POST['pack'];
			 $days = $_POST['days'];
			 $checkvalidate  = $this->common_model->get_bhogcountdayuser($days);
			 return $checkvalidate['total_pack'] + $pack; 
		}
        public function add_bhogbooking()
        { 
		         
				 $checkvalidate  = $this->common_model->get_bhogcountdayuser($_POST['days']);
				//$checkvalidate  = $this->common_model->get_bhoglistcheck($_POST['days']);
				$firsts = $this->common_model->get_familymember();
				
				if($checkvalidate['total_pack'] >= (4 + $firsts['fammember'])) 
				{
					if($checkvalidate['total_pack'] >= 10) 
				{
				$this->session->set_flashdata('error_msg', " ".ucfirst($_POST['days'])." Booked.. ");  
				redirect(base_url('admin/user/bhogbooking'));
				die; 
					}
				}
				if($_POST['pack'] > 10)
				{
					$this->session->set_flashdata('error_msg', 'Number of Pack allow only 10');  
				redirect(base_url('admin/user/bhogbooking'));
				die;
				}
				
				  $bhogcount1   = $this->common_model->get_bhogcountday($_POST['days']); 
				  $value   =  $bhogcount1['total_pack'];  
				 $slot  = "04:00 PM"; 

              if (($value > 0 && $value < 50))
			  {
				  $slot  = "01:00 PM";
			  }
			  else if (($value > 50 && $value < 150))
              {
				  $slot  = "01:30 PM"; 
			  }				  
              else if (($value > 150 && $value < 250))
              {
				  $slot  = "02:00 PM"; 
			  }	
            else if (($value > 250 && $value < 350))
              {
				  $slot  = "02:30 PM"; 
			  }	
            else if (($value > 350 && $value < 450))
              {
				 $slot  = "03:00 PM"; 
			  }	
 			 else if (($value > 450 && $value < 550))
              {
				   $slot  = "03:30 PM"; 
			  }	
 			   
			  
				 
				/* if($bhogcount=(range(0, 50)))
				  {
                   $slot  = "01:00 PM"; 
                   }
				  else if($bhogcount=(range(50, 150)))
				  {
                   $slot  = "01:30 PM"; 
                   } 
				   
				  else if($bhogcount=(range(150, 250)))
				  {
                   $slot  = "02:00 PM"; 
                   } 
				  else if($bhogcount=(range(250, 350)))
				  {
                   $slot  = "02:30 PM"; 
                   } 
				  else  if($bhogcount=(range(350, 450)))
				  {
                   $slot  = "03:00 PM"; 
                   } 
				  else if($bhogcount=(range(450, 550)))
				  {
                   $slot  = "03:30 PM"; 
                   } 
				  */ 
				  //echo $slot; die; 
				   
				  // if($checkvalidate['total_pack'] >= (4 + $firsts['fammember'])) 
				 $string = $_POST['days'];  
                $test = $_POST['pack'] + $checkvalidate['total_pack'];
				 $existmember = $_POST['ftm'];
				
				 if($existmember < $test)
				 {
				   $totlog = $test - $existmember;   
                   $amount = $_POST['pack'] * 51;
				   $data = array(
                    'days' => $_POST['days'],
					'user_id' => $this->session->userdata('id'),
                    'numberofpack' => $_POST['pack'],
                    'amount'=>$amount,
					'coupancode'=> $string[0]."b".mt_rand(100000,999999),
					 'collectiontime'=>$slot,
                    'created_on' => current_datetime(),
                    					
                   );
              $user_id = $this->common_model->insert($data, 'user_bhogbooking');				   
				   
				 }
				 else 
				 {
					 $data = array(
                    'days' => $_POST['days'],
					'user_id' => $this->session->userdata('id'),
                    'numberofpack' => $_POST['pack'],
                    'amount'=>0,
					'payment_type' => 1,
					'coupancode'=> $string[0]."b".mt_rand(100000,999999),
					 'collectiontime'=>$slot,
                    'created_on' => current_datetime()
                    					
                    );
								
					
					
					 $user_id = $this->common_model->insert($data, 'user_bhogbooking');
					 
					 
					/* $data1 = array(
                    'bhog_id' => $user_id,
					'student_id' => $this->session->userdata('id'),                     
                    'amount'=>0,
					'payment_id' => "Free Member",
					'amount_detail'=> date("Y-m-d"),				 
                    					
                    );						
					
					
					 $pay_id = $this->common_model->insert($data1, 'bhog_invoice');
					 */
					 
					redirect(base_url('admin/user/bhogbooking'));
				 }
                
               
			   
                //print_r($data);die;
                  

                $sid =  $this->session->userdata('id');
				  redirect(base_url('razorpay2.php?bid='.$user_id.'&id='.$sid));
				 
                  // print_r($data['h']); die();
                   //redirect(base_url('admin/user/bhogbooking'));
               
               
            }


		 public function load_board()
     {
      $data = $this->common_model->load_data();
    //  print_r($data); exit();
      echo json_encode($data);
     }





        public function add_anjalibooking()
        { 
		
		$checkvalidate  = $this->common_model->get_ajaliilistcheck($_POST['days']);
				if($checkvalidate > 1) 
				{
				$this->session->set_flashdata('error_msg', " ".ucfirst($_POST['days'])." Booked.. ");  
				if($_POST['days'] == "dashami"){
				redirect(base_url('admin/user/anjalibooking1'));
				}else {
				redirect(base_url('admin/user/anjalibooking'));
				}
				die;
				}
		       
		//print_r($_POST);die;
                $noperson = 0;  
                $slotno = 0;				
                if($_POST['person11']) {	$noperson =	$_POST['person11'];  $slotno = 1; }
				if($_POST['person12']) {	$noperson =	$_POST['person12'];  $slotno = 2; }
				if($_POST['person13']) {	$noperson =	$_POST['person13'];  $slotno = 3; }
				if($_POST['person14']) {	$noperson =	$_POST['person14'];  $slotno = 4; }
				if($_POST['person15']) {	$noperson =	$_POST['person15'];  $slotno = 5; }
				
				//day2
				if($_POST['person21']) {	$noperson =	$_POST['person21'];  $slotno = 1; }
				if($_POST['person22']) {	$noperson =	$_POST['person22'];  $slotno = 2; }
				if($_POST['person23']) {	$noperson =	$_POST['person23'];  $slotno = 3; }
				if($_POST['person24']) {	$noperson =	$_POST['person24'];  $slotno = 4; }
				if($_POST['person25']) {	$noperson =	$_POST['person25'];  $slotno = 5; }
				
				//day3
				if($_POST['person31']) {	$noperson =	$_POST['person31'];  $slotno = 1; }
				if($_POST['person32']) {	$noperson =	$_POST['person32'];  $slotno = 2; }
				if($_POST['person33']) {	$noperson =	$_POST['person33'];  $slotno = 3; }
				if($_POST['person34']) {	$noperson =	$_POST['person34'];  $slotno = 4; }
				if($_POST['person35']) {	$noperson =	$_POST['person35'];  $slotno = 5; }
				
				//day4
				if($_POST['person41']) {	$noperson =	$_POST['person41'];  $slotno = 1; }
				if($_POST['person42']) {	$noperson =	$_POST['person42'];  $slotno = 2; }
				if($_POST['person43']) {	$noperson =	$_POST['person43'];  $slotno = 3; }
				if($_POST['person44']) {	$noperson =	$_POST['person44'];  $slotno = 4; }
				if($_POST['person45']) {	$noperson =	$_POST['person45'];  $slotno = 5; }
				
				//day5
				if($_POST['person51']) {	$noperson =	$_POST['person51'];  $slotno = 1; }
				if($_POST['person52']) {	$noperson =	$_POST['person52'];  $slotno = 2; }
				if($_POST['person53']) {	$noperson =	$_POST['person53'];  $slotno = 3; }
				if($_POST['person54']) {	$noperson =	$_POST['person54'];  $slotno = 4; }
				if($_POST['person55']) {	$noperson =	$_POST['person55'];  $slotno = 5; }
                 
				
                $userid =  $this->session->userdata('id'); 
				$string = $_POST['days'];
 
                $data = array(
                    'days' => $_POST['days'],
					'user_id' => $userid,
					'slotno' => $slotno,
                    'totalperson' => $noperson,
					'passcode' => $string[0]."a".mt_rand(100000,999999),
                    'created_on' => current_datetime()						
                );
               
                // print_r($data);die;
                   $user_id = $this->common_model->insert($data, 'user_anjalibooking');
                   redirect(base_url('admin/user/anjalibooking'));
               
               
            }

     public function add_anjalibookingdashmi()
        { 
		
		$checkvalidate  = $this->common_model->get_ajaliilistcheck($_POST['days']);
				if($checkvalidate > 0) 
				{
				$this->session->set_flashdata('error_msg', " ".ucfirst($_POST['days'])." Booked.. ");  
				if($_POST['days'] == "dashami"){
				redirect(base_url('admin/user/anjalibooking1'));
				}else {
				redirect(base_url('admin/user/anjalibooking'));
				}
				die;
				}
		       
		//print_r($_POST);die;
                $noperson = 0;  
                $slotno = 0;				
                if($_POST['person11']) {	$noperson =	$_POST['person11'];  $slotno = 1; }
				if($_POST['person12']) {	$noperson =	$_POST['person12'];  $slotno = 2; }
				if($_POST['person13']) {	$noperson =	$_POST['person13'];  $slotno = 3; }
				if($_POST['person14']) {	$noperson =	$_POST['person14'];  $slotno = 4; }
				if($_POST['person15']) {	$noperson =	$_POST['person15'];  $slotno = 5; }
				
				//day2
				if($_POST['person21']) {	$noperson =	$_POST['person21'];  $slotno = 1; }
				if($_POST['person22']) {	$noperson =	$_POST['person22'];  $slotno = 2; }
				if($_POST['person23']) {	$noperson =	$_POST['person23'];  $slotno = 3; }
				if($_POST['person24']) {	$noperson =	$_POST['person24'];  $slotno = 4; }
				if($_POST['person25']) {	$noperson =	$_POST['person25'];  $slotno = 5; }
				
				//day3
				if($_POST['person31']) {	$noperson =	$_POST['person31'];  $slotno = 1; }
				if($_POST['person32']) {	$noperson =	$_POST['person32'];  $slotno = 2; }
				if($_POST['person33']) {	$noperson =	$_POST['person33'];  $slotno = 3; }
				if($_POST['person34']) {	$noperson =	$_POST['person34'];  $slotno = 4; }
				if($_POST['person35']) {	$noperson =	$_POST['person35'];  $slotno = 5; }
				
				//day4
				if($_POST['person41']) {	$noperson =	$_POST['person41'];  $slotno = 1; }
				if($_POST['person42']) {	$noperson =	$_POST['person42'];  $slotno = 2; }
				if($_POST['person43']) {	$noperson =	$_POST['person43'];  $slotno = 3; }
				if($_POST['person44']) {	$noperson =	$_POST['person44'];  $slotno = 4; }
				if($_POST['person45']) {	$noperson =	$_POST['person45'];  $slotno = 5; }
				
				//day5
				if($_POST['person51']) {	$noperson =	$_POST['person51'];  $slotno = 1; }
				if($_POST['person52']) {	$noperson =	$_POST['person52'];  $slotno = 2; }
				if($_POST['person53']) {	$noperson =	$_POST['person53'];  $slotno = 3; }
				if($_POST['person54']) {	$noperson =	$_POST['person54'];  $slotno = 4; }
				if($_POST['person55']) {	$noperson =	$_POST['person55'];  $slotno = 5; }
                 
				
                $userid =  $this->session->userdata('id'); 
				$string = $_POST['days'];
                 
				  
				 if($noperson > 4) 
				{
					$this->session->set_flashdata('error_msg', "Only 3 Members allow.. ");  
					redirect(base_url('admin/user/anjalibooking1'));
				}
				 
                $data = array(
                    'days' => $_POST['days'],
					'user_id' => $userid,
					'slotno' => $slotno,
                    'totalperson' => $noperson,
					'passcode' => $string[0]."a".mt_rand(100000,999999),
                    'created_on' => current_datetime()						
                );
               
                // print_r($data);die;
                   $user_id = $this->common_model->insert($data, 'user_anjalibooking');
                   redirect(base_url('admin/user/anjalibooking1'));
               
               
            }
    


	
     public function all_user_list()
     {
         $data['users'] = $this->common_model->get_all_user();
         $data['country'] = $this->common_model->select('country');
         $data['count'] = $this->common_model->get_user_total();
         $data['main_content'] = $this->load->view('admin/user/users', $data, TRUE);
         $this->load->view('admin/index', $data);
     }

     public function bhog()
    {
        $data = array();
        $data['page_title'] = 'User';
		$data['bhog'] = $this->common_model->load_bhognew();
		//print_r($data['bhog']); die;
		// $data['count'] = $this->common_model->get_bhog_total();
        $data['main_content'] = $this->load->view('admin/user/bhog', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	 
	 
	  public function bhoglist()
    {
        $data = array();
        $data['page_title'] = 'User';
		$data['bhog'] = $this->common_model->load_bhognew(); 
		//print_r($data['bhog']); die;
		// $data['count'] = $this->common_model->get_bhog_total();
        $data['main_content'] = $this->load->view('admin/user/bhoglist', $data, TRUE);
        $this->load->view('admin/index', $data);
    } 
	 
	public function anjali()
    {
        $data = array();
        $data['page_title'] = 'User';
		//$data['anjali'] = $this->common_model->get_all_anjali('user_anjalibooking');
		$data['anjali1'] = $this->common_model->load_anjali('user_anjalibooking');
		
		//print_r($data['anjali']); die;
        $data['main_content'] = $this->load->view('admin/user/anjali', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update users info
    public function update($id)
    {
        if ($_POST) {

            $data = array(
				'member_name' => $_POST['member_name'],
                'mobile' => $_POST['mobile'],
				 //'duefees' => $_POST['duefees'],
				 'membersince' => $_POST['membersince'],
				 'familymembers' => $_POST['familymembers'],
                'role' => $_POST['role']
            );
			//print_r($data);die;
            $data = $this->security->xss_clean($data);

            $powers = $this->input->post('role_action');
            if (!empty($powers)) {
                $this->common_model->delete_user_role($id, 'user_role');
                foreach ($powers as $value) {
                   $role_data = array(
                        'user_id' => $id,
                        'action' => $value
                    ); 
                   $role_data = $this->security->xss_clean($role_data);
                   $this->common_model->insert($role_data, 'user_role');
                }
            }

            $this->common_model->edit_option($data, $id, 'user');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/all_user_list'));

        }

        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['user_role'] = $this->common_model->get_user_role($id);
        $data['power'] = $this->common_model->select('user_power');
        $data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/user/edit_user', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }
        
		
		
	//-- update users info
    public function updatebhog($id)
    {
        if ($_POST) {

            $data = array(
				'collectiontime' => $_POST['collectiontime'],
                'id' => $_POST['id'],				 
            );
			$id= $_POST['id']; 
			 // print_r($data);die;
            $data = $this->security->xss_clean($data);

           $this->common_model->edit_optionbhog($data, $id, 'user_bhogbooking');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/bhoglist'));

        }

        $data['user'] = $this->common_model->load_bhogid($id);
        
        $data['main_content'] = $this->load->view('admin/user/edit_bhog', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }	
		
		
	public function update1($id)
    {
        if ($_POST) {

            $data = array(
				'name' => $_POST['name'],
				//'email' => $_POST['email'],
                'phone' => $_POST['phone'],
				'duefees' => $_POST['duefees']
            );
			//print_r($data);die;
           /* $data = $this->security->xss_clean($data);

            $powers = $this->input->post('role_action');
            if (!empty($powers)) {
                $this->common_model->delete_user_role($id, 'user_role');
                foreach ($powers as $value) {
                   $role_data = array(
                        'user_id' => $id,
                        'action' => $value
                    ); 
                   $role_data = $this->security->xss_clean($role_data);
                   $this->common_model->insert($role_data, 'user_role');
                }
            }*/

            $this->common_model->edit_option1($data, $id, 'members');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/all_member_list'));

        }

        $data['user'] = $this->common_model->get_single_user_info1($id, 'members');
        //$data['power'] = $this->common_model->select('user_power');
        //$data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/user/edit_member', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }		
    
    //-- active user
    public function active($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User active Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }
	
	
	
	public function active_bhog($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update_active_bhog($data, $id,'user_bhogbooking');
        $this->session->set_flashdata('msg', 'Bhog deliver Successfully');
        redirect(base_url('admin/user/bhog'));
    }
	
	
	public function active_anjali($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update_active_anjali($data, $id,'user_anjalibooking');
        $this->session->set_flashdata('msg', 'Anjali Done Successfully');
        redirect(base_url('admin/user/anjali'));
    }

    //-- deactive user
    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User deactive Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }
	
	
	public function deactive_bhog($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update_deactive_bhog($data, $id,'user_bhogbooking');
        $this->session->set_flashdata('msg', 'Bhog is Pending');
        redirect(base_url('admin/user/bhog'));
    }
	
	
	public function deactive_anjali($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update_deactive_anjali($data, $id,'user_anjalibooking');
        $this->session->set_flashdata('msg', 'Anjali is Pending');
        redirect(base_url('admin/user/anjali'));
    }
	
	

    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete($id,'user'); 
        $this->session->set_flashdata('msg', 'User deleted Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }
    
	public function delete_member($id)
    {
        $this->common_model->delete($id,'members'); 
        $this->session->set_flashdata('msg', 'Member deleted Successfully');
        redirect(base_url('admin/user/all_member_list'));
    }
	
	//-- delete user
    public function deleteabook($id)
    {
        $this->common_model->delete($id,'user_anjalibooking'); 
        $this->session->set_flashdata('msg', 'Book cancel successfully');
        redirect(base_url('admin/user/anjalibooking'));
    }

    //-- delete user
    public function deleteabook1($id)
    {
        $this->common_model->delete($id,'user_anjalibooking'); 
        $this->session->set_flashdata('msg', 'Book cancel successfully');
        redirect(base_url('admin/user/anjalibooking1'));
    }


    public function power()
    {   
        $data['powers'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/user_power', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add user power
    public function add_power()
    {   
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name'],
                'power_id' => $_POST['power_id']
            );
            $data = $this->security->xss_clean($data);
            
            //-- check duplicate power id
            $power = $this->common_model->check_exist_power($_POST['power_id']);
            if (empty($power)) {
                $user_id = $this->common_model->insert($data, 'user_power');
                $this->session->set_flashdata('msg', 'Power added Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Power id already exist, try another one');
            }
            redirect(base_url('admin/user/power'));
        }
        
    }

    //--update user power
    public function update_power()
    {   
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name']
            );
            $data = $this->security->xss_clean($data);
            
            $this->session->set_flashdata('msg', 'Power updated Successfully');
            $user_id = $this->common_model->edit_option($data, $_POST['id'], 'user_power');
            redirect(base_url('admin/user/power'));
        }
        
    }

    public function delete_power($id)
    {
        $this->common_model->delete($id,'user_power'); 
        $this->session->set_flashdata('msg', 'Power deleted Successfully');
        redirect(base_url('admin/user/power'));
    }


}