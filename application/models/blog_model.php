<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all()
    {
        return $this ->db ->get('t_blog')->result();
    }

    public function get_by_page($page)
    {
        $this ->db ->select('*');
        $this ->db ->from('t_blog blog');
        $this ->db ->join('t_admin admin','admin.admin_id=blog.author');
        $this ->db ->limit(6,$page);
        return $this ->db ->get() ->result();
    }
    public function get_total_count()
    {
        return $this->db ->count_all('t_blog');
    }
    public function get_by_id($blog_id)
    {
        $data = array(
            'blog_id'=>$blog_id
        );
        return $this ->db ->get_where('t_blog',$data)->row();
    }

}
