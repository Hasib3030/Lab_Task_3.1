
<!DOCTYPE html>
<html>
<head> 
Enter Your name
</head>
<body>
    <form  method="POST" action="#">
        <fieldset >
             <legend>
              NAME
             </legend>
            <input type="name" name="name"><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['name']==null)
        {echo "Null";}
       
        else
        { echo "Your Name Is : ".$_POST['name'];}
    }
    
?>
