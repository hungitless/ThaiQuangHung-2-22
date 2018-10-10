<?php
	class User
	{
		protected $username;
		protected $password;
		protected $firstName;
		protected $lastName;

		public function __construct($username, $password, $firstName, $lastName)
		{
			$this->username = $username;
			$this->password = password_hash($password,PASSWORD_DEFAULT);
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}

		public function getFullname()
		{
			return array($this->firstName,$this->lastName);
		}

		public function getUsername()
		{
			//return $this->$username;
			return $this->username;
		}
		// public function getA()
		// {
		// 	return $this->password;
		// }
		public function login($username, $password)
		{
			if($username == 'admin')
			{
				if($password == password_verify('12345',PASSWORD_DEFAULT))
				{
					return true;
				}
			}
			return false;
		}		
	}
 ?>