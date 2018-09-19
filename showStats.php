<?php 


// when called shows a place holder for an animal
// php variables are used to set Classes/ Images / Health etc

function showStats($animal){ 

    
    
    ?> 





<div class="position-relative h-50 w-20 text-center pl-4 pr-4 <?php echo $animal->type.$animal->number; ?>" style="left: 0px; right: 0px">

    <img src="img/SVG/<?php echo $animal->type.$animal->status ?>.svg" alt="<?php echo $animal->type ?>" class="<?php echo $animal->type.$animal->status ?> w-50">
<br>
    <span class="health badge badge-<?php  echo $animal->colourStatus ?>"><?php  
        
        if($animal->status == "Dead"){ echo "DEAD"; } else { echo $animal->health."%"; }
        
        
        ?></span>
    
  </div>  

<!--- move animals if alive 
        if animals are sick move them slower (elephant excluded)
        if animals are dead - do not move (include sick elephant)
        Animal Timings are random to remove uniform movement 
        basic movement left and right looped 
--->
<script>

    
    if ( "<?php print $animal->status ?>" === "Alive") {
        
         loop<?php echo $animal->type.$animal->number; ?>( );
    
        
        function loop<?php echo $animal->type.$animal->number; ?>(){
         $(".<?php echo $animal->type.$animal->number; ?>").animate({
            right: '50px',
             left: '0px',
        }, <?php echo rand(500,1000) ?>, 'linear', function() {
            $(".<?php echo $animal->type.$animal->number; ?>").animate({
            right: '0px',
             left: '50px',
        }, <?php echo rand(500,1000) ?>, 'linear', function(){
                loop<?php echo $animal->type.$animal->number; ?>();
            } );
        });
       
        }
        
        
    
} else {
    
    
    if ( "<?php print $animal->type ?>" != "Elephant" && "<?php print $animal->status ?>" === "Sick" ) {
         
        
        loop<?php echo $animal->type.$animal->number; ?>( );
    
        
        function loop<?php echo $animal->type.$animal->number; ?>(){
         $(".<?php echo $animal->type.$animal->number; ?>").animate({
            right: '50px',
             left: '0px',
        }, <?php echo rand(2000,4000) ?>, 'linear', function() {
            $(".<?php echo $animal->type.$animal->number; ?>").animate({
            right: '0px',
             left: '50px',
        }, <?php echo rand(2000,4000) ?>, 'linear', function(){
                loop<?php echo $animal->type.$animal->number; ?>();
            } );
        });
       
        }
        
        
    
} else {
   
}
    
    
    
   
}
    
   
    
    
    
                    


</script>



<?php
  


}





?>




