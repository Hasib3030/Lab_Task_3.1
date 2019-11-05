<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['gender']))
        { echo " Your Gender Is: ".$_POST['gender'];}
        else
        {echo "Mark Your Gender !"; }
    }
    
?>