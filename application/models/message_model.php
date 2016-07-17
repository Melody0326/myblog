<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {
    public  function save($name,$email,$content){
    $data = array(
        'username'=>$name,
        'email'=>$email,
        'content'=> $content
    );
        $this->db->insert('t_message',$data);
	}
	public function get_by_username($name){
		return $this -> db -> get_where('t_message', array(
			'username' => $name
			)) -> row();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */