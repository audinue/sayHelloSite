<?php

class ControllerDispatcher {

	var $controllers;
	
	function __construct() {
		$this->controllers = array();
	}

	function register($controller) {
		$this->controllers []= $controller;
	}
	
	function dispatch() {
		$method = $_SERVER['REQUEST_METHOD'];
		$uri    = $_SERVER['REQUEST_URI'];
		foreach($this->controllers as $controller) {
			if($controller->handles($method, $uri)) {
				$controller->handle();
				return;
			}
		}
		header('HTTP/1.1 404 Not Found');
		echo 'Not found.';
	}
}
