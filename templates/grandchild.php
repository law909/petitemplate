<?php
namespace Templates;

require_once 'child.php';

class grandchildTemplate extends childTemplate {

	public function __construct() {
		parent::__construct();

		$this->addBlock('grandchild',
			function() { ?>grandchild. It's simple<?php });
	}
}