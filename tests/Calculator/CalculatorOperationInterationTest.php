<?php
namespace App\Test\Calculator;

use App\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorOperationInterationTest  extends TestCase{
    //put your code here
    
    public function testPlus() {
        $calc = new Calculator;
        $op=new \App\Calculator\Operations\Plus();
        $calc->set($op);
        $result = $calc->count(5, 5);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(10, $result);
        
    }
    
    public function Minus() {
        $calc = new Calculator;
        $op=new \App\Calculator\Operations\Minus();
        $calc->set($op);
        $result = $calc->count(5, 5);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(0, $result);
        
    }
    public function testMultiple() {
        $calc = new Calculator;
        $op=new \App\Calculator\Operations\Multiple();
        $calc->set($op);
        $result = $calc->count(2, 5);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(10, $result);
        
    }
    
    
    public function testDivide() {
        $calc = new Calculator;
        $op=new \App\Calculator\Operations\Divide();
        $calc->set($op);
        $result = $calc->count(15, 5);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(3, $result);
        
    }
    public function testBinAnd() {
        $calc = new Calculator;
        $op=new \App\Calculator\Operations\BinAnd();
        $calc->set($op);
        $result = $calc->count(5, 3);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(1, $result);
        
    }
    public function testBinOr() {
        $calc = new Calculator;
        $op=new \App\Calculator\Operations\BinOr();
        $calc->set($op);
        $result = $calc->count(1, 4);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(5, $result);
        
    }
}
