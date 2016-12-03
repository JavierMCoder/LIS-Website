<?php 
$link = mysqli_connect('localhost','root','123', "saboreando"); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 
echo 'Connection OK'; 

if(empty($_POST['firstname']))
    {
        return false;
    }
     
    if(empty($_POST['lastname']))
    {
        return false;
    }
    if(empty($_POST['email']))
    {

        return false;
    }
     
    $username = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    echo $email; 
    try{
        if(!$link->query("INSERT INTO userstest (username, lastname, email) VALUES ('$username', '$lastname', '$email')")){
            echo "yeah";
        }
        else {
           echo "algo mamalon";
        }
    mysqli_close($link); 
    } catch(Exception $e){
        echo $e;
    }
    echo "cool";
?> 