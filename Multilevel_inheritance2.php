<!-- Multiple Inheritance will not support in php so Alternativly we can use the Multilevel Inheritance for that
 it menas,2 parent and a single child situation -->

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
            echo "I am Father This is My House.I can give this for my Son and also My grand Son";
        }
    }
    

    class Son extends Father{
        public function car(){
            echo "I am Son This is my own Car.I can give this car only for My son ,I can not give this to My Father.";
        }
    }


    class GrandSon extends Son{
        public function laptop(){
            echo "I am GrnadSon this is my own lap,i can not give this for my father or my grand father.";
        }

        // overriding happens here
         public function house(){
            echo "I am Grand Son This is My grandFather's House.But I can use this.";
        }
    }
    




     $father = new Father();
     $father->house();
     echo "<br>";

     $son = new Son();
     $son->house();
     echo "<br>";

     $grandson = new GrandSon();
     $grandson->house();
     
     echo "<br>";
     $grandson->car();

     echo "<br>";
     $grandson->laptop();
    ?>

   
    
</body>
</html>