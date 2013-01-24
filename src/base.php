<?php
namespace Petitemplate;

class baseTemplate {

	const BaseBlock='base';

	protected $var;
	protected $blocks=array();

	public function __construct() {
		// just for inheritance consistency
	}

	public function setVar($templateVars) {
		$this->var=$templateVars;
	}

	public function addBlock($name,$value) {
		$this->blocks[$name]=$value;
	}

	public function runBlock($name) {
		if (array_key_exists($name,$this->blocks)) {
			$this->blocks[$name]($this,$this->var);
		}
	}

	public function display() {
		$this->runBlock(self::BaseBlock);
	}
}