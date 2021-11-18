<?php
    include('operation.php');

    class Sum extends Operation {

        public function Sum($number1, $number2){
            $this->number1 = $number1;
            $this->number2 = $number2;
        }

        public function calculateSum(){
            if($this->number2 != null && $this->number2 != '' && 
            $this->number1 != null && $this->number1 != ''){
                return ($this->number1 + $this->number2);
            } 
        }
    } 
?>