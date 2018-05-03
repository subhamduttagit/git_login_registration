<?php
class update_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('user_model');
}
function show_user_id() {
$id = $this->uri->segment(3);
$data['user'] = $this->user_model->show_user();
$data['single_user'] = $this->user_model->show_user_id($id);
$this->load->view('admin_dashboard', $data);
}
function update_user_id1() {
$id= $this->input->post('uid');
$data = array(
'role_id' => $this->input->post('rid'),
'user_name' => $this->input->post('uname'),
'user_email' => $this->input->post('uemail'),
'user_age' => $this->input->post('uage')
);
$this->user_model->update_user_id1($id,$data);
$this->show_user_id();
}
}
?>