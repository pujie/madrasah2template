<?php
class Students extends CI_Controller{
  function __construct(){
    parent::__construct();
   $this->load->helper("user");
  }
  public function index(){
    $this->load->view("students/students");
  }
  public function profile(){
    $this->load->view("students/profile");
  }
  public function view(){
	  $this->load->view("students");
  }
}
