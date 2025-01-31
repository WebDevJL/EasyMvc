<?php

/**
 * List the error codes. 
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/
 * @since Version 1.0.0
 * @package FrameworkDalConstants
 */

namespace Library\Enums\ErrorCodes;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class FrameworkDalConstants {
  const GenericValue = 0;
  const Generic = "ErrorCodes_FrameworkDal_GENERIC_KEY";

}
