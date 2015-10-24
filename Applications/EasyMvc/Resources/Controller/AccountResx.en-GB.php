<?php
/**
 * List of the resources for the moduleaccount
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc/blob/master/README.md
 * @since Version 1.0.2.1
 * @package AccountResx extends \Library\Core\ResourceManagers\ComntrollerResxBase
 */

namespace Applications\EasyMvc\Ressources\Controller;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class AccountResx extends \Library\Core\ResourceManagers\ComntrollerResxBase {
  const createKey = 'createKey';
