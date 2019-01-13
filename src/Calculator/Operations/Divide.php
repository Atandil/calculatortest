<?php
namespace App\Calculator\Operations;
use App\Calculator\OperatorInterface;

class Divide implements OperatorInterface {
    
    public function run($n1,$n2) {
       
       if(!is_numeric($n1)||!is_numeric($n2)) {
            throw new \Exception('Please use numbers');
       }
       
       if($n2==0) {
            throw new \Exception('Do NOT divide by ZERO');
       }
       
       return  $n1/$n2;
    }
    
}
