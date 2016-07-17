<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

    public function get_all()
    {
        return $this ->db ->get('t_comment')->result();
    }
    public function get_by_blog_id($blog_id)
    {
        $data = array(
            'blog_id'=>$blog_id
        );
        $this -> db -> order_by('add_time','desc');
        return $this ->db ->get_where('t_comment',$data)->result();
    }
    public function save($username,$email,$website,$subject,$blog_id)
    {
        $data = array(
            'username'=>$username,
            'email'=>$email,
            'website'=>$website,
            'subject'=>$subject,
            'blog_id'=>$blog_id
        );
        $this->db->insert('t_comment',$data);
    }


}
