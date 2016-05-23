<?php

require_once 'sayHello/action/SayHelloAction.php';
require_once 'sayHello/model/SayHelloUserModel.php';
require_once 'sayHello/view/SayHelloView.php';

class SayHelloController {

	var $sayHelloAction;
	var $sayHelloView;

	function __construct() {
		$this->sayHelloAction = new SayHelloAction();
		$this->sayHelloView = new SayHelloView();
	}

	function handles($method, $uri) {
		return $this->sayHelloAction->matches($method, $uri);
	}

	function handle() {
		$user = new SayHelloUserModel();
		$user->setName($_GET['name']);
		$this->sayHelloView->setUserModel($user);
		$this->sayHelloView->render();
	}
}
