
<!DOCTYPE html>
<html>
<head> 
Enter Your Email
</head>
<body>
    <form  method="POST" action="#">
        <fieldset >
             <legend>
              EMAIL 
             </legend>
            <input type="email" name="email"><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['email']==null)
        {echo "Null";}
       
        else
        { echo "Your Mail Is : ".$_POST['email'];}
    }
    
?>