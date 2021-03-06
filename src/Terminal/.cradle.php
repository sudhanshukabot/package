<?php //-->

use Cradle\Package\Terminal\TerminalPackage;

$this('terminal')
  //map the package with the terminal package class methods
  ->mapPackageMethods($this('resolver')->resolve(TerminalPackage::class))
  //use one global resolver
  ->setResolverHandler($this('resolver')->getResolverHandler())
  //use one global request
  ->setRequest($this('io')->getRequest())
  //use one global response
  ->setResponse($this('io')->getResponse())
  //use one global event emitter
  ->setEventEmitter($this('event')->getEventEmitter());
