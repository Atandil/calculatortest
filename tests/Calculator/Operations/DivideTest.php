<?php
namespace App\Test\Calculator\Operations;

use PHPUnit\Framework\TestCase;
use App\Calculator\Operations\Divide;

class DivideTest  extends TestCase{
    //put your code here
    
    public function testEmpty() {
        $op = new Divide();
        $this->expectException('ArgumentCountError');
        $op->run(); 
    }
    
    public function testOneArg() {
        $op = new Divide();
        $this->expectException('ArgumentCountError');
        $op->run(4); 
    }
    
     public function testNotNumber1() {
        $op = new Divide();
        $this->expectException('Exception');
        $op->run('a',3); 
    }
   
    public function testNotNumber2() {
        $op = new Divide();
        $this->expectException('Exception');
        $op->run(3,'a'); 
    }
    
    public function testZero() {
        $op = new Divide();
        $this->expectException('Exception');
        $op->run(5,0); 
    }
    
    public function testString() {
        $op = new Divide();
        $result=$op->run('4','2'); 
        $this->assertEquals(2, $result);
    }
   
}
