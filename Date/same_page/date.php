<!DOCTYPE html>
<html>
<head>
Date Of Birth
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
           <input type="date" name="dob" /><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['dob']))
        { echo " Your DOB Is: ".$_POST['dob'];}
        else
        {echo "Mark Your DOB "; }
    }
    
?>