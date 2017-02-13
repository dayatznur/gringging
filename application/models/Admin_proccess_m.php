<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Admin_proccess_m extends CI_Model{

	// get user selected
	function getUserSelected($data){

		$this->db->where($data);
		$query = $this->db->get('user');

		return $query;
	}
}
?>_