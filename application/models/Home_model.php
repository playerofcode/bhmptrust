<?php 
class Home_model extends CI_model{

		
		public function getGallery($id='')
		{
			if($id)
			{
				return $this->db->get_where('gallery',array('id'=>$id))->result();
			}
			else
			{
				$this->db->order_by('id','DESC');
				return $this->db->get('gallery')->result();
			}
		}
		public function getBlog($id='')
		{
			if($id)
			{
				return $this->db->get_where('blog',array('id'=>$id))->result();
			}
			else
			{
				$this->db->order_by('id','DESC');
				return $this->db->get('blog')->result();
			}
		}
		public function getRecentBlog()
		{
			$this->db->order_by('id','desc');
			$this->db->limit(2);
			return $this->db->get('blog')->result();
		}
		public function getRecentBlogInFooter()
		{
			$this->db->order_by('id','desc');
			$this->db->limit(5);
			$res=$this->db->get('blog')->result();
			$output='';
			foreach($res as $key):
				$output.='<li><div class="posts-thumb float-left"><a href="'.base_url('blog-single/'.$key->id).'"><div class="xs-black-overlay bg-red"></div></a></div><div class="post-info"><h4 class="entry-title" style="float:left;"><a href="'. base_url('blog-single/'.$key->id).'">'.$key->title.'</a></h4></div><div class="clearfix"></div></li>';
			endforeach;
			return $output;
		}
		public function getTeamMember()
		{
			$this->db->order_by('id','desc');
			return $this->db->get('team')->result();
		}
		public function getVideo()
		{
			$this->db->order_by('id','desc');
			return $this->db->get('video')->result();
		}
		public function getServices($id='')
		{
			if($id):
			return $this->db->get_where('services',array('id'=>$id))->result();
			else:
			$this->db->order_by('id','desc');
			return $this->db->get('services')->result();
			endif;
		}
		public function getReport($id='')
		{
			if($id):
			return $this->db->get_where('report',array('id'=>$id))->result();
			else:
			$this->db->order_by('id','desc');
			return $this->db->get('report')->result();
			endif;
		}
		public function getTeamCategory()
		{
			$this->db->order_by('team_id','desc');
			return $this->db->get('team_category')->result();
		}
		public function registerUser($data)
		{
			return $this->db->insert('users',$data);
		}
		public function getCountry()
		{
			$this->db->order_by('country_id','desc');
			return $this->db->get('country')->result();
		}
		//23 July, 2021
		public function getCountryNameByID($country_id)
		{
			return $this->db->get_where('country',array('country_id'=>$country_id))->row()->country_name;
		}
		public function getStateNameByID($state_id)
		{
			return $this->db->get_where('state',array('state_id'=>$state_id))->row()->state_name;
		}
		public function getDistrictNameByID($district_id)
		{
			return $this->db->get_where('district',array('district_id'=>$district_id))->row()->district_name;
		}
		public function getTehsilNameByID($tehsil_id)
		{
			return $this->db->get_where('tehsil',array('tehsil_id'=>$tehsil_id))->row()->tehsil_name;
		}
		public function getBlockNameByID($block_id)
		{
			return $this->db->get_where('block',array('block_id'=>$block_id))->row()->block_name;
		}
		public function getEBCategoryNameByID($eb_cid='')
		{
			if($eb_cid):
				return $this->db->get_where('executive_body_category',array('eb_cid'=>$eb_cid))->row()->eb_cname;
			else:
				$msg="Not assigned";
				return $msg;
			endif;
		}
		public function getEBSubCategoryNameByID($eb_scid='')
		{
			if($eb_scid):
				return $this->db->get_where('executive_body_sub_category',array('eb_scid'=>$eb_scid))->row()->eb_scname;
			else:
				$msg="Not assigned";
				return $msg;
			endif;
		}
		public function getEBDesignationNameByID($eb_did='')
		{
			if($eb_did):
				return $this->db->get_where('eb_designation',array('eb_did'=>$eb_did))->row()->eb_dname;
			else:
				$msg="Not assigned";
				return $msg;
			endif;
		}
		public function getEBCellNameByID($eb_cell_id='')
		{
			if($eb_cell_id):
				return $this->db->get_where('eb_cell',array('id'=>$eb_cell_id))->row()->cell_name;
			else:
				$msg="Not assigned";
				return $msg;
			endif;
		}
		public function getUsers($id='')
		{
			if($id):
			$res=$this->db->get_where('users',array('id'=>$id,'user_type'=>1,'status'=>'active'))->result();
			else:
			$res=$this->db->get_where('users',array('user_type'=>1,'status'=>'active'))->result();
				endif;
				$output=array(); 
			foreach($res as $key):
			$output[]=array(
				'id'=>$key->id,
				'name'=>$key->name,
				'mobno'=>$key->mobno,
				'email'=>$key->email,
				'country'=>$this->getCountryNameByID($key->country_id),
				'state'=>$this->getStateNameByID($key->state_id),
				'district'=>$this->getDistrictNameByID($key->district_id),
				'tehsil'=>$key->tehsil_id,
				'block'=>$this->getBlockNameByID($key->block_id),
				'address'=>$key->address,
				'eb_category'=>$this->getEBCategoryNameByID($key->eb_cid),
				'eb_sub_category'=>$this->getEBSubCategoryNameByID($key->eb_scid),
				'eb_designation'=>$this->getEBDesignationNameByID($key->eb_did),
				'eb_cell'=>$this->getEBCellNameByID($key->eb_cell_id)
			);
			endforeach;
			return $output;
		}
		public function addCounter($counter)
		{
			return $this->db->insert('counter',$counter);
		}
		public function getCountnumber()
		{
			$real=$this->db->get('counter')->num_rows();
			$set=$real+100000;
			return $set;
		}
		public function submitSocialProblem($data)
		{
			return $this->db->insert('social_issues',$data);
		}
		public function socialIssue($id='')
		{
			if($id):
			return $this->db->get_where('social_issues',array('id'=>$id))->result();
			else:
			$this->db->order_by('id','desc');
			return $this->db->get('social_issues')->result();
			endif;
		}
		public function getBlogCategory($cat_id='')
		{
		    if($cat_id):
		        return $this->db->get_where('blog_category',array('cat_id'=>$cat_id))->result();
		        else:
		            $this->db->order_by('cat_id','desc');
		            return $this->db->get('blog_category')->result();
		            endif;
		}	
		public function getBlogCategoryWise($cat_id)
		{
			return $this->db->get_where('blog',array('cat_id'=>$cat_id))->result();
		}
		public function getMembers($id='')
		{
			if($id):
			$res=$this->db->get_where('users',array('id'=>$id,'user_type'=>2))->result();
			else:
			$res=$this->db->get_where('users',array('user_type'=>2))->result();
				endif;
				$output=array(); 
			foreach($res as $key):
			$output[]=array(
				'id'=>$key->id,
				'name'=>$key->name,
				'mobno'=>$key->mobno,
				'email'=>$key->email,
				'country'=>$this->getCountryNameByID($key->country_id),
				'state'=>$this->getStateNameByID($key->state_id),
				'district'=>$this->getDistrictNameByID($key->district_id),
				'tehsil'=>$key->tehsil_id,
				'block'=>@$this->getBlockNameByID($key->block_id),
				'address'=>$key->address,
				'created_at'=>$key->created_at
			);
			endforeach;
			return $output;
		}
		//10 Feb, 2022
		public function getRecentGallery($limit)
		{
			$this->db->order_by('id','desc');
			$this->db->limit($limit);
			return $this->db->get('gallery')->result();
		}
		public function recentBlogFinder($limit)
		{
			$this->db->order_by('id','desc');
			$this->db->limit($limit);
			return $this->db->get('blog')->result();
		}
}


?>