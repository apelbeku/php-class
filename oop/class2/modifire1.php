<?php 

	class Three {

		public $nama;
		public $gender;
		
		protected function set_pb($name) {
			$this->nama = $name;
		}

		function get_pb() {
			return $this->nama;
		}

		function __construct($gender) {
			$this->gender = $gender;
		}

		function get_gender() {
			return $this->gender;
		}
	}

	class Mac extends Three {

		public $chara;

		function set_chara($chara) {
			$this->chara = $chara;
		}

		function get_chara() {
			return $this->chara;
		}

		function pic() {
			$this->set_pb('nana');
		}
	}

	$billa = new Mac('online');
	$billa->pic('tarantula');
	$billa->get_chara();

	echo $billa->nama;
 ?>