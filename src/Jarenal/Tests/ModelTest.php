<?php

use PHPUnit\Framework\TestCase;
use Jarenal\Model;
use Jarenal\Tests\DummyData;

class ModelTest extends TestCase
{
	public function testOriginalData(){
		$model = new Model(dirname(__FILE__)."/../../../examples/original-test.txt");
		$this->assertEquals(DummyData::getOriginalTest(), $model->getData());
	}

	public function testOverlaped(){
		$model = new Model(dirname(__FILE__)."/../../../examples/overlaped-test.txt");
		$this->assertEquals(DummyData::getOverlapedTest(), $model->getData());
	}

	public function testWrongValues(){
		$model = new Model(dirname(__FILE__)."/../../../examples/wrong-values-test.txt");
		$this->assertEquals(DummyData::getWrongValuesTest(), $model->getData());
	}
}