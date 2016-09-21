<?php
class User{
    public $n;
    public static $pL = 5;
    // private static $p;
    public static function x($p){
        if ($p >= self::$pL ) {
            return true;
        }
        else{
           return false;
        }
    }

}

$p = 'Passwordy';


echo User::$pL


?>
