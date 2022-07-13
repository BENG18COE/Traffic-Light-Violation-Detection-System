<?php
include "Base.php";
defined('BASEPATH') OR exit('No direct script access allowed');
class Accidents extends Base{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLoggedIn')){
			$this->session->set_userdata('session_expire',true);
			redirect('Auth');
		}
		if ($this->session->userdata('lock')) {
			redirect('Auth/lock');
		}
	}

	public function index(){

        $condition                  = array('car_status'=>1);
        $this->page_data['cars']    = $this->get('tbl_car',$condition,true);
        if (isset($_POST['save'])){
            $this->form_validation->set_rules('car','car','trim|required');
            if ($this->form_validation->run()){
                $car						= $this->input->post('car');
                $condition					= array('car_id'=>$car);
                $join                       = 'tbl_car';
                $value                      = 'tbl_car.car_id = tbl_violation.car_id';
                $join1                      = 'tbl_users';
                $value1                     = 'tbl_users.user_id = tbl_car.owner_id';
                $this->page_data['accidents']    = $this->get('tbl_violation',null,true,$join,$value,$join1,$value1);
            }else{
                $this->page_data['message']	= array('class'=>'danger','header'=>'Error !','description'=>$this->formValidationErrors());
            }
        }
		$this->page_data['page']			= 'accidents/dashboard.php';
		$this->renderPage($this->page_data);
	}


}
