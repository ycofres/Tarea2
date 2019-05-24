<?php
 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Main extends CI_Controller {
 
     public function index()
     {
        $this->load->view('inicio');
         
     }
     
     public function borrar($id=0)
     {
        core_persona::borrar($id);
        
        redirect('main/otra');
       
     }
 
     public function otra()
     {
        $this->load->view('inicio');
         
     }
     
     

 }
 
 /* End of file Main.php */
 



