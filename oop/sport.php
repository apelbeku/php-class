<?php 

	class Ball {

		public $foot;
		public $futsal;
		public $pingpong;

		function __construct($name) {
			$this->foot = $name;
		}

		function get_name() {
			return $this->foot;
		}

		function set_futsal($sepatu) {
			$this->futsal = $sepatu;
		}

		function get_futsal() {
			return $this->futsal;
		}

		function set_pingpong($player) {
			$this->pingpong = $player;
		}

		function get_pingpong() {
			return $this->pingpong;
		}
	}

	$ukuran = new Ball('champions');
	$merek = new Ball('UEFA');


	$ukuran->set_futsal('nike');
	$ukuran->set_pingpong('udin');


	echo $ukuran->foot;
	echo "<br>";
	echo "sepatuku " . $ukuran->futsal;
	echo "<br>";
	echo "name: " . $ukuran->pingpong;
 ?>