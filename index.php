<?php
require_once 'src/viewhandler.php';

$a=new Petitemplate\ViewHandler('grandchild','templates','Templates');
$a->assign('user',array('name'=>'Big Bob','loggedin'=>true))
->display();