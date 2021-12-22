<?php
function division($number){
    if($number <= 0){
        throw new Exception("Value must be greater than 0!!!");
    }
    echo 100/$number."\n";
}

try{
    division(0);
    echo "You are putting Valid Input\n";
}
catch(Exception $e){
    echo "Message : ".$e->getMessage()."\n";

}
finally{

    echo "It will always run\n";
}
?>