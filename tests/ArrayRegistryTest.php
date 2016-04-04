<?php
/**
 * Created by PhpStorm.
 * User: marcl
 * Date: 04/04/2016
 * Time: 12:55
 */

namespace Lebr1\Registry;
use Lebr1\Registry\ArrayRegistry as ArrayRegistry;

class ArrayRegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testSetGetHas()
    {
        $arrayRegistry = ArrayRegistry::getInstance();
        $arrayRegistry->set('person','John Doe');
        $arrayRegistry->set('varNull',null);

        $this->assertEquals(null, $arrayRegistry->get('varNull'));
        $this->assertEquals('John Doe', $arrayRegistry->get('person'));
        $this->assertEquals(null, $arrayRegistry->get('missing key'));

        $this->assertFalse($arrayRegistry->has('varNull'));
        $this->assertTrue($arrayRegistry->has('person'));
        $this->assertFalse($arrayRegistry->has('missing key'));
    }
}