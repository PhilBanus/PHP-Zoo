<?php 



// PHP Objects are held in classes

include "classes.php";

// Animals statistics are shown here
include "showStats.php";


// start a php Session
session_start();



//create animals
//monkey
for ($x = 1; $x <= 5; ) {
    
        $monkey[$x] = new monkey();
        $monkey[$x]->number = $x;
        $x++;
    
      
    
        
        
} 

//elephant
for ($x = 1; $x <= 5; ) {
    
        $elephant[$x] = new elephant();
        $elephant[$x]->number = $x;
    $x++;
    
      
    
        
        
} 

//giraffe
for ($x = 1; $x <= 5;) {
    
        $giraffe[$x] = new giraffe();
        $giraffe[$x]->number = $x;
    $x++;
    
      
    
        
        
} 





// store session variables
$_SESSION['monkey'] = $monkey;
$_SESSION['elephant'] = $elephant;
$_SESSION['giraffe'] = $giraffe;





// show user interface

include "visuals.php";





?>




