<?php 


// hurt animals
function harmAnimal($animal){
    
    // find each animal
    foreach ($animal as $row){
        
        // check if elephants are still sick
          if($row->status == "Sick" && $row->type == "Elephant" ) {
                                $row->status = "Dead";
                                $row->colourStatus = "dark";
                                }
    
        // do nothing if animal is already dead
    if( $row->status == "Dead"){
        
        
    } 
    
        // do something if animal is still alive
    else {
        
      
            // generate random -health value
            $randomValue = rand(0,20);
            // get current health
            $currentHealth = $row->health;
            // generate new health value
            $newHealth = $currentHealth - $randomValue;

            // apply new health value
            $row->health = $newHealth;

            // check animal is still healthy
            if($newHealth < 80 && $newHealth ) {
                                $row->status = "Alive";
                                $row->colourStatus = "warning";
                                
                                }
        
            // check animal is sick based on animal variable (+20 of death value, elephants same as death value )
            if($newHealth < $row->sick ) {
                                $row->status = "Sick";
                                $row->colourStatus = "danger";
                                
                                }
        
            //kill animals if they are lower than death value - Elephants are checked earlier
            if($newHealth < $row->death && $row->type != "Elephant" ) {
                                $row->status = "Dead";
                                $row->colourStatus = "dark";
                                

                
                                }
        
        
            
        
        


        
        }
    
    
};

    
}


// feed animals
function feedAnimal($animal){
       // Call random value before so to apply to All Animals of type
     $randomValue = rand(10,25);
    
//run health update
foreach ($animal as $row){
     
    // do nothing if animal is already dead
    if( $row->status == "Dead"){
        
        
    } 
    
    else {

        
            // Get Current Health
            $currentHealth = $row->health;
            // Add food to current health
            $newHealth = $currentHealth + $randomValue;
            // set health to 100% if it is over 100
            if($newHealth > 100){$newHealth = 100; };
        
            // check animal is above 80 change status to green
            if($newHealth > 80 ) {
                                $row->status = "Alive";
                                $row->colourStatus = "success";
                                }
        
            // check animal is above sick variable but show as warning if below 80
            if($newHealth > $row->sick && $newHealth < 80 ) {
                                $row->status = "Alive";
                                $row->colourStatus = "warning";
                                }
        
            // dead animals are not checked on feeding
            
        
     
            // apply new health value
            $row->health = $newHealth;

            
            // if elephant is still sick when + health applied, kill it (sorry elephant)
              if($row->status == "Sick" && $row->type == "Elephant" ) {
                                $row->status = "Dead";
                                $row->colourStatus = "dark";

                                }
        
          
        
        }
    
      
};
}







?>