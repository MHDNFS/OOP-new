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
    public function Car(){
        echo "I am Father one.";
    }
}

$father = new Father();
$father->Car();
echo "<br>";

class Son1 extends Father{
    
}

class Son2 extends Father{

}

$Son1 = new Son1();
$Son2 = new Son2();

$Son1->Car();

echo "<br>";

$Son2->Car();




?>
    
</body>
</html>