<?php
namespace App\Calculator\Operations;
use App\Calculator\OperatorInterface;

class BinAnd implements OperatorInterface {
    
    public function run($n1,$n2) {
       
       if(!$this->isInteger($n1)||!$this->isInteger($n2)) {
            throw new \Exception('Please use integers');
       }
       
       return  $n1&$n2;
    }
    
    function isInteger($input){
        return(ctype_digit(strval($input)));
    }
    
}
