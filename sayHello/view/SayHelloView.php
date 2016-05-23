<?php

require_once 'sayHello/action/SayHelloIndexAction.php';
require_once 'sayHello/model/SayHelloUserModel.php';

class SayHelloView {

	var $indexAction;
	var $userModel;

	function __construct() {
		$this->indexAction = new SayHelloIndexAction();
	}

	function getUserModel() {
		return $this->userModel;
	}

	function setUserModel($userModel) {
		$this->userModel = $userModel;
	}

	function render() {
?>
<p>Hello <?= htmlspecialchars($this->userModel->getName()) ?>!</p>
<p>Thank you very much for entering your name.</p>
<p>You can click <a href="<?= $this->indexAction ?>">here</a> to go back.</p>
<?php
	}
}
