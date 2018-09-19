 <?php 
                // Set Time Zone to Europe
               date_default_timezone_set('Europe/London');
                
                // Define Date Variable
                $date = new DateTime();

                // Get number of additional hours (clicked hours)
                $hours = $_GET["hours"];
                
                // add hours to current datetime
                date_add($date, date_interval_create_from_date_string($hours.' hours'));
                
                // display date and time 
               echo $timestamp = $date->format('l d F Y').'<br>'.$date->format('H:i:s a');
              



// when hour naturally passes harm animals 
// dont +1 to hours or it will not show the natural progression of time
// using Minutes and Seconds to show hour change 

if($date->format('i:s') == "00:00"){
   
    ?>



<script>

    window.location.href = "addHour.php?action=time&hours=<?php echo $hours ?>"


</script>


<?php
    
    
    
}
                
                
                ?>