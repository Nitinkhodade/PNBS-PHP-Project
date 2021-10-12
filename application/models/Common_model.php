<?php
class Common_model extends CI_Model {

    //-- insert function
	public function insert($data,$table){
        $this->db->insert($table,$data);  
  // print_r($data);die;		
        return $this->db->insert_id();
		return $this->db->last_query();
    }
	
	function get_single_user_info1($id, $table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
	
    function edit_option1($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }
	
	function get_all_member($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	
	 
	
    //-- edit function
    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 
	
	 function edit_optionbhog($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    function get_all_bhog($table){
         $this->db->select();
		$this->db->select('m.member_name as name');	
        $this->db->from($table);
		$this->db->join('user as m','m.id = user_bhogbooking.user_id','LEFT');
        //$this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	function get_all_anjali($table){
        $this->db->select();
		$this->db->select('m.member_name as name');	
        $this->db->from($table);
		$this->db->join('user as m','m.id = user_anjalibooking.user_id','LEFT');
        //$this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	

    //-- update function
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }


	function update_active_bhog($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 
	
	function update_active_anjali($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 
	
	
	function update_deactive_bhog($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 
	
	
	function update_deactive_anjali($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    //-- delete function
    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return;
    }

    //-- user role delete function
    function delete_user_role($id,$table){
        $this->db->delete($table, array('user_id' => $id));
        return;
    }


    //-- select function
    function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select by id
    function select_option($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    //-- check user role power
    function check_power($type){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id', $this->session->userdata('id'));
        $this->db->where('ur.action', $type);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function check_email($email){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }

    public function check_exist_power($id){
        $this->db->select('*');
        $this->db->from('user_power');
        $this->db->where('power_id', $id); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }


    //-- get all power
    function get_all_power($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('power_id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get logged user info
    function get_user_info(){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get single user info
    function get_single_user_info($id){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get single user info
    function get_user_role($id){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }




    //-- get all users with type 2
    function get_all_user(){
        $this->db->select('u.*');
        $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- count active, inactive and total user
    function get_user_total(){
        $this->db->select('*');
        $this->db->select('count(*) as total');
        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.status = 1)
                            )
                            AS active_user',TRUE);

        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.status = 0)
                            )
                            AS inactive_user',TRUE);

        //$this->db->select('(SELECT count(user.id)
                        //    FROM user 
                        //    WHERE (user.role = "admin")
                        //    )
                        //    AS admin',TRUE);
		//$this->db->select('(SELECT count(numberofpack)
                            //FROM user_bhogbooking 
							//)
                            //AS total_pack',TRUE);						

        $this->db->from('user');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
	
	/*function get_bhog_total(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT count(numberofpack.id)
                            FROM user_bhogbooking 
                            WHERE (user_bhogbooking.days = saptami)
                            )
                            AS saptami_packs',TRUE);

        $this->db->select('(SELECT count(numberofpack.id)
                            FROM user_bhogbooking 
                            WHERE (user_bhogbooking.days = ashtami)
                            )
                            AS ashtami_packs',TRUE);					

        $this->db->from('user_bhogbooking');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }*/
    
	public function total_packs1(){
		
		$sql = "SELECT sum(`numberofpack`) As saptami_packs FROM `user_bhogbooking` WHERE payment_type= '1' AND days= 'saptami' ";
		$query = $this->db->query($sql);
		return $query->row();
		
		
	}
    public function total_packs2(){
		
		$sql = "SELECT sum(`numberofpack`) As ashtami_packs FROM `user_bhogbooking` WHERE payment_type= '1' AND days= 'ashtami' ";
		$query = $this->db->query($sql);
		return $query->row();
		
		
	}
	public function total_packs3(){
		
		$sql = "SELECT sum(`numberofpack`) As nabami_packs FROM `user_bhogbooking` WHERE payment_type= '1' AND days= 'nabami' ";
		$query = $this->db->query($sql);
		return $query->row();
		
		
	}
	/*public function total_packs4(){
		
		$sql = "SELECT sum(`totalperson`) As saptami_anjalipacks FROM `user_anjalibooking` WHERE slotno= '1'";
		$sql = "SELECT sum(`totalperson`) As saptami_anjalipacks1 FROM `user_anjalibooking` WHERE slotno= '2'";
		$sql = "SELECT sum(`totalperson`) As saptami_anjalipacks2 FROM `user_anjalibooking` WHERE slotno= '3'";
		$sql = "SELECT sum(`totalperson`) As saptami_anjalipacks3 FROM `user_anjalibooking` WHERE slotno= '4'";
		$sql = "SELECT sum(`totalperson`) As saptami_anjalipacks4 FROM `user_anjalibooking` WHERE slotno= '5'";
		$query = $this->db->query($sql);
		return $query->row();
		
		
	}*/
	
	
	function total_packs4(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 1 and days = "saptami" )
                            )
                            AS saptami_anjalipacks',TRUE);

        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 2 and days = "saptami")
                            )
                            AS saptami_anjalipacks1',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 3 and days = "saptami")
                            )
                            AS saptami_anjalipacks2',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 4 and days = "saptami")
                            )
                            AS saptami_anjalipacks3',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 5 and days = "saptami")
                            )
                            AS saptami_anjalipacks4',TRUE);							

        $this->db->from('user_anjalibooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }
	
	function total_packs5(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 1 and days = "ashtami")
                            )
                            AS ashtami_anjalipacks',TRUE);

        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 2 and days = "ashtami")
                            )
                            AS ashtami_anjalipacks1',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 3 and days = "ashtami")
                            )
                            AS ashtami_anjalipacks2',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 4 and days = "ashtami")
                            )
                            AS ashtami_anjalipacks3',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 5 and days = "ashtami")
                            )
                            AS ashtami_anjalipacks4',TRUE);							

        $this->db->from('user_anjalibooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }
	
	function total_packs6(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 1 and days = "nabami")
                            )
                            AS nabami_anjalipacks',TRUE);

        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 2 and days = "nabami")
                            )
                            AS nabami_anjalipacks1',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 3 and days = "nabami")
                            )
                            AS nabami_anjalipacks2',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 4 and days = "nabami")
                            )
                            AS nabami_anjalipacks3',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 5 and days = "nabami")
                            )
                            AS nabami_anjalipacks4',TRUE);							

        $this->db->from('user_anjalibooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }
	function total_packs7(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 1 and days = "dashami")
                            )
                            AS dashami_packs',TRUE);

       $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 2 and days = "dashami")
                            )
                            AS dashami_packs1',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 3 and days = "dashami")
                            )
                            AS dashami_packs2',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 4 and days = "dashami")
                            )
                            AS dashami_packs3',TRUE);
							
        $this->db->select('(SELECT sum(totalperson)
                            FROM user_anjalibooking 
                            WHERE (slotno = 5 and days = "dashami")
                            )
                            AS dashami_packs4',TRUE);						

        $this->db->from('user_anjalibooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }
	
	
	
	
	function total_packs41(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "01:00 PM" and days = "saptami" and payment_type = "1")
                            )
                            AS saptami_bhogpacks',TRUE);

        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "01:30 PM" and days = "saptami" and payment_type = "1")
                            )
                            AS saptami_bhogpacks1',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "02:00 PM" and days = "saptami" and payment_type = "1")
                            )
                            AS saptami_bhogpacks2',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "02:30 PM" and days = "saptami" and payment_type = "1")
                            )
                            AS saptami_bhogpacks3',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "03:00 PM" and days = "saptami" and payment_type = "1")
                            )
                            AS saptami_bhogpacks4',TRUE);							

        $this->db->from('user_bhogbooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }




    function total_packs42(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "01:00 PM" and days = "ashtami" and payment_type = "1" )
                            )
                            AS ashatami_bhogpacks',TRUE);

        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "01:30 PM" and days = "ashtami" and payment_type = "1")
                            )
                            AS ashatami_bhogpacks1',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "02:00 PM" and days = "ashtami" and payment_type = "1")
                            )
                            AS ashatami_bhogpacks2',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "02:30 PM" and days = "ashtami" and payment_type = "1")
                            )
                            AS ashatami_bhogpacks3',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "03:00 PM" and days = "ashtami" and payment_type = "1")
                            )
                            AS ashatami_bhogpacks4',TRUE);							

        $this->db->from('user_bhogbooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }




    function total_packs43(){
        $this->db->select('*');
        //$this->db->select('count(*) as total');
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "01:00 PM" and days = "nabami"and payment_type = "1")
                            )
                            AS nabami_bhogpacks',TRUE);

        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "01:30 PM" and days = "nabami" and payment_type = "1")
                            )
                            AS nabami_bhogpacks1',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "02:00 PM" and days = "nabami" and payment_type = "1")
                            )
                            AS nabami_bhogpacks2',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "02:30 PM" and days = "nabami" and payment_type = "1")
                            )
                            AS nabami_bhogpacks3',TRUE);
							
        $this->db->select('(SELECT sum(numberofpack)
                            FROM user_bhogbooking 
                            WHERE (collectiontime = "03:00 PM" and days = "nabami" and payment_type = "1")
                            )
                            AS nabami_bhogpacks4',TRUE);							

        $this->db->from('user_bhogbooking');
        $query = $this->db->get();
        $query = $query->row_array();  
        return $query;
    }
	
	
	
	
	
	
	
	
	
    //-- image upload function with resize option
    function upload_image($max_size){
            
            //-- set upload path
            $config['upload_path']  = "./assets/images/";
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']     = '92000';
            $config['max_width']    = '92000';
            $config['max_height']   = '92000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("photo")) {

                
                $data = $this->upload->data();

                //-- set upload path
                $source             = "./assets/images/".$data['file_name'] ;
                $destination_thumb  = "./assets/images/thumbnail/" ;
                $destination_medium = "./assets/images/medium/" ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;

                /* Resizing Processing */
                // Configuration Of Image Manipulation :: Static
                $this->load->library('image_lib') ;
                $img['image_library'] = 'GD2';
                $img['create_thumb']  = TRUE;
                $img['maintain_ratio']= TRUE;

                /// Limit Width Resize
                $limit_medium   = $max_size ;
                $limit_thumb    = 200 ;

                // Size Image Limit was using (LIMIT TOP)
                $limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;

                // Percentase Resize
                if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
                    $percent_medium = $limit_medium/$limit_use ;
                    $percent_thumb  = $limit_thumb/$limit_use ;
                }

                //// Making THUMBNAIL ///////
                $img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
                $img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_thumb-'.floor($img['width']).'x'.floor($img['height']) ;
                $img['quality']      = ' 100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_thumb ;

                $thumb_nail = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                ////// Making MEDIUM /////////////
                $img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
                $img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_medium-'.floor($img['width']).'x'.floor($img['height']) ;
                $img['quality']      = '100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_medium ;

                $mid = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                //-- set upload path
                $images = 'assets/images/medium/'.$mid;
                $thumb  = 'assets/images/thumbnail/'.$thumb_nail;
                unlink($source) ;

                return array(
                    'images' => $images,
                    'thumb' => $thumb
                );
            }
            else {
                echo "Failed! to upload image" ;
            }
            
    }
  
  
  public function load_data()
            {
            $this->db->order_by('id', 'ASC');
            $query = $this->db->get('user_bhogbooking');
            return $query->result_array();
            
            }
			
   public function bookslotfirst1($slot, $day) {

        $sql = "SELECT sum(`totalperson`) as tperson FROM `user_anjalibooking` WHERE slotno = '".$slot."' and `days` = '".$day."'"; 

        $query = $this->db->query($sql);

        return $query->row_array();
    }			
       
	
	function get_all_anjalilist()
     { 
	         $this->db->order_by('id', 'ASC');
			  $this->db->where('user_id',$this->session->userdata('id'));
            $query = $this->db->get('user_anjalibooking');
            return $query->result_array();
     }
	 
	function get_all_anjalilist1()
     { 
	         $this->db->order_by('id', 'ASC');
			 $this->db->where('days','dashami');
			  $this->db->where('user_id',$this->session->userdata('id'));
            $query = $this->db->get('user_anjalibooking');
            return $query->result_array(); 
     } 
	 function get_bhoglist()
     {   
	 
	       //$sql = "SELECT ub.* FROM `user_bhogbooking` ub inner join bhog_invoice bi on ub.id=bi.bhog_id WHERE ub.user_id='".$this->session->userdata('id')."' and ub.payment_type = '1' and bi.payment_id != ''";
	       //$query = $this->db->query($sql);
		   //return $query->result_array();
			
			$this->db->order_by('id', 'ASC');
			 $this->db->where('user_id',$this->session->userdata('id'));
			 $this->db->where('payment_type','1');
            $query = $this->db->get('user_bhogbooking');
			//print_r($query); die;
			return $query->result_array();
			//$this->db->last_query(); die;
	}
	
	function get_bhoglistcheck($day)
     {   
	        $this->db->where('days',$day);
			 $this->db->where('payment_type','1');
			 $this->db->where('user_id',$this->session->userdata('id'));
            $query = $this->db->get('user_bhogbooking');
			//print_r($query); die;
			return $query->num_rows();
			//$this->db->last_query(); die;
			//  $sql = "SELECT ub.* FROM `user_bhogbooking` ub inner join bhog_invoice bi on ub.id=bi.bhog_id WHERE ub.user_id='".$this->session->userdata('id')."' and ub.payment_type = '1' and bi.payment_id != '' and ub.days = '".$day."'";
	        //$query = $this->db->query($sql);
		   //return $query->num_rows();
			
			
			
	}
	function get_bhogcount()
     {   
	        
			/* $this->db->where('payment_type','1');			 
            $query = $this->db->get('user_bhogbooking');
			//print_r($query); die;
			return $query->num_rows();
			//$this->db->last_query(); die;
			*/
			$sql = "SELECT sum(`numberofpack`) AS total_pack FROM `user_bhogbooking`";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function get_bhogcountdayuser($day)
     {   
	        
			/* $this->db->where('payment_type','1');			 
            $query = $this->db->get('user_bhogbooking');
			//print_r($query); die;
			return $query->num_rows();
			//$this->db->last_query(); die;
			*/
			$sql = "SELECT sum(`numberofpack`) AS total_pack FROM `user_bhogbooking` WHERE days='".$day."' and user_id='".$this->session->userdata('id')."' and `payment_type` = 1";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	
	function get_bhogcountday($day)
     {   
	        
			/* $this->db->where('payment_type','1');			 
            $query = $this->db->get('user_bhogbooking');
			//print_r($query); die;
			return $query->num_rows();
			//$this->db->last_query(); die;
			*/
			$sql = "SELECT sum(`numberofpack`) AS total_pack FROM `user_bhogbooking` WHERE days='".$day."' and `payment_type` = 1";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function get_ajaliilistcheck($day)
     {   
	        $this->db->where('days',$day);
			 $this->db->where('user_id',$this->session->userdata('id'));
            $query = $this->db->get('user_anjalibooking');
			//print_r($query); die;
			return $query->num_rows();
			//$this->db->last_query(); die;
	} 
	public function get_familymember() {
		$sql = "SELECT familymembers as fammember FROM `user` WHERE id=".$this->session->userdata('id');
		$query = $this->db->query($sql);
		return $query->row_array();
		
		
    }
	
	public function total_packs(){
		
		$sql = "SELECT sum(`numberofpack`) AS total_pack FROM `user_bhogbooking`";
		$query = $this->db->query($sql);
		return $query->row();
		
		
	}
	
	
	public function user_membercheck($mobile, $email){
		
		$sql = "SELECT * FROM `members` where email='".$email."' or phone='".$mobile."'";
		$query = $this->db->query($sql);
		return $query->num_rows();
		
		
	}
	
	public function user_membercheckamount($mobile, $email){
		
		$sql = "SELECT * FROM `members` where email='".$email."' or phone='".$mobile."' and duefees = '0'";
		$query = $this->db->query($sql);
		return $query->num_rows();
		
		
	}
	
	public function user_membercheckamount1($mobile, $email){
		
		$sql = "SELECT * FROM `members` where email='".$email."' or phone='".$mobile."'";
		$query = $this->db->query($sql);
		return $query->num_rows();
		
		
	}
	
	public function load_bhog()
        {
            $this->db->order_by('id', 'ASC');	
			
            $this->db->where('payment_type','1');
            $query = $this->db->get('user_bhogbooking');
            return $query->result_array();
        }
		
		
	public function load_bhognew()	
		{
			$sql = "SELECT ub.*,bi.first_name  FROM `user_bhogbooking` ub inner join user bi on ub.user_id=bi.id WHERE ub.payment_type = '1' and bi.status='1'";
	       $query = $this->db->query($sql);
		   return $query->result_array();
		}
		
	 public function load_bhogid($id)
        {
           // $this->db->order_by('id', 'ASC');	
			$this->db->where('id',$id);
            $this->db->where('payment_type','1');
            $query = $this->db->get('user_bhogbooking');
            return $query->row_array();
        }
	public function load_anjali($table)
        {
			
		//$this->db->select();
		$this->db->select('m.member_name as name, user_anjalibooking.status, user_anjalibooking.days, user_anjalibooking.totalperson , user_anjalibooking.passcode, user_anjalibooking.created_on, user_anjalibooking.id');	
        $this->db->from($table);
		$this->db->join('user as m','m.id = user_anjalibooking.user_id');
		//$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		$query = $query->result_array();  
		// echo $this->db->last_query(); die;
        return $query;

        }

}