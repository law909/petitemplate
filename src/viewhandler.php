<?php
namespace Petitemplate;

require_once 'templatedata.php';

class ViewHandler {

	protected $viewDir;
	protected $viewNamespace;

	protected $viewName;
	protected $viewFile;
	protected $viewClass;
	protected $templateData;

	public function __construct($viewName,$viewDir='templates',$viewNamespace='Templates') {
		$this->templateData=new TemplateData();
		$this->viewDir=$viewDir;
		$this->viewName=$viewName;
		$this->viewNamespace=$viewNamespace;
		$this->viewFile=$this->viewDir.'/'.$this->viewName.'.php';
		$this->viewClass=$this->viewNamespace.'\\'.$this->viewName.'Template';
		return $this;
	}

	public function assign($var,$data) {
		$this->templateData->$var=$data;
		return $this;
	}

	public function display() {
		require_once $this->viewFile;
		$tpl=new $this->viewClass;
		if ($tpl) {
			$tpl->setVar($this->templateData);
			$tpl->display();
		}
	}
}