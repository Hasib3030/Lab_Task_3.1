<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['dob']))
        { echo " Your DOB Is: ".$_POST['dob'];}
        else
        {echo "Mark Your DOB "; }
    }
    
?>