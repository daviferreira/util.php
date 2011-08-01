<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_USER_NOTICE);
ini_set( "display_errors","On" );
ini_set("display_startup_errors",true);

define(TESTS_DIR, dirname(__FILE__));
define(BASE_URL, 'http://localhost/util.php/');

require_once TESTS_DIR."/simpletest/autorun.php";
require_once TESTS_DIR."/simpletest/web_tester.php";
require_once TESTS_DIR."/simpletest/reporter.php";

class AllTests extends TestSuite{
  function AllTests(){
    $this->TestSuite("All tests for utility functions");
    $this->addFile(TESTS_DIR."/string_test.php");
    $this->addFile(TESTS_DIR."/dir_and_file_test.php");
    $this->addFile(TESTS_DIR."/redirect_test.php");
  }
}
