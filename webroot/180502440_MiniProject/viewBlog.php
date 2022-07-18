<?php

    session_start();

    require("db.php");


?>


<!DOCTYPE html>
<html> 
    <nav>
        <link href="PortfolioStyleSheet.css" rel="stylesheet" type="text/css"/> 
        <link href="reset.css" rel="stylesheet" type="text/css"/>
    </nav>
    
    <title>View Blog-Post Page</title>
    
    <body>

        <?php

            $sql = "SELECT * FROM blog ORDER BY id DESC";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            $posts='';

            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    
                    $id = $row['id'];
                    $title = $row['title'];
                    $post = $row['post'];
                    $dateandtime= $row['dateandtime'];
                    
                    
                    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
                        $delete = "</br></br><div class = 'delete'><a id='delete_link' href = 'delete_post.php?post_id=$id'>Delete Post</a></div>";
                        $posts .= "<div></br></br><p id = 'date-and-time'>$dateandtime</br></br></p><h2 id = 'title' >$title</h2></br></br><p id = 'post'>$post</p>$delete<hr></div>";
                    }
                    else{
                        $posts .= "<div></br></br><p id = 'date-and-time'>$dateandtime</br></br></p><h2 id = 'title' >$title</h2></br></br><p id = 'post'>$post</p><hr></div>";
                    }
            
                }
                echo $posts;
            }
            else{
                echo "<script>window.alert('There are currently no posts');document.location='index.php'</script>";
            }

            //Checks if the user is logged in. If not, the add post link will redirect user to the login page
            if(!isset($_SESSION['username'])){
                echo '<a id="add-post-link" name="add-post-link" href="login.html">Add Post</a>';
            }
            else{
                echo '<a id="add-post-link" name="add-post-link" href="addPost.php">Add Post</a>';
                echo '<a href="logout.php"><button id="log-out-2">Logout</button></a>';
            }

        ?>
        
    </body>

 </html>
