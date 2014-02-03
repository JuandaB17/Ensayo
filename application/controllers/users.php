<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
      $this->load->model('user');
	}

	public function index()
	{
		
		$data['lu'] = $this->user->listUsers();

		$this->load->view('users/index', $data);
	}

	public function add()
	{
        
        if ($_POST) 
        {
        
		    $this->user->addUser();
        }
        $this->load->view('users/add');
        
	}

	public function lst($ide_usuario)
	{
     
		$data['lu'] = $this->user->listUser($ide_usuario);

		$this->load->view('users/lst', $data);
	}


	public function upd($ide_usuario)
	{
       if ($_POST) 
        {
        
		    $this->user->updUser();
        }
		$data['lu'] = $this->user->listUser($ide_usuario);

		$this->load->view('users/upd', $data);
	}

	public function dlt($ide_usuario)
	{
        $this->user->dltUser($ide_usuario);
	}
}
