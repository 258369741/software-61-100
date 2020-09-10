<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        echo "Constructor"."</br>";
    }

	public function index()
	{
		echo "Report Index";
    }

    public function _hello()
	{
		echo "</br>"."Hello world";
    }
    public function showname($name="milk",$lastname="thx")
	{
        echo "My name is ".$name." ".$lastname;
        $this->_hello();
    }
    public function showview()
	{
		$this->load->view("hello_view");
	}
    
}
