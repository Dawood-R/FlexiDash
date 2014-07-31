<?php
class Users extends MX_Controller 
{

function __construct() {
parent::__construct();
}

public function submit()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|xss_clean');
		$this->form_validation->set_rules('pword', 'Password', 'required|max_length[30]|xss_clean|callback_pword_check');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			echo "success"; die ();
		}
	}

	public function pword_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('pword_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
        

function login() {
    
    $data['view_file'] = "loginform";
    $this->load->module('template');
    
    
}
}

function get($order_by){
$this->load->model('mdl_users');
$query = $this->mdl_users->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_users');
$query = $this->mdl_users->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_users');
$query = $this->mdl_users->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_users');
$query = $this->mdl_users->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_users');
$this->mdl_users->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_users');
$this->mdl_users->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_users');
$this->mdl_users->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_users');
$count = $this->mdl_users->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_users');
$max_id = $this->mdl_users->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_users');
$query = $this->mdl_users->_custom_query($mysql_query);
return $query;
}

}

