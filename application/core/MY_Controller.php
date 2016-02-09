<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');


class MY_Controller extends REST_Controller {

}

class API_Controller extends MY_Controller {

  public function __construct(){
    parent::__construct();
  }

  // protected function early_checks() { }

  /* Parse validation errors */
  protected function parse_errors($errors) {
    $result = array();
    $errors = explode('|', trim($errors));

    foreach ($errors as $v) {
      if (trim($v)) { 
        $result[] = $v;
      }
    }
    return $result;
  }
}

class BASE_Controller extends MY_Controller {
  public function __construct(){
    parent::__construct();
  }
}
