<?php

namespace Cradle\Storm\PostGreSql;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-30 at 04:38:38.
 */
class Cradle_Storm_PostGreSql_QueryInsert_Test extends TestCase
{
    /**
     * @var QueryInsert
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new QueryInsert;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\PostGreSql\QueryInsert::getQuery
     */
    public function testGetQuery()
    {
        $actual = $this->object->getQuery();
		$this->assertEquals('INSERT INTO "" ("") VALUES ;', $actual);
    }

    /**
     * @covers Cradle\Storm\PostGreSql\QueryInsert::set
     */
    public function testSet()
    {
        $instance = $this->object->set('foo', 'bar');
		$this->assertInstanceOf('Cradle\Storm\PostGreSql\QueryInsert', $instance);
    }
}