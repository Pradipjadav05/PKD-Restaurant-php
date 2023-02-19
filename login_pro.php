<?php
	session_start();
    if(isset($_POST['login']))
    {
        extract($_POST);
        include 'database.php';
        $sql=mysqli_query($conn,"SELECT * FROM user where email='$email' and pass='$pass'");

        // $sql=mysqli_query($conn,"SELECT * FROM user where email='".$_POST['email']."' and pass='".$_POST['pass']."' ");
        $row  = mysqli_fetch_array($sql);
        if(is_array($row))
        {
            $_SESSION["email"]=$row['email'];
            $_SESSION["name"]=$row['name']; 
            header("Location: home.php"); 
        }
        else
        {
            echo "<script>alert('Invalid Email ID/Password')</script>"; 
            header("Location: index.php"); 
        }
    }
?>