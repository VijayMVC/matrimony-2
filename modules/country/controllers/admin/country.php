<?php

class Country extends Admin_Controller
{
	
	public function __construct(){
    	parent::__construct();
        $this->load->module_model('country','country_model');
        $this->lang->module_load('country','country');
        //$this->bep_assets->load_asset('jquery.upload'); // uncomment if image ajax upload
    }
    
	public function index()
	{
		// Display Page
		$data['header'] = 'country';
		$data['page'] = $this->config->item('template_admin') . "country/index";
		$data['module'] = 'country';
		$this->load->view($this->_container,$data);		
	}

	public function json()
	{
		$this->_get_search_param();	
		$total=$this->country_model->count();
		paging('country_id');
		$this->_get_search_param();	
		$rows=$this->country_model->getCountries()->result_array();
		echo json_encode(array('total'=>$total,'rows'=>$rows));
	}
	
	public function _get_search_param()
	{
		// Search Param Goes Here
		parse_str($this->input->post('data'),$params);
		if(!empty($params['search']))
		{
			($params['search']['country_name']!='')?$this->db->like('country_name',$params['search']['country_name']):'';
($params['search']['code']!='')?$this->db->like('code',$params['search']['code']):'';
(isset($params['search']['status']))?$this->db->where('status',$params['search']['status']):'';

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
		$rows=$this->country_model->getCountries()->result_array();
		echo json_encode($rows);    	
    }    
    
	public function delete_json()
	{
    	$id=$this->input->post('id');
		if($id && is_array($id))
		{
        	foreach($id as $row):
				$this->country_model->delete('COUNTRIES',array('country_id'=>$row));
            endforeach;
		}
	}    

	public function save()
	{
		
        $data=$this->_get_posted_data(); //Retrive Posted Data		

        if(!$this->input->post('country_id'))
        {
            $success=$this->country_model->insert('COUNTRIES',$data);
        }
        else
        {
            $success=$this->country_model->update('COUNTRIES',$data,array('country_id'=>$data['country_id']));
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
        $data['country_id'] = $this->input->post('country_id');
$data['country_name'] = $this->input->post('country_name');
$data['code'] = $this->input->post('code');
$data['status'] = $this->input->post('status');

        return $data;
   }
   
   	
	    
}