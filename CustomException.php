<?php
class DivideByZeroException extends Exception{
    function customExceptionMessage(){
        echo "\nException Occurs on Line-".$this->getLine()."in(".$this->getFile().")File with message : ".$this->getMessage()."\n";
    }
}
function division($number){
    try{
        if($number <= 0){
            throw new DivideByZeroException("Value must be other than Zero and Negative!!!\n");
        }
        else{
            $temp =100/$number."\n";
            echo "Result of division is =".$temp."\n";

        }
    }
    catch(DivideByZeroException $e){
        echo $e->customExceptionMessage();   
    }
}
division(0);
division(-2);
division(4);
?>