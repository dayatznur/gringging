<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_proccess extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// construct
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_proccess_m');
	}

	public function index()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
	
		$data = array(
			'username' => $username,
			'password' => $password
		);

		$query = $this->admin_proccess_m->getUserSelected($data);

		if($query->num_rows() > 0){

			$arrSession = array(
				'username' => $username,
				'password' => $password
			);
			$this->session->set_userdata($arrSession);
			$this->session->set_flashdata('success' ,'<strong>Welcome back boss!</strong> Semangat tetap dalam jiwa.');

			redirect("admin_dashboard");

		}else{

			$this->session->set_flashdata('error' ,'Incorrect, please try again!');
			
			redirect("backendpanel");

		}
	}

	// logout
	function logout(){

		$arrSession = array('username', 'password');
		$this->session->unset_userdata($arrSession);
		$this->session->set_flashdata('error', 'See you again.');

		redirect('backendpanel');
	}
}
