<?php

// child class's namespace
namespace App\Http\Controllers\Web;

// bring the parent class using include
include '../Api/Testing.php';
// use the parent class we  telling the location and also
//  the parent class name is same in child class tame so we assume another name for the parent class using "as"
use App\Http\Controllers\Api\Testing as ApiTesting;


// this is the child class,now i comment this code and inherits child classs using parent class
// class Testing{
//     public Function display(){
//         echo "I am learning namespace";
//     }
// }


class Testing extends ApiTesting {
    public Function display(){
        echo "I am learning namespace";
    }
}

$testing = new Testing();
$testing->display();



?>