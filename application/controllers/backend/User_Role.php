<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_Role extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mod_User_Role');
    }

    function index() {
    	$data['page_name']='user_role';
    	$data['page_title']='User Role';
    	$data['anguler_ctrl']='user_role';
		$this->load->view('backend/parts/header',$data);
        $this->load->view('backend/tamplate',$data);
    }

    function get_roles(){

	    $data=$this->Mod_User_Role->getUserRoles();
	    $this->output->set_header('Content-type: application/json');
	    $this->output->set_output(json_encode($data));
    }
    function get_pages(){

	    $data=$this->Mod_User_Role->getPages();
	    $this->output->set_header('Content-type: application/json');
	    $this->output->set_output(json_encode($data));
    }
     function get_permission($roleId){
        $data=$this->Mod_User_Role->getPermissions($roleId);
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($data));
    }

    function save_new_role(){
        $data = json_decode(file_get_contents('php://input'),true);
        $return =$this->Mod_User_Role->saveRole($data);
        var_dump(json_encode($return));
    }

     function update_role(){
        $data = json_decode(file_get_contents('php://input'),true);
        $return =$this->Mod_User_Role->updateRole($data);
        var_dump(json_encode($return));
    }
    function delete_role($roleId){
        $data=$this->Mod_User_Role->deleteRole($roleId);
        $this->output->set_header('Content-type: application/json');
        $this->output->set_output(json_encode($data));
    }

}

/* End of file User_Role.php */
/* Location: ./application/controllers/User_Role.php */