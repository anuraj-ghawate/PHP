<?php
$name=$email=$gender=$country=$about="";
$hobbies=[];
$errors=[];

//validating name
if(empty($_GET['name']))
    {
        $errors['name']="name is required";
    } else {
        $name=$_GET['name'];
    }
//validating email
if(empty($_GET['email']))
{
    $errors['email']="email is required";
} elseif(!filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
{
    $errors['email']="Invalid email format";
} else {
    $email=$_GET['email'];
}

//validating gender
if(empty($_GET['gender']))
    {
        $errors['gender']="gender is required";
    } else {
        $gender=$_GET['gender'];
    }

//validating hobbies
    if(empty($_GET['hobbies']))
        {
            $errors['hobbies']="Select atleast one hobby";
        } else {
            $hobbies=$_GET['hobbies'];
        }

        //validating country
        if(empty($_GET['country']))
        {
            $errors['country']="pls select country";
        } else {
            $country=$_GET['country'];
        }

            $about =$_GET["about"];

            if(!empty($errors))
                {
                    echo "Errors:<br>";
                    foreach($errors as $key=>$value)
                    {
                        echo "$key:$value<br>";
                    }
                } else {
                    echo "Your Details<br>";
                    echo "Name:$name<br>";
                    echo "Email:$email<br>";
                    echo "Gender:$gender<br>";
                    echo "Country:$country<br>";
                    echo "Hobbies".implode(",",$hobbies)."<br>";
                    echo "About:$about<br>";
                }
?>