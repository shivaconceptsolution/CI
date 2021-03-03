<?php

class Operation extends CI_Controller
{

       function index()
       {

                 $this->load->view('opeview');

       }
      
       function opelogic()
       {
              
              $num1 = $this->input->post('txtnum1');
              $num2 = $this->input->post('txtnum2');
              if($this->input->post('btnadd'))
              {

                 $num= $num1+$num2;
              }
             
              else if($this->input->post('btnsub'))
              {

                   $num= $num1-$num2;
              }
              else if($this->input->post('btnmulti'))
              {

                   $num= $num1*$num2;
              }
              else if($this->input->post('btndiv'))
              {
                     $num= $num1/$num2;
              }
             $this->load->view('opeview',array("key"=>$num,"num1"=>$num1,"num2"=>$num2));
       }

}






?>