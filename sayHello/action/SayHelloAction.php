<?php

class SayHelloAction {

	function matches($method, $uri) {
		return $method == 'GET' && preg_match('@^/sayHello\\?name=@', $uri) === 1;
	}

	function __toString() {
		return '/sayHello';
	}
}
