<?php

/**
 * Base class for handling the common resources.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package CommonResxBase
 */

namespace Library\Core\ResourceManagers;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class CommonResxBase extends ResourceBase implements \Library\Interfaces\IResource {

  /**
   * Method that retrieve the array of resources.
   * @return array the array of ressources
   */
  public function GetList() {
    $resourceFileName = "\\Applications\\" .
            FrameworkConstants_AppName .
            "\\Resources\\Common\\" .
            ucfirst($this->GroupValue) . "Resx_" . $this->CultureValue;
    $resourceFile = new $resourceFileName();
    return $resourceFile->GetList();
  }

  /**
   * Get the resource value by group and key.
   * 
   * @param string $key the resource key to find
   * @return string the resource value
   */
  public function GetValue($key) {
    $resources = $this->GetList();
    return array_key_exists($key, $resources) ?
            $resources[$key][$resourceFile::f_controller_resource_valueKey] :
            "[Missing resource in Group => " . $this->GroupValue . " for Key => " . $key . "]";
  }

  /**
   * Get the resource comment by group and key.
   * 
   * @param string $key the resource key to find
   * @return string the resource comment
   */
  public function GetComment($key) {
    $resources = $this->GetList();
    return array_key_exists($key, $resources) ?
            $resources[$key][$resourceFile::f_controller_resource_commentKey] :
            "[No resource comment in Group => " . $this->GroupValue . " for Key => " . $key . "]";
  }

}
