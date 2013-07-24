<?php 
	class Myaccount_controller extends CI_Controller
	{
		var $base;
		var $css;
		  function __construct()
       {
            parent::__construct();
			$this->base = $this->config->item('base_url');
			$this->css = "style.css";
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('email');
			$this->load->database();
			$this->load->helper('string');
			$this->load->model('myacount_model');
			$this->load->model('home_model');
			
		}
		function account_details($id="")
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['menu'] = "myaccount";
			$id = $this->session->userdata("memberid");
			$this->session->set_userdata('url', current_url()); 
			$data['id']=$id;
			$data['user_data'] = $this->myacount_model->user_acount_details($id);
			$data['cart_count']=$this->home_model->count_cart_items();
			$data['submenu']=$this->home_model->submenu();
			$this->load->view('header',$data);
			$this->load->view('myaccount',$data);
			$this->load->view('footer',$data);
		}
		function editacountdetails($id="")
		{
			$data['base'] = $this->base;
			$data['css']=$this->css;
			$data['menu'] = "myaccount";
			$data['userdata']=$userdata=$this->myacount_model->user_acount_details($id);
			$data['cart_count']=$this->home_model->count_cart_items();
			$data['submenu']=$this->home_model->submenu();
			$data['id']=$id;
			$data['message']="";
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('oldpassword','Oldpassword','required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('newpassword','New Password','required|min_length[5]|max_length[12]|matches[confirmpassword]');
			$this->form_validation->set_rules('confirmpassword','Password Confirmation','required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('securityanswer','Security Answer','required');
			if($this->form_validation->run() ==TRUE )
			{
				foreach($userdata as $userdata1)
				{
					if($userdata1['password']==base64_encode($this->input->post('oldpassword')))
						{
							$tablename="member";
							$update_data['email']=$this->input->post('email');
							$update_data['password']=base64_encode($this->input->post('newpassword'));
							$update_data['securityquest']=$this->input->post('securityquest');
							$update_data['securityanswer']=$this->input->post('securityanswer');
							$msg=$this->myacount_model->update($tablename,$update_data,$id);
							if($msg==TRUE)
							{
								//$data['message']="Updation Success";
								redirect($this->base.'index.php/myaccount_controller/account_details/'.$id,'refresh');
								//$data['msg']="";
							}
							else
							{
								$data['message']="Updation Failure";
							}
						}
				}
			}
			$this->load->view('header',$data);
			$this->load->view('edit_myaccount',$data);
			$this->load->view('footer',$data);
		}
		function edit_personal_info($id)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['menu'] = "myaccount";
			$data['userdata']=$this->myacount_model->user_acount_details($id);
			$data['cart_count']=$this->home_model->count_cart_items();
			$data['submenu']=$this->home_model->submenu();
			$data['id']=$id;
			$data['msg']="";
			$this->form_validation->set_rules('firstname','First Name','required');
			$this->form_validation->set_rules('lastname','Last Name','required');
			$this->form_validation->set_rules('phone','Phone Number','required|numeric|min_length[6]|max_length[16]');
			$this->form_validation->set_rules('mobile','Mobile Number','required|min_length[5]|numeric|max_length[12]');
			$this->form_validation->set_rules('email','Email Address','required|valid_email');
			
			if($this->form_validation->run()==TRUE)
			{
				$tablename="member";
				$update_data['firstname'] = $this->input->post('firstname');
				$update_data['lastname'] = $this->input->post('lastname');
				$update_data['phone'] = $this->input->post('phone');
				$update_data['mobile'] = $this->input->post('mobile');
				$update_data['email'] = $this->input->post('email');
				$msg = $this->myacount_model->update($tablename,$update_data,$id);
				if($msg==TRUE)
				{
					//$data['msg']="updation success";
					redirect($this->base.'index.php/myaccount_controller/account_details/'.$id,'refresh');
					//$data['msg']="";
				}
				else
				{
					$data['msg'] = "updation Failure";
				}
			}
			
			$this->load->view('header',$data);
			$this->load->view('edit_personal_info',$data);
			$this->load->view('footer',$data);
		}
		function edit_pharmacy_store($memid,$id=0,$btn="")
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['menu'] = "myaccount";
			
				$this->load->model('home_model');
				$data['memid']=$this->session->userdata('memberid');
					
					$data['id']=$id;		
					$data['pharmacy']=$this->home_model->pharmacy();
					$data['pharmacydetails']=$this->home_model->getpharmacy($id);
					//$data['phardetails']=$this->home_model->getphar($id);
					$data['cart_count']=$this->home_model->count_cart_items();
					$data['submenu']=$this->home_model->submenu();
					if($this->input->post('submit')=="Submit")
					{
						$insert['currentpharmacy']=trim($this->input->post('phar'));
						$where['memberid']=intval($data['memid']);
						$where['pharmacyid']=intval($id);//currentpharmacy  prescription
						//print_r($insert);
						$btn="edt";
						
						$this->db->where($where); 
						$data['store']=$this->db->update('prescription',$insert); 
						redirect($this->base.'index.php/myaccount_controller/edit_pharmacy_store/'.$data['memid'],'refresh');
					}
					
			$this->load->view('header',$data);
			$this->load->view('edit_pharmacy_store',$data);
			$this->load->view('footer',$data);
		}
		function edit_email_communication($id)
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['menu'] = "myaccount";
			$data['id']=$id;
			$data['userdata']= $this->myacount_model->user_acount_details($id);
			$data['cart_count']=$this->home_model->count_cart_items();
			$data['submenu']=$this->home_model->submenu();
			$tablename="member";
			$data['msg']="";
			$this->form_validation->set_rules('name','Name Of the member','required');
			$this->form_validation->set_rules('email','Email Of the member','required');
			$this->form_validation->set_rules('radio2','Email subscription Of the member','required');
			$update_data['firstname']=$this->input->post('name');
			$update_data['email']=$this->input->post('email');
			$update_data['subscribed']=$this->input->post('radio2');
			if($this->form_validation->run()==TRUE)
			{
			$message=$this->myacount_model->update($tablename,$update_data,$id);
			if($message==TRUE)
			{
				//$data['msg']="Updation Success";
				redirect($this->base.'index.php/myaccount_controller/account_details/'.$id,'refresh');
				//$data['msg']="";
			}
			else
			{
				$data['msg']="Updation Failure";
			}
			}
			$this->load->view('header',$data);
			$this->load->view('edit_email_communication',$data);
			$this->load->view('footer',$data);
		}
		function edit_shipping_information()
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['menu'] = "myaccount";
			$data['cart_count']=$this->home_model->count_cart_items();
			$data['submenu']=$this->home_model->submenu();
			$this->load->view('header',$data);
			$this->load->view('edit_shipping_information',$data);
			$this->load->view('footer',$data);
		}
		function edit_billing_information()
		{
			$data['base'] = $this->base;
			$data['css'] = $this->css;
			$data['menu'] = "myaccount";
			$data['memid']=$this->session->userdata('memberid');
			$data['cart_count']=$this->home_model->count_cart_items();
			$data['submenu']=$this->home_model->submenu();
			$this->load->view('header',$data);
			$this->load->view('edit_billing',$data);
			$this->load->view('footer',$data);
		}
	}
?>
