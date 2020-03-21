<?php

	abstract class mie {
		abstract protected function mie_ayam($name);
	}

	class get extends mie {
		public $seri;
		public $name;

		function mie_ayam($name) {
			$this->name = $name;
		}
		function set_seri($seri) {
			$this->seri = $seri;
		}

		function get_seri() {
			return $this->seri;
		}
	}

	$nabil = new get();
	$nabil->mie_ayam('Mie ayam');
	echo $nabil->name;