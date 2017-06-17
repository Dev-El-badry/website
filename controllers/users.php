<?php

class Users extends Controller{
	public function register() {
		$modelview = new UserModel();
		return $this->returnView($modelview->register(), true);
	}

	public function login() {
		$modelview = new UserModel();
		return $this->returnView($modelview->login(), true);
	}

	protected function logout(){
		/*unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);*/
		unset($_SESSION['user_data']);
		session_unset();
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}


}