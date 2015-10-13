<?php
/**
 * Lists the constants for application view files to autocompletion and easy coding.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMVC/blob/master/README.md
 * @since Version 1.0.2.1
 * @package EasyMvcViews
 */

namespace Applications\EasyMvc\Generated;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class EasyMvcViews {
  const AccountFolderKey = 'AccountFolderKey';  const LoginKey = 'LoginKey';  const MapFolderKey = 'MapFolderKey';  const loadViewKey = 'loadViewKey';  const ModulesFolderKey = 'ModulesFolderKey';  const active_listKey = 'active_listKey';  const active_task_tabs_openKey = 'active_task_tabs_openKey';  const categorized_list_leftKey = 'categorized_list_leftKey';  const categorized_list_rightKey = 'categorized_list_rightKey';  const company_formKey = 'company_formKey';  const complete_task_tabs_openKey = 'complete_task_tabs_openKey';  const group_list_leftKey = 'group_list_leftKey';  const group_list_rightKey = 'group_list_rightKey';  const inactive_listKey = 'inactive_listKey';  const mapKey = 'mapKey';  const popup_msgKey = 'popup_msgKey';  const tabs_closeKey = 'tabs_closeKey';  const task_tabs_openKey = 'task_tabs_openKey';  const upload_fileKey = 'upload_fileKey';  public static function GetList() {    return array(      self::AccountFolderKey => array(        self::LoginKey => 'Login',      ),      self::MapFolderKey => array(        self::loadViewKey => 'loadView',      ),      self::ModulesFolderKey => array(        self::active_listKey => 'active_list',        self::active_task_tabs_openKey => 'active_task_tabs_open',        self::categorized_list_leftKey => 'categorized_list_left',        self::categorized_list_rightKey => 'categorized_list_right',        self::company_formKey => 'company_form',        self::complete_task_tabs_openKey => 'complete_task_tabs_open',        self::group_list_leftKey => 'group_list_left',        self::group_list_rightKey => 'group_list_right',        self::inactive_listKey => 'inactive_list',        self::mapKey => 'map',        self::popup_msgKey => 'popup_msg',        self::tabs_closeKey => 'tabs_close',        self::task_tabs_openKey => 'task_tabs_open',        self::upload_fileKey => 'upload_file',      ),    );  }
  public static function DoesConstantExist($key) {    return array_key_exists($key, self::GetList());  }}