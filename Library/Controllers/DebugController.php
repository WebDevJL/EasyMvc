<?php

/**
 *
 * @package		Easy MVC Framework
 * @author		Jeremie Litzler
 * @copyright	Copyright (c) 2015
 * @license		
 * @link		
 * @since		
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * Debug controller Class
 *
 * @package		Library
 * @category	Controllers
 * @category	DebugController
 * @author		Jeremie Litzler
 * @link		
 */

namespace Library\Controllers;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__')) {
  exit('No direct script access allowed');
}

class DebugController extends \Library\Controllers\BaseController {

  public function executeViewSessionArrays(\Library\HttpRequest $rq) {
    $output = array();
    switch ($rq->getData("type")) {
      case "pm":
        $output = var_dump(\Applications\EasyMvc\Helpers\PmHelper::GetSessionPms($this->user()));
        break;
      case "project";
        $output = var_dump(\Applications\EasyMvc\Helpers\ProjectHelper::GetSessionProjects($this->user()));
        break;
      case "task":
        $output = var_dump(\Applications\EasyMvc\Helpers\TaskHelper::GetSessionTasks($this->user()));
        break;
      case "route":
        $output = var_dump($this->user->getAttribute(\Library\Enums\SessionKeys::SessionRoutes));
        break;
      default:
        break;
    }
    echo '<pre>', print_r($output), '</pre>';
    //\Library\HttpResponse::encodeJson($output);
    die();
  }

}
