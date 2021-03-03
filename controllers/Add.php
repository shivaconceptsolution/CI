<?php

class Add extends CI_Controller
{

    function index()
    {
    	$a=100;
    	$b=200;
    	$c=$a+$b;
    	$this->load->view('additionview',array("key"=>$c));
    }

}


?>