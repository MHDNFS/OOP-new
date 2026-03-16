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
    protected Function house(){
        echo "This is my Own House.";
    }

}

class Son extends Father{
    public function showHouse(){
        $this->house();
    }
}

$son = new Son();
$son->showHouse();


?>
    
</body>
</html>