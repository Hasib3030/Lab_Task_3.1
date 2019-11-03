<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['name']==null)
        {echo "Null";}
       
        else
        { echo "Your Name Is : ".$_POST['name'];}
    }
    
?>
