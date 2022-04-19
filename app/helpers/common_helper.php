<?php 

// credits kay sir red
if ( ! function_exists('set_flash_alert'))
{
	function set_flash_alert($alert, $message) {
		$LAVA =& lava_instance();
		$LAVA->session->set_flashdata(array('alert' => $alert, 'message' => $message));
	}
}

if ( ! function_exists('flash_alert'))
{
	function flash_alert()
	{
		$LAVA =& lava_instance();
		if($LAVA->session->flashdata('alert') !== NULL) {
			echo '
			<div class="alert alert-'.$LAVA->session->flashdata('alert') . ' alert-dismissible fade show" role="alert">
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				'. $LAVA->session->flashdata('message') . '
		  	</div>';
		}
	}
}

if ( ! function_exists('is_logged_in'))
{
	//check if user is logged in
	function is_logged_in() {
		$LAVA =& lava_instance();
		if($LAVA->session->userdata('logged_in') == 1)
			return true;
	}
}

/**
 *  // To use in controller constructor or specific function:
 *  if(!user_controller_access(get_class()))
 *		redirect(BASE_URL);
 */

if ( ! function_exists('user_controller_access'))
{
	function user_controller_access($controller_class)
	{
		$LAVA =& lava_instance();
		$LAVA->db = new Model();
		$user_controllers = $LAVA->db->fetchRow('select controllers from user_controller_access where user_role=:user',array(':user'=>$_SESSION['user_role']))->controllers;
		/**
		 * database table
		 * Table: user_controller_access
		 * uca_id (pk)
		 * controllers ('profile,student')
		 * user_role ('student')
		 */
		$data=[];
		foreach(explode(',', $user_controllers) as $controller)
		{
			array_push($data,$controller);
		}
		if(in_array($controller_class, $data))
			return true;
		else
			return false;
	}
}



?>