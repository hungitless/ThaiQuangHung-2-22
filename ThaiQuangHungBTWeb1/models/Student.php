<?php 
include 'models/User.php';
	class Student extends User
	{
		public $gpa;
		public function __constructor($username, $password, $firstName, $lastName, $gpa)
		{
			parent::__constructor();
			$this->gpa = $gpa;			
		}
		public function getStudentName()
		{
			parent::getUsername();
		}
		public function getStudentFullName()
		{
			parent::getFullname();
		}
		public function getStudentGPA()
		{
			return $this->gpa;
		}
		public function rank()
		{
			if($this->gpa < 5)
			{
				return $temp = "Yeu";
			}
			if($this->gpa < 7 && $this->gpa >= 5)
			{
				return $temp = "Trung binh";
			}
			if(7 >= $this->gpa && $this->gpa < 8)
			{
				return $temp = "Kha";
			}
			if($this->gpa >= 8 )
			{
				return $temp = "Gioi";
			}

		}
	}
?>