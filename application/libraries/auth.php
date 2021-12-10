<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// based on https://codeigniter.com/userguide3/general/creating_libraries.html
class Auth {
    const SESSION_KEY = 'user_id';
    public function __construct($kemana=null)
    {
		if(is_null($kemana)) return;
        $CI =& get_instance();
        if ($CI->session->has_userdata(self::SESSION_KEY)) {
			$user_id = $CI->session->userdata(self::SESSION_KEY);
			$query = $CI->db->get_where("user", ['id' => $user_id]);
			$user=$query->row();
			if($kemana==="/"){
				header("Location: /dashboard");
			}else if($kemana==="."){

			}
		}else{
			if(is_null($kemana)||empty($kemana)||$kemana==="/"||$kemana===".") {
				if($kemana!="/")
					$CI->session->set_flashdata('msg', 'Akses tidak di izinkan, silahkan login dulu.');
				header("Location: /login");
			}else{
				$CI->session->set_flashdata('msg', 'Akses tidak di izinkan, silahkan login dulu.');
				header("Location: /login?ref=".$kemana);
			}
		}
    }
	public function me(){
		$CI =& get_instance();
        if ($CI->session->has_userdata(self::SESSION_KEY)) {
			$user_id = $CI->session->userdata(self::SESSION_KEY);
			$query = $CI->db->get_where("user", ['id' => $user_id]);
			$row=$query->row();
			return $row;
		}else{
			return null;
		}
	}
}