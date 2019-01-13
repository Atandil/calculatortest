<?php
namespace App\Test\Calculator;

use App\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest  extends TestCase{
    //put your code here
    
    public function testSetEmpty() {
        $calc = new Calculator;
        $this->expectException('ArgumentCountError');
        $calc->set();
        
    }
    
     public function testSetNonInterfaceClass() {
        $calc = new Calculator;
        $this->expectException('TypeError');
        $calc->set(new class {
                        public function test()
                        {
                            echo "test";
                        }
                    });     
    }
    
    public function testIfTryRunNoOperation() {
        $calc = new Calculator;
        $this->expectException('Error');
        $this->expectExceptionMessage("Call to a member function run() on null");
        $calc->count(3,4);
        
    }
}
