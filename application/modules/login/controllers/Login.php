<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	const SESSION_KEY = 'user_id';
	public function index()
	{
		if ($this->session->has_userdata(self::SESSION_KEY)) {
			$user_id = $this->session->userdata(self::SESSION_KEY);
			$query = $this->db->get_where("user", ['id' => $user_id]);
			$data["me"]= $query->row();
			header("Location: /dashboard");
			
		}else{
			$data["ref"]=$this->input->get('ref', TRUE);//parse_str($_SERVER['QUERY_STRING'], $_GET);
			$this->load->view('login',$data);
		}
	}
	public function dologin(){
		$input_email=$this->input->post('email');
		$input_passwd=$this->input->post('password');
		$url_ref=$this->input->post('ref');
		//print_r(["email"=>$input_email,"passwd"=>$input_passwd]);
		$this->db->where("email", $input_email);
        $this->db->where("password", md5($input_passwd));
        $user=$this->db->get("user")->row();
		//print_r($user);
		//exit;
        if($user){
			$this->session->set_userdata([self::SESSION_KEY => $user->id]);
			//echo "berhasil. halo ".$user->nama;
			if(is_null($url_ref)||empty($url_ref)){
				header("Location: /dashboard");
			} else {
				header("Location: /".$url_ref);
			}
			//print_r($this->input->get('ref', TRUE));
			//header("Location: /dashboard");

		}else{
			$this->session->set_flashdata('msg', 'Email atau Password kamu salah');
			header("Location: /login");
		}
	}
}
