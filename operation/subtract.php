<?php
    include('operation.php');

    class Subtract extends Operation {

        public function Subtract($number1, $number2){
            $this->number1 = $number1;
            $this->number2 = $number2;
        }

        public function calculateSubtract(){
            if($this->number2 != null && $this->number2 != '' && 
            $this->number1 != null && $this->number1 != ''){
                return ($this->number1 - $this->number2);
            } 
        }
    } 
?>