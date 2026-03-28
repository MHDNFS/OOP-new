
<!-- abstraction Notes -->
 <!-- have public,private,protected methods,property in abstrac class.
      inside the abstrac class we can keep the normal method also.
      when we use abstrac class we use single inheritance example:-we use inheritance father child class 
      this is must when it comes to abstraction.
      Because for a abstract method do not have body at the same time we can not create object 
      only we can create the object for child class.
      when we creating child class we need to put the above abstract method without the "abstract" word so it called overriding.

 -->
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


abstract class Animal{
       
    //    normal method
       public function eat(){
            echo "Animal is eating.";
       }
       
        // abstract method
        abstract public function makeSound();
}


 class Dog extends Animal{
      
 public function makeSound(){
     echo "dog is barking";
 }
 }

 $dog = new dog();
 $dog-> makeSound();
 echo "<br>";
//  we can not create object for abstract class
 $dog->eat();

 echo "<br>";



//  EXAMPLE:02

abstract class Father{
    abstract public function car();
}

class Son extends Father{
    // overiding happens here
    public function car(){
        echo "I am Father...This is my Car.";
    }


    public function bike(){
        echo "This is my bike.";
    }
}


$son = new son();
$son->car();

echo "<br>";

$son->bike();

echo "<br>";




// construct method only need to create the object,do not need to call them it will work without calling

class Food{
    function __construct(){
        echo "This is Tasty food.";
    }
}

$food = new food();



echo "<br>";

abstract class Vehicle{
    abstract public function __construct();
}

// above have an abstract method we must create child class and extends it
//  aftre that we need to override the same abstract method as a normal method
class Bicycle extends Vehicle{
    public function __construct(){
        echo "bicycle created.";
    }
}

// in here this is a construct method so only we  create tye object for the child class is enough 
// because construct is automatically works do not need to call the method again
$bicycle = new Bicycle();
?>
    
</body>
</html>