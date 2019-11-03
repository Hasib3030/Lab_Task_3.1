<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['email']==null)
        {echo "Null";}
       
        else
        { echo "Your Mail Is : ".$_POST['email'];}
    }
    
?>