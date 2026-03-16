<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Father{
    
    //Method
    public function bike(){
        echo "I am a Father & My name is Jhon.I have a Bike.";
    }
}


class Son extends Father{
     
    //  in here overriding,if i did not put this function when i call the $object_son->bike(); the above Father class method should work
      public function bike(){
        echo "I am son I can use My Father's Bike.";
    }

    public function laptop(){
        echo "I am son this is my laptop My father can not Touch this.";
    }
}


$object_father = new Father();
$object_father->bike();

echo "<br>";

$object_son = new Son();
$object_son->bike();

echo "<br>";

$object_son->laptop();



echo "<br>";
// this function do not work because this is the metod of son's so we can not use for father
$object_father->laptop();

?>
    
</body>
</html>