<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends MY_Model {
	protected $table = 'leads';

    // protected $table_id = 'id_lead';

    public function __construct() {
        parent::__construct();
    }
}
