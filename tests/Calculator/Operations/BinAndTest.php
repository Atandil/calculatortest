<?php
namespace App\Test\Calculator\Operations;

use PHPUnit\Framework\TestCase;
use App\Calculator\Operations\BinAnd;

class BinAndTest  extends TestCase{
    //put your code here
    
    public function testEmpty() {
        $op = new BinAnd();
        $this->expectException('ArgumentCountError');
        $op->run(); 
    }
    
    public function testOneArg() {
        $op = new BinAnd();
        $this->expectException('ArgumentCountError');
        $op->run(4); 
    }
    
     public function testNotNumber1() {
        $op = new BinAnd();
        $this->expectException('Exception');
        $op->run('a',3); 
    }
   
    public function testNotInteger() {
        $op = new BinAnd();
        $this->expectException('Exception');
        $op->run(3,2.3); 
    }
    
     public function testInteger() {
        $op = new BinAnd();
        $result=$op->run(3,7); 
        $this->assertEquals(3, $result);
    }
    
   
}
