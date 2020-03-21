<?php

	trait Seri {
		public function nama_seri() {
			echo "apa serinya ";
		}
	}

	class set {
		static function set_nama() {
			echo "this is my adventure";
		}

		function dapat() {
			self::set_nama();
		}
	}

	class get {
		use Seri;

		public $seri;

		function set_seri($seri) {
			$this->seri = $seri;
		}

		function get_seri() {
			return $this->seri;
		}
	}

	$baga = new get();
	$baga->nama_seri();
	echo "<br>";
	$baga->set_seri('akm');
	set::dapat();
	echo "<br><br>";



	echo $baga->seri;
 ?>