<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Calculation{
        
         public $value1 = 1000;
         public $value2 = 2500;
    
        public function addition(){
           $getValue1 = $this->value1;
           $getValue2 = $this->value2;

           $total = $getValue1 + $getValue2;
           return $total;
        //    echo $total;
        }
    }
    
    
    $calculation = new Calculation();
    $calculation->addition();
    echo $calculation->addition();
    ?>
    
</body>
</html>