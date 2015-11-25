<?php

/**
 * The view model to store the state of an ajax request/response in JSON objects.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package BaseJsonVm
 */

namespace Library\ViewModels;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class BaseJsonVm extends BaseVm {
  protected $Response;
  
  public function Response() {
    return $this->Response;
  }
}