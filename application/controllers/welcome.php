<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('index');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function message(){
		$name = $this->input->post('username');
		$email = $this->input->post('email');
		$content = $this->input->post('content');
		if($name == ''||$email == ''||$content == ''){
			echo 'fail';
		}
		else{
			$this->load->model('message_model');
			$this->message_model->save($name,$email,$content);
			echo 'success';
		}
	}
	public function check_name(){
		$uname = $this -> input -> get('uname');
		$this->load->model('message_model');
		$row = $this->message_model->get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}
	}
	public function get_blogs(){
		$page = $this ->input ->get('page');
		$offset = ($page-1)*6;
		$this ->load ->model('blog_model');
		$blogs = $this ->blog_model ->get_by_page($offset);
		$totalCount = $this ->blog_model ->get_total_count();
		$res = array(
			'data' => $blogs,
			'isEnd' =>ceil($totalCount/6)==$page ?true :false
		);
		echo json_encode($res);
	}
	public function details(){
		$blog_id = $this ->input ->get('blog_id');
		$this ->load ->model('blog_model');
		$this ->load ->model('comment_model');
		$row =$this ->blog_model ->get_by_id($blog_id);
		$result =$this ->comment_model ->get_by_blog_id($blog_id);

		$data=array('row'=>$row ,'result'=>$result);

		$this ->load ->view ('single',$data);

	}
	public function write(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$subject = $this ->input ->post('subject');
		$blog_id = $this ->input ->post('blog_id');

		$this ->load ->model('comment_model');
		$this->comment_model->save($username,$email,$website,$subject,$blog_id);
		redirect('welcome/details?blog_id='.$blog_id);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
