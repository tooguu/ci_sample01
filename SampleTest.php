<?php
require_once('./Sample.php');
class SampleTest extends PHPUnit_Framework_TestCase
{
  public function testハローワールド()
  {
    $Sample = new Sample();
    $this->assertEquals($Sample->hellowWorld(), 'hellow world!');
  }
  /**
   *@test
   */
  public function aaa()
  {
    $Sample = new Sample();
    $this->assertEquals($Sample->helloWorld(), 'aaaaa');
  }
}