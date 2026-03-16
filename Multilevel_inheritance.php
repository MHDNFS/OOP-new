<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Father1{

    public function house(){
        echo "I am Father 1.";
    }
}


// in here son = Father2
class Son extends Father1{
    
    //  in hee overriding happans
      public function house(){
        echo "I am Son 1.";
    }
}


class Son2 extends Son{

    // in here i did not put any methods so inheritance works here
}

$father1 = new Father1();
$father1->house();

echo "<br>";

$Son1 = new Son();
$Son1->house();

echo "<br>";
$Son2 = new Son2();
$Son2->house();



?>
    
</body>
</html>