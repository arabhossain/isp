<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_User_Role extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function getUserRoles()
	{
		$this->db->where('isActive', '1');
		$query=$this->db->get('user_roles');
    	return $query->result();
	}

	public function getPages()
	{
		
		$query=$this->db->query("SELECT `pageId`, `pageName`, ('0') AS is_active FROM `pages`");
    	return $query->result();
	}

	public function getPermissions($roleId)
	{
		$query=$this->db->query('SELECT permissions.upId, (SELECT pages.pageName FROM pages WHERE permissions.pageId=pages.pageId) AS pageName, permissions.is_active AS is_active FROM `permissions` INNER JOIN user_roles ON user_roles.roleId=userRoleId WHERE userRoleId='.$roleId);
    	return $query->result();
	}

	public function saveRole($data=array()){

		$this->db->insert('user_roles',array(
       									 'roleName' => $data[0]['roleName']
       									)
						); ;
  		$insert_id = $this->db->insert_id();

  		$roles=$data[1];
  		for($i=0; $i<count($roles); $i++){
  			$batch[]= array(
  				'pageId'	=>	$roles[$i]['pageId'],
  				'userRoleId'=>	$insert_id,
  				'is_active'	=>	$roles[$i]['is_active']
  			);
  		}
  		return $this->db->insert_batch('permissions', $batch);  		
	}

	public function updateRole($data=array()){
		$set = array(
		        'roleName' => $data[0]['roleName']
		);

		$this->db->where('roleId', $data[0]['roleId']);
		$this->db->update('user_roles', $set);

  		$roles=$data[1];
  		for($i=0; $i<count($roles); $i++){
  			$batch[]= array(
  				'upId'	=>	$roles[$i]['upId'],
  				'is_active'	=>	$roles[$i]['is_active']
  			);
  		}
  		return $this->db->update_batch('permissions',$batch,'upId');	
	}

	public function deleteRole($roleId)
	{
		return $this->db->delete('permissions', array('userRoleId' => $roleId)) && $this->db->delete('user_roles', array('roleId' => $roleId)) ? 1 : 0 ;
	}

}

/* End of file Mod_User_Role.php */
/* Location: ./application/models/Mod_User_Role.php */
