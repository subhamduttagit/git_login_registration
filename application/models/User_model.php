<?php
class User_model extends CI_model{
 
 
 
public function register_user($user){
 
 
$this->db->insert('user', $user);
 
}
 
public function login_user($email,$pass){
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);
 
  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
 
 
}
public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}

public function show_user(){
	$query = $this->db->get('user');
	$query_result = $query->result();
	return $query_result;
}

public function show_user_id($data){
	$this->db->select('*');
$this->db->from('user');
$this->db->where('user_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
	}
	
public function update_user_id1($id,$data){
	$this->db->where('user_id', $id);
$this->db->update('user', $data);
}
 
 
}
 
 
?>