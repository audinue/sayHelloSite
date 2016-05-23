<?php

require_once 'sayHello/controller/SayHelloIndexController.php';
require_once 'sayHello/controller/SayHelloController.php';

class SayHelloComponent {

	function register($dispatcher) {
		$dispatcher->register(new SayHelloIndexController());
		$dispatcher->register(new SayHelloController());
	}
}
