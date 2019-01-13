<?php
namespace App\Test\Calculator\Operations;

use PHPUnit\Framework\TestCase;
use App\Calculator\Operations\Plus;

class PlusTest  extends TestCase{
    //put your code here
    
    public function testEmpty() {
        $op = new Plus();
        $this->expectException('ArgumentCountError');
        $op->run(); 
    }
    
    public function testOneArg() {
        $op = new Plus();
        $this->expectException('ArgumentCountError');
        $op->run(4); 
    }
    
     public function testNotNumber1() {
        $op = new Plus();
        $this->expectException('Exception');
        $op->run('a',3); 
    }
   
    public function testNotNumber2() {
        $op = new Plus();
        $this->expectException('Exception');
        $op->run(3,'a'); 
    }
    
    public function testString() {
        $op = new Plus();
        $result=$op->run('3','2'); 
        $this->assertEquals(5, $result);
    }
     
    public function testInteger() {
        $op = new Plus();
        $result=$op->run(111111,22222); 
        $this->assertEquals(133333, $result);
    }
    
     public function tesfloat() {
        $op = new Plus();
        $result=$op->run(1.1,2.2); 
        $this->assertEquals(3.3, $result);
    }
}
