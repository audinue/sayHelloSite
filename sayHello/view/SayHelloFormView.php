<?php

require_once 'sayHello/action/SayHelloAction.php';

class SayHelloFormView {

	var $sayHelloAction;

	function __construct() {
		$this->sayHelloAction = new SayHelloAction();
	}

	function render() {
?>
<form method="get" action="<?= $this->sayHelloAction ?>">
	<p>Please enter your name: <input name="name" type="text"></p>
	<p><input value="Continue" type="submit"></p>
</form>
<?php
	}
}
