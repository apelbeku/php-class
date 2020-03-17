<?php 
	

	class Dulu {

		public $desa;

		protected function set_desa($dusun) {
			$this->desa = $dusun;
		}

		function get_desa() {
			return $this->desa;
		}
	}

	class Sekarang extends Dulu {

		public $rumah;

		function __construct($home) {
			$this->rumah = $home;
		}

		function get_rumah() {
			return $this->rumah;
		}

		function rumah() {
			$this->set_desa('mudik');
		}
	}


	$tumbuhan = new Sekarang('mewah');
	$tumbuhan->rumah('megah');
	$tumbuhan->rumah();

	echo $tumbuhan->desa;
 ?>