<?php
//checking get data
if(!empty($_GET['name_get']) && !empty($_GET['email_get']))
    {
        $name_get=$_GET['name_get'];
        $email_get=$_GET['email_get'];

        echo "GET Method Data Received<br>";
        echo "Name:$name_get<br>";
        echo "Email:$email_get<br>";

    }
//checking post data
if(!empty($_POST['name_post']) && !empty($_POST['email_post']))
    {
        $name_post=$_POST['name_post'];
        $email_post=$_POST['email_post'];

        echo "POST Method Data Received<br>";
        echo "Name:$name_post<br>";
        echo "Email:$email_post<br>";      
    }

    if((empty($_GET['email_get']) || empty($_GET['name_get'])) && (empty($_POST['name_post']) || empty($_POST['email_post'])))
        {
            echo "No Form Data Received";
        }

?>