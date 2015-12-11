<?php

namespace Tests\TestClasses;

if (!FrameworkConstants_ExecutionAccessRestriction)
  exit('No direct script access allowed');

/**
 * 
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package LoginDalTest
 */
class LoginDalTest extends BaseTestClass {

  public function SelectOneUserFromExistingId() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_ID));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertArrayHasAValue($result), $result);
    return $this->testResult;
  }
  public function SelectOneUserFromNonExistingId() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_ID));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertIsArrayEmpty($result), $result);
    return $this->testResult;
  }

  public function SelectOneUserFromExistingLogin() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_LOGIN));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertArrayHasAValue($result), $result);
    return $this->testResult;
  }
  
  public function SelectOneUserFromNonExistingLogin() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_LOGIN));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertIsArrayEmpty($result), $result);
    return $this->testResult;
  }

  public function SelectOneUserFromExistingEmail() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_EMAIL));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertArrayHasAValue($result), $result);
    return $this->testResult;
  }
  public function SelectOneUserFromNonExistingEmail() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_EMAIL));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertIsArrayEmpty($result), $result);
    return $this->testResult;
  }
  public function SelectFromIdBenmarking() {
    $user = $this->testExecution->daoObject();
    $dbQueryFilters = new \Library\Dal\DbQueryFilters();
    $dbQueryFilters->setWhereFilters(array(\Library\BO\F_user::F_USER_EMAIL));
    $result = $this->app->dal()->getDalInstance("Login")->SelectOne($user, $dbQueryFilters);
    $this->testResult->setResultStatus($this->AssertIsArrayEmpty($result), $result);
    return $this->testResult;
  }

}