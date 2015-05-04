<?php

use Codebac\Instances\Instances;

class InstancesTest extends PHPUnit_Framework_TestCase {

  public function testNachHasCheese()
  {
    $instance = new Instances;
    $this->assertTrue($instance->doWork());
  }

}
