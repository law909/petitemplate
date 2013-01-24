<?php
namespace Templates;

require_once 'src/base.php';

class parentTemplate extends \Petitemplate\baseTemplate {

	public function __construct() {
		parent::__construct();

		$this->addBlock(self::BaseBlock,function($that,$data) {?>
			<!DOCTYPE html>
			<html>
				<body>
					<div>Inheritance demo: I am the parentTemplate. This text comes from <?php $that->runBlock('child');?>.</div>
					<?php $that->runBlock('childdata');?>
				</body>
			</html>
		<?php });
	}
}