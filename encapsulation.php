<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Maths{
    protected $a = 10;
    protected $b = 20;

    public function addition(){
        $getValue1 = $this->a;
        $getValue2 = $this->b;
        $total = $getValue1 + $getValue2;
        return $total;
    }
}

$maths = new Maths();
echo "Total is:".$maths->addition();



echo "<br>";
class Calculation{
    private $number1 = 5;
    private $number2 = 12;

    public function multiplication(){
        $getNumber1 = $this->number1;
        $getNumber2 = $this->number2;
        $output = $getNumber1 * $getNumber2;
        return $output; 
    }
}

$calculation = new Calculation();
echo "The final answer is:".$calculation -> multiplication();




?>
    
</body>
</html>