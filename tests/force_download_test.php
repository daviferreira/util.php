<?php
require_once TESTS_DIR."/../force_download.php";

class ForceDownloadTest extends WebTestCase {

  function test_force_download(){
    $this->assertTrue($this->get(BASE_URL.'tests/download.php'));  
    $this->assertResponse(200);
    $this->assertMime(array('application/force-download'));
  }

}
