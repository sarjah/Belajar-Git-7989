<?php
	class Age 
	{
		public $age;
		//fungsi constructor
		public function setage($age){
			$this->age = $age;
			
		}
	
		public function hitungAge($age)
		{
			$bday = new DateTime($age);
			$today = new DateTime();
			
			$diff = $today->diff($bday);
			return $diff;
		}
	}

?>