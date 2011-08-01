<?php
require_once TESTS_DIR."/../remove_directory.php";

class DirAndFileTest extends UnitTestCase{

  private $dir1 = "/tmp/test_dir/";
  private $dir2 = "/tmp/test_dir/sub_dir/";
  private $file1 = "file1.txt";
  private $file2 = "file2.txt"; 

  function setUp(){
    mkdir($this->dir1, 0755);
    mkdir($this->dir2, 0755);
    file_put_contents($this->dir1.$this->file1, "test1");
    file_put_contents($this->dir2.$this->file2, "test2");
  }

  function tearDown(){
    @unlink($this->dir2.$this->file2);
    @unlink($this->dir1.$this->file1);
    @rmdir($this->dir2);
    @rmdir($this->dir1);
  }

  function test_remove_subdirectory(){
    $this->assertTrue(remove_directory($this->dir2));
  }

  function test_remove_directory(){
    $this->assertTrue(remove_directory($this->dir1));
  }

  function test_preserve_empty_directory(){
    $this->assertTrue(remove_directory($this->dir1, true));
    $this->assertTrue(is_dir($this->dir1));
  }

  function test_remove_invalid_directory(){
    $this->assertFalse(remove_directory("invalid"));
  }
}
