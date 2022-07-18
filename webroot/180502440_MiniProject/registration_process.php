<?php

    session_start();

    require_once("db.php");

    if(isset($_POST['register'])){
        //POST ACTION TO REGISTER NEW USER 
        $username = ($_POST['username']);
        $password1 = ($_POST['password1']);
        $password2 = ($_POST['password2']);
        
        //ERROR CHECKING FOR EMPTY FIELDS
        if($password1 !== $password2){
            echo "<script>window.alert('Passwords do not match');document.location='registration.html'</script>";
            exit();
        }
        else{
            $query = " SELECT * FROM users WHERE username = '{$username}' ";
            $run_query = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($run_query) > 0){
                echo "<script>window.alert('This user already exists');document.location='registration.html'</script>";
            }
            else{
            $query = " INSERT INTO users(username, userpassword) VALUES ('$username', '$password1')";
            $run_query = mysqli_query($conn, $query);

            $_SESSION["run_query"] = $run_query;
                
            if($run_query == true){
                header("location: login.html?registration=success");
            }
            else{
                header("location: login.html?registration=failed");
            }
        }
    }
}
?>


