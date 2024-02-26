<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ion_loans_model extends CI_Model {
  
	  function __construct() 
	  {
		/* Call the Model constructor */
		parent::__construct();
	  }

	  	function insertPost($data){
			$this->db->insert('tb_post', $data);			
			$id = $this->db->insert_id();
			return (isset($id)) ? $id : FALSE;
		}

		function get_data($id){
		    $return[''] = '--- Please select client ---';
		    $query  = $this->ion_auth->users($id)->result();
		    foreach($query as $detail){
		        $return[$detail->id] = ucwords($detail->last_name.' '.$detail->first_name);
		    }
		    return $return;
		}

	  	function getloans(){
		 	$this->db->select('*');
			//$this->db->where('loan_status', $id);
			//$this->db->order_by('post_datetime', 'DESC');
			//$this->db->join('users', 'users_loans.user_id = users.id');
			//$this->db->join('loans', 'users_loans.loan_id = loans.id');
			//$this->db->join('status','users_loans.status.id = status.id');
			//$this->db->join('users', 'users_loans.loan_collector = users.id');
			$query = $this->db->get('users_loans');
			return $query;

	  	}
	


}
