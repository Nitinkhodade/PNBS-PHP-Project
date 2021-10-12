<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
    }

    
    public function index(){
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['count'] = $this->common_model->get_user_total();
		$data['count1'] = $this->common_model->total_packs();
		$data['count2'] = $this->common_model->total_packs1();
		$data['count3'] = $this->common_model->total_packs2();
		$data['count4'] = $this->common_model->total_packs3();
		$data['count5'] = $this->common_model->total_packs4();
		
		$data['count41'] = $this->common_model->total_packs41();
		$data['count42'] = $this->common_model->total_packs42();
		$data['count43'] = $this->common_model->total_packs43();
								
		//print_r($data['count5']); die;
		$data['count6'] = $this->common_model->total_packs5();
		$data['count7'] = $this->common_model->total_packs6();
		$data['count8'] = $this->common_model->total_packs7();
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function backup($fileName='db_backup.zip'){
        $this->load->dbutil();
        $backup =& $this->dbutil->backup();
        $this->load->helper('file');
        write_file(FCPATH.'/downloads/'.$fileName, $backup);
        $this->load->helper('download');
        force_download($fileName, $backup);
    }

}