<?php

class Member extends Admin_Controller
{
	protected $uploadPath = 'uploads/member';
	protected $uploadthumbpath= 'uploads/member/thumb/';
	
	public function __construct(){
    	parent::__construct();
        $this->load->module_model('member','member_model');
        $this->lang->module_load('member','member');
        $this->bep_assets->load_asset('jquery.upload'); // uncomment if image ajax upload
    }
    
	public function index()
	{
		// Display Page
		$data['header'] = 'member';
		$data['page'] = $this->config->item('template_admin') . "member/index";
		$data['module'] = 'member';
		$this->load->view($this->_container,$data);		
	}

	public function json()
	{
		$this->_get_search_param();	
		$total=$this->member_model->count();
		paging('member_id');
		$this->_get_search_param();	
		$rows=$this->member_model->getMembers()->result_array();
		echo json_encode(array('total'=>$total,'rows'=>$rows));
	}
	
	public function _get_search_param()
	{
		// Search Param Goes Here
		parse_str($this->input->post('data'),$params);
		if(!empty($params['search']))
		{
			($params['search']['username']!='')?$this->db->like('username',$params['search']['username']):'';
			($params['search']['gender']!='')?$this->db->where('gender',$params['search']['gender']):'';
			($params['search']['profile_of']!='')?$this->db->where('profile_of',$params['search']['profile_of']):'';
			($params['search']['religion']!='')?$this->db->where('religion',$params['search']['religion']):'';
			($params['search']['mother_lang']!='')?$this->db->where('mother_lang',$params['search']['mother_lang']):'';
			($params['search']['caste']!='')?$this->db->where('caste',$params['search']['caste']):'';
			($params['search']['country']!='')?$this->db->where('country',$params['search']['country']):'';
			($params['search']['contact']!='')?$this->db->like('contact',$params['search']['contact']):'';
			($params['search']['mobile']!='')?$this->db->like('mobile',$params['search']['mobile']):'';
			($params['search']['email']!='')?$this->db->like('email',$params['search']['email']):'';
			($params['search']['martial_status']!='')?$this->db->where('martial_status',$params['search']['martial_status']):'';
			($params['search']['caste_allowed']!='')?$this->db->where('caste_allowed',$params['search']['caste_allowed']):'';
			($params['search']['sub_caste']!='')?$this->db->like('sub_caste',$params['search']['sub_caste']):'';
			($params['search']['state']!='')?$this->db->like('state',$params['search']['state']):'';
			($params['search']['city']!='')?$this->db->like('city',$params['search']['city']):'';
			($params['search']['citizenship']!='')?$this->db->where('citizenship',$params['search']['citizenship']):'';
			($params['search']['height_feet']!='')?$this->db->where('height_feet',$params['search']['height_feet']):'';
			($params['search']['height_cms']!='')?$this->db->where('height_cms',$params['search']['height_cms']):'';
			($params['search']['weight_kgs']!='')?$this->db->where('weight_kgs',$params['search']['weight_kgs']):'';
			($params['search']['weight_lbs']!='')?$this->db->where('weight_lbs',$params['search']['weight_lbs']):'';
			($params['search']['body_type']!='')?$this->db->where('body_type',$params['search']['body_type']):'';
			($params['search']['complexion']!='')?$this->db->where('complexion',$params['search']['complexion']):'';
			($params['search']['physical_status']!='')?$this->db->where('physical_status',$params['search']['physical_status']):'';
			($params['search']['qualification']!='')?$this->db->where('qualification',$params['search']['qualification']):'';
			($params['search']['occupation']!='')?$this->db->where('occupation',$params['search']['occupation']):'';
			($params['search']['emp_field']!='')?$this->db->where('emp_field',$params['search']['emp_field']):'';
			($params['search']['income_type']!='')?$this->db->where('income_type',$params['search']['income_type']):'';
			($params['search']['inc_currency']!='')?$this->db->where('inc_currency',$params['search']['inc_currency']):'';
			($params['search']['income']!='')?$this->db->like('income',$params['search']['income']):'';
			($params['search']['food']!='')?$this->db->where('food',$params['search']['food']):'';
			($params['search']['smoke']!='')?$this->db->where('smoke',$params['search']['smoke']):'';
			($params['search']['drink']!='')?$this->db->where('drink',$params['search']['drink']):'';
			($params['search']['family_stat']!='')?$this->db->where('family_stat',$params['search']['family_stat']):'';
			($params['search']['family_value']!='')?$this->db->where('family_value',$params['search']['family_value']):'';
			($params['search']['family_type']!='')?$this->db->where('family_type',$params['search']['family_type']):'';
			($params['search']['photo']!='')?$this->db->like('photo',$params['search']['photo']):'';
			(isset($params['search']['photo_validation']))?$this->db->where('photo_validation',$params['search']['photo_validation']):'';
			(isset($params['search']['member_status']))?$this->db->where('member_status',$params['search']['member_status']):'';

		}  

		
		if(!empty($params['date']))
		{
			foreach($params['date'] as $key=>$value){
				$this->_datewise($key,$value['from'],$value['to']);	
			}
		}
		               
        
	}

		
    
	public function combo_json()
    {
		$rows=$this->member_model->getMembers()->result_array();
		echo json_encode($rows);    	
    }    
    
	public function delete_json()
	{
    	$id=$this->input->post('id');
		if($id && is_array($id))
		{
        	foreach($id as $row):
				$this->member_model->delete('MEMBERS',array('member_id'=>$row));
            endforeach;
		}
	} 
	
	public function form($id=NULL)
	{
		$data['header'] = 'Member Form';
		$data['member'] = NULL;
		if($id)
		{
			$data['member'] = $this->member_model->getMembers(array('member_id'=>$id))->row_array();
		}
		$data['page'] = $this->config->item('template_admin') . "member/form";
		$data['module'] = 'member';
		$this->load->view($this->_container,$data);		
	}   

	public function save()
	{
		
        $data=$this->_get_posted_data(); //Retrive Posted Data		

        if(!$this->input->post('member_id'))
        {
            $success=$this->member_model->insert('MEMBERS',$data);
        }
        else
        {
            $success=$this->member_model->update('MEMBERS',$data,array('member_id'=>$data['member_id']));
        }
        
		if($success)
		{
			$success = TRUE;
			$msg=lang('success_message'); 
		} 
		else
		{
			$success = FALSE;
			$msg=lang('failure_message');
		}
		 
		 echo json_encode(array('msg'=>$msg,'success'=>$success));		
        
	}
   
   private function _get_posted_data()
   {
   		$data=array();
        $data['member_id'] = $this->input->post('member_id');
		$data['username'] = $this->input->post('username');
		$data['gender'] = $this->input->post('gender');
		$data['dob'] = $this->input->post('dob');
		$data['profile_of'] = $this->input->post('profile_of');
		$data['religion'] = $this->input->post('religion');
		$data['mother_lang'] = $this->input->post('mother_lang');
		$data['caste'] = $this->input->post('caste');
		$data['country'] = $this->input->post('country');
		$data['contact'] = $this->input->post('contact');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['martial_status'] = $this->input->post('martial_status');
		$data['caste_allowed'] = $this->input->post('caste_allowed');
		$data['sub_caste'] = $this->input->post('sub_caste');
		$data['state'] = $this->input->post('state');
		$data['city'] = $this->input->post('city');
		$data['citizenship'] = $this->input->post('citizenship');
		$data['height_feet'] = $this->input->post('height_feet');
		$data['height_cms'] = $this->input->post('height_cms');
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
		$data['income'] = $this->input->post('income');
		$data['food'] = $this->input->post('food');
		$data['smoke'] = $this->input->post('smoke');
		$data['drink'] = $this->input->post('drink');
		$data['family_stat'] = $this->input->post('family_stat');
		$data['family_value'] = $this->input->post('family_value');
		$data['family_type'] = $this->input->post('family_type');
		$data['description'] = $this->input->post('description');
		$data['photo'] = $this->input->post('photo');
		$data['photo_validation'] = $this->input->post('photo_validation');
		$data['member_status'] = $this->input->post('member_status');

        return $data;
   }
   
   	function upload_image(){
		//Image Upload Config
		$config['upload_path'] = $this->uploadPath;
		$config['allowed_types'] = 'gif|png|jpg';
		$config['max_size']	= '10240';
		$config['remove_spaces']  = true;
		//load upload library
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors('','');
			echo json_encode($data);
		}
		else
		{
		  $data = $this->upload->data();
 		  $config['image_library'] = 'gd2';
		  $config['source_image'] = $data['full_path'];
          $config['new_image']    = $this->uploadthumbpath;
		  //$config['create_thumb'] = TRUE;
		  $config['maintain_ratio'] = TRUE;
		  $config['height'] =100;
		  $config['width'] = 100;

		  $this->load->library('image_lib', $config);
		  $this->image_lib->resize();
		  echo json_encode($data);
	    }
	}
	
	function upload_delete(){
		//get filename
		$filename = $this->input->post('filename');
		@unlink($this->uploadPath . '/' . $filename);
	}
	    
}