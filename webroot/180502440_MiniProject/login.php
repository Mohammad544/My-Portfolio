<?php
   
    session_start();

    // If form submitted, insert values into the database.
    if (isset($_POST['login'])){
            
        require("db.php");

        $username = ($_REQUEST['username']);
        $password = ($_REQUEST['password']);
        
        //Checking if the user exists in the database or not
        $query = "SELECT * FROM users WHERE username = '$username'and userpassword = '$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        $single_row = mysqli_fetch_array($result);
        $admin = $single_row['admin'];
            
        if($rows == 1){
            $_SESSION['username'] = $username;
            echo "<script>window.alert('Welcome User');document.location='addPost.php'</script>";

            if($admin == 1){
                $_SESSION['admin'] = 1;
            }
        }
        else{
            echo "<script>window.alert('Username or Password is incorrect');document.location='login.html'</script>";
        }
    }
?>

