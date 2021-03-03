<?php

class Prime extends CI_Controller
{
      function index()
      {
         $num=9;
         $res='';
         for($i=2;$i<$num;$i++)
         {
             if($num%$i==0)
             {
                $res='NOT Prime';
                break;
             }

         }  

         if($num==$i)
         {
         	$res = "Prime";
         }

      $this->load->view('primeview',array("num"=>$num,"output"=>$res));

      }


}




?>