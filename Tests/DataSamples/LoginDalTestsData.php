<?php
namespace Tests\DataSamples;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__'))
  exit('No direct script access allowed');

/**
 * Static data that holds the testing data to perform unit tests for Login Dal
 * functions.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMVC
 * @since Version 1.0.0
 * @package LoginDalTestsData
 */
class LoginDalTestsData {

  
  /**
   * 
   * @return assoc array : test data for a user
   */
  public static function SelectASingleUserNeverWhoLoggedIn() {
    return array(
        \Library\BO\F_user::F_USER_EMAIL => "test@test.com",
        \Library\BO\F_user::F_USER_HINT => "",
        \Library\BO\F_user::F_USER_ID => NULL,
        \Library\BO\F_user::F_USER_LOGIN => "test",
        \Library\BO\F_user::F_USER_PASSWORD => "test",
        \Library\BO\F_user::F_USER_PASSWORD_IS_HASHED => "1",
        \Library\BO\F_user::F_USER_ROLE_ID => "1",
        \Library\BO\F_user::F_USER_SALT => \Library\Utility\UUID::v4(),
        \Library\BO\F_user::F_USER_SESSION_ID => NULL,
        \Library\BO\F_user::F_USER_TOKEN => \Library\Utility\UUID::v4()
    );
  }
  /**
   * 
   * @return assoc array : test data for a user
   */
  public static function SelectASingleUserWhoLoggedIn() {
    return array(
        \Library\BO\F_user::F_USER_EMAIL => "test@test.com",
        \Library\BO\F_user::F_USER_HINT => "",
        \Library\BO\F_user::F_USER_ID => NULL,
        \Library\BO\F_user::F_USER_LOGIN => "test",
        \Library\BO\F_user::F_USER_PASSWORD => "test",
        \Library\BO\F_user::F_USER_PASSWORD_IS_HASHED => "1",
        \Library\BO\F_user::F_USER_ROLE_ID => "1",
        \Library\BO\F_user::F_USER_SALT => \Library\Utility\UUID::v4(),
        \Library\BO\F_user::F_USER_SESSION_ID => NULL,
        \Library\BO\F_user::F_USER_TOKEN => \Library\Utility\UUID::v4()
    );
  }


}