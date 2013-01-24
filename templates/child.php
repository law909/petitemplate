<?php
namespace Templates;

require_once 'parent.php';

class childTemplate extends parentTemplate {

	public function __construct() {
		parent::__construct();

		$this->addBlock('child',
			function($that) {?>This text comes from childTemplate, <?php $that->runBlock('grandchild'); });

		$this->addBlock('childdata',
			function($that,$data) { ?><div>Data demo: $user['name']=<?php echo $data->user['name'];?>.</div><?php });
	}
}