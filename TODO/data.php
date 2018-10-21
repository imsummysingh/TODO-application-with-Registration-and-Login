<?php
        session_start();
        if (isset($_POST['email'])) 
        {
            if (empty(($_POST['email'])) || 
             empty(($_POST['psw'])) || empty(($_POST['psw-repeat']))) 

            {
                echo "All the fields are required";
            }
            
            else {
                $conn = new mysqli("localhost", 'root', '');
                $conn->select_db("todo");
                $email = $_POST['email'];
                $password = $_POST['psw'];
                $confirm_password = $_POST['psw-repeat'];
        
                $sql="INSERT INTO register(`email`, `password`, `confirm_password`) 
                VALUES ('$email' ,'$password','$confirm_password')";
                $conn->query($sql);
                if($conn==TRUE)
                {
                    $success="Success";
                    $_SESSION['success']=$success;
                    header("Location:index.php");
                }
            }
        }
    ?>