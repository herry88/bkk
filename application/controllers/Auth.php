<?php
/**
 *Author Herry Prasetyo
 *2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{

  // function __construct(argument)
  // {
  //   // code...
  // }

  function index(){
    $data = array(
        'title'=>'halaman administrator'
    );
    // $this->load->view('View_aku');
    $this->load->view('Admin/login',$data);

  }

  function page(){
    $this->load->view('Admin/page');
  }


}
