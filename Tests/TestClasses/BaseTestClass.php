<?php

namespace Tests\TestClasses;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__'))
  exit('No direct script access allowed');

/**
 * 
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMVC
 * @since Version 1.0.0
 * @package BaseTestClass
 */
class BaseTestClass {

  protected $app;
  protected $testExecution;

  /**
   * Initialize the test class with the current test app and the test execution
   * details.
   * 
   * @param \Applications\Test\TestApplication $app
   * @param \Tests\BO\TestExecution $testExecution
   */
  public function __construct($app, \Tests\BO\TestExecution $testExecution) {
    $this->testExecution = $testExecution;
    $this->app = $app;
  }

}