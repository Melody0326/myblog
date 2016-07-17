<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    public function login()
    {
        $this->load->view('admin/login');
    }
    public function check_login()
    {   //1.接数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this ->input ->post('admin_pwd');


        //2.查数据
        $this->load->model('admin_model');
        $row = $this -> admin_model ->get_by_name_pwd($admin_name,$admin_pwd);

        //3.跳转
        if($row){
            $this -> load ->view ('admin/admin_index');
        }else{
            $this -> load ->view('admin/login');
        }
    }
    public function admin_mgr()
    {
        $this ->load ->model('admin_model');
        $result = $this -> admin_model ->get_all();

            $data = array(
                'admins' => $result
            );
            $this -> load ->view('admin/admin-mgr',$data);

    }
    public function blog_mgr()
    {
        $this ->load ->model('blog_model');
        $result = $this ->blog_model ->get_all();
        $data = array(
            'blogs'=>$result
        );
        $this -> load ->view('admin/blog-mgr',$data);
    }
    public function comment_mgr()
    {
        $this ->load ->model('comment_model');
        $result = $this ->comment_model ->get_all();
        $data = array(
            'comments'=>$result
        );
        $this ->load ->view('admin/comment-mgr',$data);
    }
    public function delete_admin()
    {
        $admin_id = $this ->input ->get('admin_id');
        $this ->load ->model('admin_model');
        $this ->admin_model ->delete($admin_id);
        redirect('admin/admin_mgr');
    }
    public function update_admin()
    {
        $admin_id = $this ->input ->post('admin_id');
        $this ->load ->model('admin_model');
        $row = $this ->admin_model->get_by_id($admin_id);
        $admin_name = $this ->input ->post('username');
        $admin_pwd = $this->input ->post('pwd');
        $this ->load ->view('admin/update_admin');


        $this ->admin_model->update($admin_id,$admin_name,$admin_pwd);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */