<?php

/**
 * Provides functions used by its controller, e.g. WebIdeAjaxController.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package WebIdeAjaxHelper
 */

namespace Library\Helpers;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class WebIdeAjaxHelper {

  private $ListItemArray;

  public static function Init() {
    $helper = new WebIdeAjaxHelper();
    return $helper;
  }

  /**
   * Extracts from the $FolderPathArray a list of ListItem objects that match 
   * the regexFilter.
   * 
   * @param array $FolderPathArray The array of folder to extract the values from
   * @param string $regexFilter The regex to test each folder path
   * @return array(of \Library\BO\ListItem) The array of ListIem objects ready
   */
  public function ExtractListItemsFrom($FolderPathArray, $regexFilter) {
    $this->ListItemArray = array();
    foreach ($FolderPathArray as $key => $path) {
      if($this->IsFolderMatchingFilter($path, $regexFilter)) {
        $this->AddFolderPathToListItems($key, $path);
      }
    }
    return $this->ListItemArray;
  }

  /**
   * Test to the path against the filter.
   * 
   * @param string $path The folder path
   * @param string $regexFilter The regex to test the path 
   */
  public function IsFolderMatchingFilter($path, $regexFilter) {
    return \Library\Helpers\RegexHelper::Init($path)->IsMatch($regexFilter);
  }
  
  /**
   * Add a ListItem object to the field ListItemArray.
   * 
   * @param type $key
   * @param string $path The folder path
   */
  public function AddFolderPathToListItems($key, $path) {
    array_push($this->ListItemArray, \Library\BO\ListItem::Init($key, $path));
  }

}
