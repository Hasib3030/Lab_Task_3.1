<!DOCTYPE html>
<html>
<head>
Degree
</head>
<body>
    <form method="POST" action="a.php">
        <fieldset>
            <legend> DEGREE </legend>
            <input type="radio" name="degree" value="SSC"> SSC
            <input type="radio" name="degree" value="HSC"> HSC
            <input type="radio" name="degree" value="BSc"> BSC
            <input type="radio" name="degree" value="MSc"> MSC<br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['degree']))
        { echo " Your Degree Is: ".$_POST['degree'];}
        else
        {echo "Mark Your Degree "; }
    }
    
?>