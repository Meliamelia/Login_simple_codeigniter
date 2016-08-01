<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->helper('security');
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->view('login_view');
  }

}

?>