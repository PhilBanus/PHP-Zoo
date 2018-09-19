<?php 
//create Animal Class
class animal {
    
  

    public $health = 100;
    
    public $status = "Alive";
    
    public $colourStatus = "success";
    
   
   
}



//define Animal Types
class elephant extends animal {
    
    public $type = 'Elephant';
    public $death = 70;
    public $sick = 70;
    
}

class monkey extends animal {
    
    public $type = 'Monkey';
    public $death = 30;
    public $sick = 50;
    
}

class giraffe extends animal {
    
    public $type = 'Giraffe';
    public $death = 50;
    public $sick = 70;
    
}





?>