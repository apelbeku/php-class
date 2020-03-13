<?php 
	
	class Tech {

		public $computer;
		public $smartphone;
		public $merek;


		function __construct($name) {
			$this->computer = $name;
		}

		function get_computer() {
			return $this->computer;
		}

		function set_smartphone($seri) {
			$this->smartphone = $seri;
		}

		function get_smartphone() {
			return $this->smartphone;
		}

		function set_merek($gadget) {
			$this->merek = $gadget;
		}

		function get_merek() {
			return $this->merek;
		}
	}

	$asus = new Tech('tuf');
	$realme = new Tech('c3');
	$realme->set_smartphone('c1');
	$realme->set_merek('oppo');

	echo $asus->get_computer();
	echo "<br>";
	echo "Realme " . $realme->get_smartphone();
	echo "<br>";
	echo "Logitech " . $realme->merek;
 ?>