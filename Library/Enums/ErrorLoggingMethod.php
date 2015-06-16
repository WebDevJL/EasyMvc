<?php

/**
 *
 * @package     EasyMvc Framework
 * @author      Jeremie Litzler
 * @copyright   Copyright (c) 2015
 * @license		
 * @link		
 * @since		
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * ErrorLoggingMethod Class
 *
 * @package       Library
 * @category    Enums
 * @author        Jeremie Litzler
 * @link		
 */

namespace Library\Enums;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__')) {
  exit('No direct script access allowed');
}

class ErrorLoggingMethod {

  const EchoString = "error-log-type-echo";
  const Alert = "error-log-type-alert";
  const File = "error-log-type-file";
  const Database = "error-log-type-db";

}