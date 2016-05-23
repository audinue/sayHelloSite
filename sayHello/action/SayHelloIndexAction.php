<?php

class SayHelloIndexAction {

	function matches($method, $uri) {
		return $method == 'GET' && $uri == '/';
	}

	function __toString() {
		return '/';
	}
}
