<?php
require_once TESTS_DIR."/../random_string.php";
require_once TESTS_DIR."/../slugify.php";
require_once TESTS_DIR."/../snippet_chars.php";
require_once TESTS_DIR."/../snippet_words.php";
require_once TESTS_DIR."/../strip_accents.php";

class StringTest extends UnitTestCase{

  function test_slugify(){
    $str = "I wänt to bé á friendly    ÛRL";
    $this->assertTrue(slugify($str));
    $this->assertEqual(slugify($str), "i-want-to-be-a-friendly-url");
  }

  function test_strip_accents(){
    $str = "ÁÉÍÓÚáéíóúçÇ";
    $this->assertTrue(strip_accents($str)); 
    $this->assertEqual(strip_accents($str), "AEIOUaeioucC");
  }

  function test_random_string(){
    $this->assertTrue(random_string(12));
    $this->assertEqual(strlen(random_string(20)), 20);
  }

  function test_snippet_chars(){
    $str = "This string wants to be transformed into a snippet!";
    $this->assertTrue(snippet_chars($str, 0, 10));
    $this->assertEqual(snippet_chars($str, 0, 10), "This strin &hellip;");
  }

  function test_snippet_words(){
    $str = "This string wants to be transformed into a snippet!";
    $this->assertTrue(snippet_words($str, 4, ' +'));
    $this->assertEqual(snippet_words($str, 4, ' +'), "This string wants to +");
  }
}
