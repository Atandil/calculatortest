<?php
namespace App\Calculator;

use App\Calculator\OperatorInterface;

class Calculator {
    protected $result;
    protected $operation;
    
     public function set(OperatorInterface $operation)
    {
        $this->operation = $operation;
        return $this;
    }
    
    public function count($n1,$n2) {
        $this->result = $this->operation->run($n1,$n2);
        return $this->result;
    }
    
    public function last() {
        return $this->result;
    }
}
