<?php 

// get and set hours variable


$hours = $_GET["hours"] ?? 0;


?> 


<!doctype html>

<html>
<head>
  <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
    
    
    <!--- fonts and css ---->

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     
    
<title>PHP Zoo</title>
    

    
    
    
    
    <link href="https://www.banuscv.co.uk/Bootstrap/custom.css" rel="stylesheet" type="text/css">
    <link href="https://www.banuscv.co.uk/Bootstrap/font/css/iconic-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://www.banuscv.co.uk/main.css" rel="stylesheet" type="text/css">
</head>

    
    
    <body class="bg-dark" style="overflow: scroll; min-height: 400px; min-width: 900px " >
        
              
   
       
         <!--- Set Monkey Container ---->
            <div class="row p-2 mx-auto border dark rounded position-absolute text-center border-warning" style="width: 90%; height: 25%; left:5%; top: 1%">
            
                
                <?php 
                
                

               // Activate stats and visuals for monkeys  -- showStats.php
                foreach ($_SESSION['monkey']  as $row){
  
                                            showStats($row);
                                        };
                
            
                ?>
                
                
            </div>
        
            
         <!--- Set Elephant Container ---->
            <div class="row p-2 mx-auto border rounded position-absolute border-warning" style="width: 90%; height: 25%; left:5%; top: 27% ">

              <?php 
                
                
                

               // Activate stats and visuals for elehants  -- showStats.php
                foreach ($_SESSION['elephant']  as $row){
  
                                            showStats($row);
                                        };
                
            
                ?>
                
            </div>

         <!--- Set Giraffe Container ---->
        <div class="row p-2 mx-auto border rounded position-absolute border-warning" style="width: 90%; height: 25%; left:5%; top: 53% ">
              <?php 
                
                

               // Activate stats and visuals for giraffes  -- showStats.php
                foreach ($_SESSION['giraffe']  as $row){
  
                                            showStats($row);
                    
                    
                    
                 
                                        };
                
            
                ?>
                
            </div>
 
          
            
        
        
        
        <!--- set footer nav options ----> 
            <div class="row p-2 mx-auto rounded position-absolute" style="width: 90%; height: 10%; left:5%; top: 80% ">        
            
                <div class="text-center w-100">
                
                
<a href="addHour.php?action=time&hours=<?php echo $hours+1 ?>" class="btn btn-outline-red"> Add an Hour </a>
<a href="addHour.php?action=feed&hours=<?php echo $hours ?>" class="btn btn-outline-success"> Feed zoo </a>
<a href="destroySession.php" class="btn btn-outline-warning"> Restart </a>
         
                    </div>
        
        
           
            
                
                <!--- show time ---> 
                <div id="timestamp" class="w-100 text-center text-white"></div>
                   
        <script>
       
       
        /* refresh time every second */
    setInterval(timestamp, 1000);


            
        /* load time text into #timestamp */
function timestamp() {
    $.ajax({
        url: 'time.php?hours='+<?php echo $hours ?>,
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
        
        </script>    

               
                
        
        </div>
        
        
        
        
  
    
                <?php 
    
    /// count alive animals if 0 alive accross the board then show alert to start again
    
    $monkeyDead = 0;
    $giraffeDead = 0;
    $elephantDead = 0; 
   
   
   // count monkeys that are alive and sick
foreach ($monkey as $item) {
   
    if( $item->status == "Alive" || $item->status == "Sick"){
        $monkeyDead++;
    }
    
    
}
   
   // count elephants that are alive and sick
   foreach ($elephant as $item) {
   
    if( $item->status == "Alive" || $item->status == "Sick"){
        $elephantDead++;
    }
    
    
}
   
   // count giraffes that are alive and sick 
   foreach ($giraffe as $item) {
   
    if( $item->status == "Alive" || $item->status == "Sick"){
        $giraffeDead++;
    }
    
    
}
   
  
   // if there are no alive animals than prompt user to start again. 
   
if($monkeyDead == 0 && $giraffeDead == 0 && $elephantDead == 0){
    
    ?>
                
                <script>
   alert("All the Animals are Dead, Click OK to start again.");
    location.href = "destroySession.php"; 
                    </script>
                
                <?php
}
   
   ?>
                  
       
        
        
        
 
         
        




<script src="http://code.jquery.com/jquery-latest.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
        
</body>





</html>
