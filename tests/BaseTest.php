<?php
namespace Doctrine\Entity\Tests;

use Doctrine\Entity\Tests\Fixture\ExampleEntity;

class BaseTest extends \PHPUnit_Framework_TestCase
{



    public function setUp()
    {

    }


    public function testGettersSetters()
    {
        $entity = new ExampleEntity;
        $entity->testString = "test";
        $this->assertEquals("test", $entity->testString);
    }
    
    public function testDynamicMethods()
    {
        $entity = new ExampleEntity;
        $entity->setTestString("test");
        $this->assertEquals("test", $entity->getTestString());

    }
    
    public function testSerialize()
    {
        $entity = new ExampleEntity;
        $entity->setTestString("test");
        $this->assertEquals(['testString'=>'test', 'testArray'=>[]], $entity->serialize());
    }

    
}