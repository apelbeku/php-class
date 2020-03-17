<?php 
	
	class One {

		public $meja;
		public $kursi;

		protected function set_meja($table) {
			$this->meja = $table;
		}

		function get_meja() {
			return $this->meja;
		}
	}

	class Two extends One {

		public $book;

		function __construct($buku) {
			$this->book = $buku;
		}

		function get_book() {
			return $this->book;
		}

		function hasil() {
			$this->set_meja('book');
		}
	}

	$table = new Two('cup');
	$table->hasil();
	
	echo $table->meja;
 ?>