<?php 


$num = [1,5,9,8,63,50,4,7];

$find = readline("Enter your Desire Number :");

for($i=0; $i<count($num); $i++){

    if($num[$i] == $find){
        print("Your Desire Number $find is at $i");
    }
}