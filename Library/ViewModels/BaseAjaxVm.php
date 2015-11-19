<?php

/**
 * The view model to store the state of an ajax request/response.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package BaseAjaxVm
 */

namespace Library\ViewModels;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class BaseAjaxVm extends BaseVm implements \Library\Interfaces\IAjaxViewModel {

  public function EncodeToJson($vm) {
    header('Content-Type: application/json');
    return json_encode($vm, JSON_PRETTY_PRINT);
  }
}