
<!-- NOTE -->
<!-- What are Access Modifiers in PHP OOP?
  
 Modifier            Accessible From
 public              Anywhere (inside class, child class, outside object)
 protected           Inside class + child classes
 private             Only inside the same class
   
 
 -->


 <!-- IF we think it like a House
      
      Modifier            Example
      public              Everyone can enter
      protected           Only family members
      private             Only the owner
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
   
   
// PUBLIC   
   class Father{
       public function house(){
         echo "This is My House.";
       }
   }

   $father = new Father();
   $father->house();





   

// PRIVATE
// NOTE:-private methods cannot be accessed outside the class.

    class Father{
       private function house(){
         echo "This is My House.";
       }

       public function showHouse(){
        //this allowing inside the same class
          $this->house(); 
       }
   }

   $father = new Father();
   // so we need to call the public method showHouse() only    
   $father->showHouse();
   







   // $this RELATED NOTES

   // NOTE:What is $this in PHP?
   // The current object of the class is $this now $this refers $father = new Father
   // So $this is used to access properties or methods of the same object.
   // so $this->house() means Call the house() method of this object $father = new Father
   // if we do not put $this->house() and if we normally put house() PHP doesn't know which object’s method to call. so the error will come









// PROTECTED
// Why protected Works in Inheritance?
// NOTE:-protected allows child classes to access the method.

   class Father{
       protected function house(){
         echo "This is My House.";
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