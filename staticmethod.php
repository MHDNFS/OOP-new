<?php

class Sample{
    public static function show(){
       echo "I am public static function so i do not need to create an object to call me.
        you can use the scope resolution operator (::) ";
    }


    public function car(){
        echo "i am not a static function,so can not call me without object";
    }
}

// this is the method to calling the static function
Sample::show();

// this will make error
// Sample::car();

// corrcet way
echo "<br>";
$sample = new Sample();
$sample->car();




?>