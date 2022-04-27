<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','model');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	}
	public function index()
	{
		error_reporting(0);
		$this->load->library('user_agent');
		if ($this->agent->is_browser())
		{
		$agent = $this->agent->browser().' '.$this->agent->version();
		}
		elseif ($this->agent->is_robot())
		{
		$agent = $this->agent->robot();
		}
		elseif ($this->agent->is_mobile())
		{
		$agent = $this->agent->mobile();
		}
		else
		{
		$agent = 'Unidentified User Agent';
		}
		$counter=array(
		'ip'=>$this->input->ip_address(),
		'agent'=>$agent,
		'plateform'=>$this->agent->platform()
		);
		$this->model->addCounter($counter);
		$data['gallery']=$this->model->getRecentGallery(6);
		$data['blog']=$this->model->recentBlogFinder(3);
		$this->load->view('home/header');
		$this->load->view('home/index',$data);
		$this->load->view('home/footer');
	}
	public function about()
	{
		$this->load->view('home/header');
		$this->load->view('home/about');
		$this->load->view('home/footer');
	}
	public function contact()
	{
		$this->load->view('home/header');
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function blog()
	{
		$data['blog']=$this->model->getBlog();
		$data['blog_category']=$this->model->getBlogCategory();
		$this->load->view('home/header');
		$this->load->view('home/blog',$data);
		$this->load->view('home/footer');
	}
	public function blog_category_wise($cat_id)
	{
		$data['blog_category']=$this->model->getBlogCategory();
		$data['blog']=$this->model->getBlogCategoryWise($cat_id);
		$this->load->view('home/header');
		$this->load->view('home/blog_category_wise',$data);
		$this->load->view('home/footer');
	}
	public function blog_single($id)
	{
		$data['blog']=$this->model->getBlog($id);
		$data['recent_blog']=$this->model->getRecentBlog();
		$this->load->view('home/header');
		$this->load->view('home/blog-single',$data);
		$this->load->view('home/footer');
	}
	public function mission()
	{
		$this->load->view('home/header');
		$this->load->view('home/mission');
		$this->load->view('home/footer');
	}
	public function service()
	{
		$data['services']=$this->model->getServices();
		$this->load->view('home/header');
		$this->load->view('home/service',$data);
		$this->load->view('home/footer');
	}
	public function faq()
	{
		$this->load->view('home/header');
		$this->load->view('home/faq');
		$this->load->view('home/footer');
	}
	public function donate()
	{
		$this->load->view('home/header');
		$this->load->view('home/donate');
		$this->load->view('home/footer');
	}
	public function volunteer()
	{
		$this->load->view('home/header');
		$this->load->view('home/volunteer');
		$this->load->view('home/footer');
	}
	public function team()
	{
		$data['users']=$this->model->getUsers();
		$this->load->view('home/header');
		$this->load->view('home/team',$data);
		$this->load->view('home/footer');
	}
	public function gallery()
	{
		$data['gallery']=$this->model->getGallery();
		$this->load->view('home/header');
		$this->load->view('home/gallery',$data);
		$this->load->view('home/footer');
	}
	public function certificate()
	{
		$this->load->view('home/header');
		$this->load->view('home/certificate');
		$this->load->view('home/footer');
	}
	//16 July, 2021
	public function getRecentBlogInFooter()
	{
		echo $this->model->getRecentBlogInFooter();
	}
	public function collectInfo()
	{
	$name=$this->input->post('name');
	$email=$this->input->post('email');
	}
	public function video()
	{
		$data['video']=$this->model->getVideo();
		$this->load->view('home/header');
		$this->load->view('home/video',$data);
		$this->load->view('home/footer');
	}
	public function service_info($id)
	{
		$data['service']=$this->model->getServices($id);
		$this->load->view('home/header');
		$this->load->view('home/service_info',$data);
		$this->load->view('home/footer');
	}
	public function research_reports()
	{
		$data['report']=$this->model->getReport();
		$this->load->view('home/header');
		$this->load->view('home/research_reports',$data);
		$this->load->view('home/footer');
	}	
	public function research_info($id)
	{
		$data['report']=$this->model->getReport($id);
		$this->load->view('home/header');
		$this->load->view('home/research_info',$data);
		$this->load->view('home/footer');
	}
	public function register()
	{
		$data['country']=$this->model->getCountry();
		$this->load->view('home/header');
		$this->load->view('home/register',$data);
		$this->load->view('home/footer');
	}
	public function registerUser()
	{
		$config=[
		 	'upload_path'=>'./uploads/',
		 	'allowed_types'=>'jpg|png|pdf|jpeg'
		 ];
		 $this->load->library('upload',$config);
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('mobno', 'Mobile Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]');
		$this->form_validation->set_rules('country_id', 'Country', 'required');
		$this->form_validation->set_rules('state_id', 'State', 'required');
		$this->form_validation->set_rules('district_id', 'District', 'required');
		//$this->form_validation->set_rules('tehsil_id', 'Tehsil', 'required');
		//$this->form_validation->set_rules('block_id', 'Block', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		if($this->form_validation->run())
		{
		$name=$this->input->post('name');
		$mobno=$this->input->post('mobno');
		$email=$this->input->post('email');
		$country_id=$this->input->post('country_id');
		$state_id=$this->input->post('state_id');
		$district_id=$this->input->post('district_id');
		$tehsil=$this->input->post('tehsil');
		if(empty($tehsil)):
		$tehsil='';
		endif;
		$block_id=$this->input->post('block_id');
		if(empty($block_id)):
			$block_id='';
		endif;
		$ward=$this->input->post('ward');
		if(empty($ward)):
			$ward='';
		endif;
		$address=$this->input->post('address');
		$user_type=$this->input->post('user_type');
		if($this->upload->do_upload('resume'))
		{
		$img=$this->upload->data();
		$resume="uploads/".$img['raw_name'].$img['file_ext'];
		}
		else
		{
		$resume='';
		}
		$data=array(
			'name'=>$name,
			'mobno'=>$mobno,
			'email'=>$email,
			'country_id'=>$country_id,
			'state_id'=>$state_id,
			'district_id'=>$district_id,
			'tehsil'=>$tehsil,
			'block_id'=>$block_id,
			'ward'=>$ward,	
			'address'=>$address,
			'resume'=>$resume,
			'user_type'=>$user_type
		);
		if($this->model->registerUser($data)):
			$this->session->set_flashdata('msg', "Register successfully.");
  			return redirect(base_url().'home/register');
		else:
			$this->session->set_flashdata('msg', "Something went wrong.");
  			return redirect(base_url().'home/register');
		endif;
		}
		else
		{
			$this->register();
		}
	}
	public function privacy_policy()
	{
		$this->load->view('home/header');
		$this->load->view('home/privacy_policy');
		$this->load->view('home/footer');
	}
	public function terms_and_condition()
	{
		$this->load->view('home/header');
		$this->load->view('home/terms_and_condition');
		$this->load->view('home/footer');
	}
	public function refund_policy()
	{
		$this->load->view('home/header');
		$this->load->view('home/refund_policy');
		$this->load->view('home/footer');
	}
	public function team_info($id)
	{
		$data['users']=$this->model->getUsers($id);
		$this->load->view('home/header');
		$this->load->view('home/team_info',$data);
		$this->load->view('home/footer');
	}
	public function getCountnumber()
	{
		echo $this->model->getCountnumber();
	}
	public function social_issue()
	{
	$data['social_issue']=$this->model->socialIssue();
	$this->load->view('home/header');
	$this->load->view('home/social_issue',$data);
	$this->load->view('home/footer');
	}
	public function submitSocialProblem()
	{
		$config=[
		 	'upload_path'=>'./uploads/',
		 	'allowed_types'=>'jpg|png|pdf|jpeg'
		 ];
		 $this->load->library('upload',$config);
		 $this->upload->do_upload('photo');
		$img=$this->upload->data();
		$photo="uploads/".$img['raw_name'].$img['file_ext'];
		$name=$this->input->post('name');
		$mobno=$this->input->post('mobno');
		$address=$this->input->post('address');
		$problem_type=$this->input->post('problem_type');
		$info=$this->input->post('info');
		$data=array(
			'name'=>$name,
			'mobno'=>$mobno,
			'address'=>$address,
			'problem_type'=>$problem_type,
			'info'=>$info,
			'photo'=>$photo
		);
		if($this->model->submitSocialProblem($data)):
			$this->session->set_flashdata('msg', "Thank you for share your problem with us.We will response you soon.");
  			return redirect(base_url().'social-issue');
		else:
			$this->session->set_flashdata('msg', "Something went wrong.");
  			return redirect(base_url().'social-issue');
		endif;
	}
	public function social_issue_info($id)
	{
		$data['social_issue']=$this->model->socialIssue($id);
		$this->load->view('home/header');
		$this->load->view('home/social_issue_info',$data);
		$this->load->view('home/footer');
	}
	//24 Aug, 2021
	public function member()
	{
		$data['users']=$this->model->getMembers();
		$this->load->view('home/header');
		$this->load->view('home/members',$data);
		$this->load->view('home/footer');
	}
	public function member_info($id)
	{
		$data['members']=$this->model->getMembers($id);
		$this->load->view('home/header');
		$this->load->view('home/member_info',$data);
		$this->load->view('home/footer');
	}
		
}
