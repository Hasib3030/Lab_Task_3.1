<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['degree']))
        { echo " Your Degree Is: ".$_POST['degree'];}
        else
        {echo "Mark Your Degree "; }
    }
    
?>