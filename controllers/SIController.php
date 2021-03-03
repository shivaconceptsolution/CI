<?php

class SIController extends CI_Controller
{

          function index()
          {
                $this->load->view('siview');


          }
         function silogic()
         {
         	$p = $this->input->post('txtp');
         	$r = $this->input->post('txtr');
         	$t =$this->input->post('txtt');

         	$si = ($p*$r*$t);
         	$this->load->view('siview',array("res"=>$si,"p"=>$p,"r"=>$r,"t"=>$t));


         }



}





?>