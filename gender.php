<!DOCTYPE html>
<html>
<head>
Gender Name
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend> GENDER </legend>
            <input type="radio" name="gender" value="Male"> MALE
            <input type="radio" name="gender" value="Female"> FEMALE
            <input type="radio" name="gender" value="Female"> OTHER<br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['gender']))
        { echo " Your Gender Is: ".$_POST['gender'];}
        else
        {echo "Mark Your Gender !"; }
    }
    
?>