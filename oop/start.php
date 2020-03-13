<?php 
	
	class human {

		public $name;
		public $gender;
		public $status;


		function __construct($nama) {
			$this->name = $nama;
		}

		function get_name() {
			return $this->name;
		}

		function set_gender($gender) {
			$this->gender = $gender;
		}

		function get_gender() {
			$this->gender;
		}

		function set_status($status) {
			$this->status = $status;
		}

		function get_status() {
			$this->status;
		}
	}



	$anggota = new human('syauqy');
	$body = new human('udin');
	$body->set_gender('men');
	$body->set_status('off');


	echo $anggota->get_name() ;
	echo "<br>";
	echo "udin " . "gender " . $body->gender;
	echo "<br>";
	echo $body->status;
 ?>