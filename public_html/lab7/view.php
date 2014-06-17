<?php

class View {
	function __construct($page, $data) {
		$this->page = $page;
		$this->data = $data;
	}
	
	function render() {
		ob_start();
		include $this->page . '.php';
		$content = ob_get_clean();
		include 'layout.php';
	}
}

?>