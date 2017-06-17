<?php
if (isset($_SESSION)) {
	session_start();
}
class UserModel extends Model{
		public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$pass = md5($post['pass']);

		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO users(user_name, user_email, user_pass) VALUES(:name, :email, :pass)');
			$this->bind(':name', $post['username']);
			$this->bind(':email', $post['email']);
			$this->bind(':pass', $pass);

			$this->execute();

			header('Location: '.ROOT_URL.'users/login');
		}
		return;
	}

	public function login() {
				// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$pass = md5($post['pass']);

		if($post['submit']){
			// Insert into MySQL
			$this->query('SELECT * FROM users WHERE user_email = :email AND user_pass = :pass');
			$this->bind(':email', $post['email']);
			$this->bind(':pass', $pass);

			$row = $this->single();
			var_dump($row);
			if ($row) {
				$_SESSION['data_login'] = [
				'username' => $row['user_name'],
				'email' => $row['user_email'],
				'date' => $row['date']
				];

				header('Location: '.ROOT_URL.'share');
			} else {
				echo "incroect login";
			}
		}
		return;
	}
}