<?php 

	class Modif {

		public $mobil;
		public $motor;

		protected function set_mobil($car) {
			$this->mobil = $car;
		}

		function get_mobil() {
			return $this->mobil;
		}

		function __construct($nascar) {
			$this->motor = $nascar;
		}
	}

	class Update extends Modif {

		function get() {
			$this->set_mobil('mustang');
		}
	}


	$balap = new Update('masalah');
	$balap->get('Lamborghini');

	echo $balap->mobil;
 ?>