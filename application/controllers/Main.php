<?php
class Main extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("user");
	}
	function login(){
		$this->load->view("commons/login");
	}
	function loginhandler(){
		$params = $this->input->post();
		$user = checklogin($params["email"],$params["password"]);
		if(!$user){
			echo "Cannot Login";
		}else{
			echo "Login success ".$user->name;
			
			redirect(baseurl()."students");
		}
		//redirect(baseurl()."students");
	}
	function logout(){
		gologout();
	}
	function myprofile(){
		$data["user"] = getprofile($this->session->userdata["userid"]);
		$this->load->view("commons/myprofile",$data);
	}
	function test(){
		echo sha1("test");
		listuser();
	}
	function test2(){
		createuser("pompom","pom@padi.net.id","kue");
	}
	function test3(){
		login("pom@padi.net.id","minum");
	}
	function test4(){
		changepassword("pom@padi.net.id","minum");
	}
	function upload(){
		$uploaddir = './media/'; 
		$file = $uploaddir . basename($_FILES['uploadfile']['name']); 
		 
		if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
			echo "success"; 
		} else {
			echo "error";
		}		
	}
}
