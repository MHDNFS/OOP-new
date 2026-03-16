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
        public function house(){
            echo "This is my house";
        }
    }

    $father = new Father();
    $father->house();


    class Son extends Father{
        public function car(){
            echo "This is my own car.";
        }
    }


    echo "<br>";
    $son = new Son;
    $son->house();

    echo "<br>";
    $son->car();
    


    class Mother{
        private function bag(){
            return "This is my bag.";
        }

        public function showBag(){
            // i put this echo for a reason because above i did not put echo i put return so if i need to [rint we should put echo here.
            echo $this->bag();
        }
    }
    
    echo "<br>";
    $mother = new Mother();
    $mother->showBag();


    class Man{
        protected function book(){
            echo "this is my book";
        }
    }

    class Child extends Man{
        public function showBook(){
            $this->book();
        }
    }

    echo "<br>";
    $child = new Child;
    $child->showBook();
    
    ?>
</body>
</html>