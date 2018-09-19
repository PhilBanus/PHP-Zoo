<?php 




function harmAnimal($animal){
    
    foreach ($animal as $row){
    
    if( $row->status == "Dead"){
        
        
    } 
    
    else {

            $randomValue = rand(0,20);

            $currentHealth = $row->health;

            $newHealth = $currentHealth - $randomValue;


            $row->health = $newHealth;


            if($newHealth < 30) {
                                $row->status = "Dead";
                                }


        
        }
    
    
            showStats($row);
};

    
}



function feedAnimal($animal){
       // Call random value before so to apply to All Animals of type
     $randomValue = rand(10,25);
    
//run health update
foreach ($animal as $row){
     
    if( $row->status == "Dead"){
        
        
    } 
    
    else {

        

            $currentHealth = $row->health;

            $newHealth = $currentHealth + $randomValue;

            if($newHealth > 100){$newHealth = 100; };
        
        
            $row->health = $newHealth;


           
          
        
        }
    
      showStats($row);
};
}




?>