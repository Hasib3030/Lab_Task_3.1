<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['group']==null)
        {echo "Null";}
        else
        { echo "Your Group Is : ".$_POST['group']; }
    }
    
?>