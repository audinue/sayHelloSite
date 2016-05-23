<?php

require_once 'common/ControllerDispatcher.php';
require_once 'sayHello/SayHelloComponent.php';

$dispatcher = new ControllerDispatcher();

$sayHelloComponent = new SayHelloComponent();
$sayHelloComponent->register($dispatcher);

$dispatcher->dispatch();
