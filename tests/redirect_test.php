<?php
class RedirectTest extends WebTestCase {

  function test_redirect_with_header(){
    $this->assertTrue($this->get(BASE_URL.'tests/redirector.php'));  
    $this->assertResponse(200);
    $this->assertMime(array('text/plain', 'text/html; charset=ISO-8859-1'));
  }

  function test_redirect_without_header(){
    $this->assertTrue($this->get(BASE_URL.'tests/redirector.php?header=1'));  
    $this->assertResponse(200);
    $this->assertMime(array('text/plain', 'text/html; charset=ISO-8859-1'));
  }

}
