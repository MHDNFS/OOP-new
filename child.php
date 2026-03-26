<?php

// i put the parent class in another file and use includes to get the parent class here....
// otherwise it will shows an error parent class is not mentioned above
include 'parents.php';



class Child extends  ParentClass{
    public function childMethod(){
       
    }
}

$child = new  Child();
$child->parentMethod();


?>