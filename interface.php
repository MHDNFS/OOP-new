<!-- NOTE:-
 normal method will not use in the interface.
 constructor will not use in the interface.
 properties will not use in the interface.
 only public method uses in the interface.
 multiple inheritace is possible in the interface.
 interface is 100% of abstraction.
 when we using interface the situation 
 when we connecting the parent and child we use implements like what we already used extends.


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


interface Fruits{
    public function apple();
}

class Vegetables implements Fruits{
    public function apple(){
        echo "Fruits and vegetables";
    }
}

$vegetabls = new Vegetables();
$vegetabls->apple();


echo "<br>";

?>


<?php

// multiple inheritance in the interface

interface Men{
    public function Ravi();
}

interface Woman{
    public function Meena();
}

class Human implements Men,Woman{
     public function Ravi(){
        echo "Ravi is a Man.";
     }

     public function Meena(){
        echo "Meena is a Woman.";
     }
}


$human = new Human();
$human->Ravi();

echo "<br>";

$human->Meena();







?>
    
</body>
</html>