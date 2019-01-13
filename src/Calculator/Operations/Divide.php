<?php
namespace App\Calculator\Operations;
use App\Calculator\OperatorInterface;

class Divide implements OperatorInterface {
    
    public function run($n1,$n2) {
       
       if(!is_numeric($n1)||!is_numeric($n2)) {
            throw new \Exception('Please use numbers');
       }
       
       return  $n1/$n2;
    }
    
}
