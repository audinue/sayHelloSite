<?php

require_once 'sayHello/action/SayHelloIndexAction.php';
require_once 'sayHello/action/SayHelloAction.php';
require_once 'sayHello/view/SayHelloFormView.php';

class SayHelloIndexController {

	var $indexAction;
	var $sayHelloForm;

	function __construct() {
		$this->indexAction  = new SayHelloIndexAction();
		$this->sayHelloForm = new SayHelloFormView();
	}

	function handles($method, $uri) {
		return $this->indexAction->matches($method, $uri);
	}

	function handle() {
		$this->sayHelloForm->render();
	}
}
