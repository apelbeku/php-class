<?php 

	class Bang {

		public $father;
		public $mother;


		function set_father($name) {
			$this->father = $name;
		}

		function get_father() {
			return $this->father;
		}
	}

	class Walad extends Bang {

		public $soon;

		function __construct($name) {
			$this->soon = $name;
		}

		function get_soon() {
			return $this->soon;
		}
	}

	$bagi = new Walad('nabil');
	$bagi->set_father('ahmad');
	$bagi->get_father();

	echo $bagi->father;
 ?>