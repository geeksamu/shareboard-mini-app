<?php

/**
* the Base Controller class
*/
abstract class Controller
{
  protected $request;
  protected $action;


  public function __construct($action, $request)
  {
    $this->action = $action;
    $this->request = $request;
  }

  public function executeAction()
  {
    // first 'this' is for this class instance,
    // second 'this' for the context instance (I hope I'm right!)
    return $this->{$this->action}();
  }

  protected function returnView($viewmodel, $fullview)
  {
    // the view to be used according to the action and the controller
    // according to the Bootstrap class
    // i.e controller = home, action = index
    // then, view = views/home/index.php
    $view = 'views/' . strtolower(get_class($this)) . '/' . $this->action . '.php';
    if ($fullview) {
      require('views/main.php');
    } else {
      require($view);
    }
  }
}