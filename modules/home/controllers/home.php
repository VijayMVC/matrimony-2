<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Public_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->module_model('country','country_model');
		$this->load->module_model('member','member_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		//$this->form_validation('username','Username','trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$data['header'] = "Home";
			$data['countries'] = $this->country_model->getCountries()->result_array();
			$data['view_page'] = 'home/index';
			$this->load->view($this->_container,$data);
		}
		else
		{
			//$data['member_id'] = $this->db->insert_id();
			$insertData['username'] = $this->input->post('username');
			$insertData['profile_of'] = $this->input->post('profile_of');
			$insertData['gender'] = $this->input->post('gender');
			$insertData['dob'] = $this->input->post('dob');
			$insertData['religion'] = $this->input->post('religion');
			$insertData['mother_lang'] = $this->input->post('mother_lang');
			$insertData['caste'] = $this->input->post('caste');
			$insertData['country'] = $this->input->post('country');
			$insertData['contact'] = $this->input->post('contact');
			$insertData['mobile'] = $this->input->post('mobile');
			$insertData['email'] = $this->input->post('email');
			
			$success = $this->member_model->insert('MEMBERS',$insertData);
			if($success == TRUE)
			{
				//redirect(site_url('home/detail'));
				$data['header'] = "Home";
				$data['member_id'] = $this->db->insert_id();
				$data['countries'] = $this->country_model->getCountries()->result_array();
				$data['view_page'] = 'home/detail';
				$this->load->view($this->_container,$data);
			}
			else
			{
				redirect(site_url('home/index'));
			}
		}
		//$member_id = $this->db->insert_id();
	}
	
	public function detail()
	{
		//$this->form_validation->set_rules('state','State','trim|required');
		//$this->form_validation->set_rules('city','City','trim|required');
		/*if($this->form_validation->run() == FALSE)
		{*/
			
			$data['header'] = "Home";
			$data['countries'] = $this->country_model->getCountries()->result_array();
			$data['view_page'] = 'home/detail';
			$this->load->view($this->_container,$data);
		/*}
		else
		{*/
			
			//print $this->db->last_query();
			
			//$member_id = $this->db->insert_id();
			
		//}
	}
	
	public function save_details()
	{
		
		$config['upload_path'] = 'uploads/member';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 1024;
		$this->load->library('upload',$config);
		
		$uploaded = $this->upload->do_upload('photo');
		if($uploaded)
		{
			$image = $this->upload->data();
			$data['photo'] = $image['file_name'];
		}
		
			$data['member_id'] = $this->input->post('member_id');
			//echo "<pre>"; echo $member_id; exit;
			$data['martial_status'] = $this->input->post('martial_status');
			$data['caste_allowed'] = $this->input->post('caste_allowed');
			$data['citizenship'] = $this->input->post('citizenship');
			$data['sub_caste'] = $this->input->post('sub_caste');
			$data['state'] = $this->input->post('state');
			$data['city'] = $this->input->post('city');
			$data['height_feet'] = $this->input->post('height_feet');
			$data['height_cms'] = $this->input->post('height_cm');
			$data['weight_kgs'] = $this->input->post('weight_kgs');
			$data['weight_lbs'] = $this->input->post('weight_lbs');
			$data['body_type'] = $this->input->post('body_type');
			$data['complexion'] = $this->input->post('complexion');
			$data['physical_status'] = $this->input->post('physical_status');
			$data['qualification'] = $this->input->post('qualification');
			$data['occupation'] = $this->input->post('occupation');
			$data['emp_field'] = $this->input->post('emp_field');
			$data['income_type'] = $this->input->post('income_type');
			$data['inc_currency'] = $this->input->post('inc_currency');
			$data['food'] = $this->input->post('food');
			$data['smoke'] = $this->input->post('smoke');
			$data['drink'] = $this->input->post('drink');
			$data['family_stat'] = $this->input->post('family_stat');
			$data['family_type'] = $this->input->post('family_type');
			$data['family_value'] = $this->input->post('family_value');
			$data['description'] = $this->input->post('description');
			
			$success = $this->member_model->update('MEMBERS',$data,array('member_id'=>$data['member_id']));
			//echo "<pre>"; print $this->db->last_query(); exit;
			if($success == TRUE)
			{
				redirect(site_url('home/show_page'));
				
			}
			else
			{
				redirect(site_url('home/detail'));
			}
	}
	
	public function show_page()
	{
		$data['header'] = "Thankyou";
		$data['view_page'] = "home/show_page";
		
		$this->load->view($this->_container,$data);
	}
	
}


/* End of file welcome.php */
/* Location: ./modules/welcome/controllers/welcome.php */