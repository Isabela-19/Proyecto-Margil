<?php
    include('operation.php');

    class Multiplication extends Operation {

        public function Multiplication($number1, $number2){
            $this->number1 = $number1;
            $this->number2 = $number2;
        }

        public function calculateMultiplication(){
            if($this->number2 != null && $this->number2 != '' && 
            $this->number1 != null && $this->number1 != ''){
                return ($this->number1 * $this->number2);
            } 
        }
    } 
?>