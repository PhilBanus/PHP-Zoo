<?php 

// ensure no session data left on restart

session_destroy();
    
// redirect to main page
    header("Location: index.php");
die();
    
    ?>