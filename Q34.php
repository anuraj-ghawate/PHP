<?php
$name=$email=$jtype=$location=$info="";
$skills=[];
$errors=[];

if(empty($_GET['name']))
    {
        $errors['name']="please enter your name";
    } else {
        $name=$_GET['name'];
    }

if(empty($_GET['email']))
    {
        $errors['email']="please enter your email";
    } elseif(!filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
    {
        $errors['email']="invalid email format";
    } else {
        $email=$_GET['email'];
    }

if(empty($_GET['jobtype']))
    {
        $errors['jobtype']="select job type";
    } else {
        $jtype=$_GET['jobtype'];
    }
if(empty($_GET['skills']))
    {
        $errors['skills']="pls select skills";
    } else {
        $skills=$_GET['skills'];
    }

if(empty($_GET['location']))
    {
        $errors['location']="please select location";
    } else {
        $location=$_GET['location'];
    }

$info=$_GET['info'];

if(!empty($errors))
    {
        echo "ERRORS:";
        echo "<br>";
        foreach($errors as $key=>$value)
            {
                echo "$key:$value<br>";
            }
    } else {
        echo "your details:<br>";
        echo "name:$name<br>";
        echo "email:$email<br>";
        echo "job type:$jtype<br>";
        echo "location:$location<br>";
        echo "skills:".implode(",",$skills)."<br>";
        echo "Additional Information: $info<br>";
    }
?>