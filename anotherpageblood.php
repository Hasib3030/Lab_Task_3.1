<!DOCTYPE html>
<html>
<head>
Blood Group Name
</head>
<body>
    <form method="POST" action="a.php">
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select name="group">
            <option value=""></option>
                
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>


<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['group']==null)
        {echo "Null";}
        else
        { echo "Your Group Is : ".$_POST['group']; }
    }
    
?>