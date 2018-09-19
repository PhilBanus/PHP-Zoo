<?php 

include "classes.php";

include "showStats.php";

include "animalActions.php";




session_start();


$monkey = $_SESSION['monkey'] ;
$elephant = $_SESSION['elephant'] ;
$giraffe = $_SESSION['giraffe'] ;








// check url variable for time acction then harm animals
if($_GET['action'] == "time"){
//run health update
// called from animalActions.php
    harmAnimal($monkey);
    harmAnimal($elephant);
    harmAnimal($giraffe);
    
    
    
    
}


//check url variable for food actino then heal animals
if($_GET['action'] == "feed"){
//run health update
// called from animalActions.php    
  feedAnimal($monkey);
  feedAnimal($elephant);
  feedAnimal($giraffe);

}



// show updated visuals

include "visuals.php"

?>



