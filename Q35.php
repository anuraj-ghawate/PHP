<?php
$name=$email="";
$nameErr=$emailErr="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST['name']))
            {
                $nameErr="Name Is Required";
            } else {
                $name=$_POST['name'];
            }

        if(empty($_POST['email']))
            {
                $emailErr="email is required";
            } else {
                if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                    {
                        $emailErr="Invalid Email Fromat";
                    } else {
                        $email=$_POST['email'];
                    }
            }
    }
?>

<html>
    <body>

    <h2> User Input Form </h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        Name:
        <input type="text" name="name" value="<?php echo "$name"; ?>">
        *<?php echo $nameErr; ?>
        <br><br>
        Email:
        <input type="email" name="email" value="<?php echo "$email"; ?>">
        *<?php echo $emailErr; ?>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
</form>

</body>
    </html>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST" && empty($nameErr) && empty($emailErr))
        {
            echo "your submited details<br>";
            echo "Name:$name<br>";
            echo "emaill:$email<br>";
        }
    ?>