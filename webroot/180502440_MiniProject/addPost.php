
<!DOCTYPE html>
<html>
	<head>

        <nav>
            <link href="PortfolioStyleSheet.css" rel="stylesheet" type="text/css"/>
            <link href="reset.css" rel="stylesheet" type="text/css"/>
        </nav>

        <title>Add Blog-Post Page</title>	

    </head>
    
    <body>

    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.html");
        die();
    }

    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
        echo '<a href="viewBlog.php"><button id="view_posts">View Posts</button></a>';
    }

    ?>

        <div class = "add-blog-page">

        <h2>Add Blog</h2>

        <form id="blogform" action="addPost_Process.php" method="post">
              
                <input type="text" id="titlebox" placeholder="Enter Title" name="title" > </br></br>
                
                <input type="text" id="postbox" placeholder="Enter Text" name="blog-post" > </br></br>

                <button onclick="emptyfieldvalidation()" type="submit" class="postbtn" id="postbutton" name="post_button">Post</button>

                <button onclick="return myFunction()" type="reset" class="clearbtn" id="clear-button">Clear</button>
             
        </form> 

         <script>

             //clear-button options
             function myFunction(){

                 return confirm("Press OK or Cancel");

             }

            function emptyfieldvalidation(){

                document.getElementById('blogform').onsubmit = function(event){

                var title_box = document.getElementById('titlebox');
                var post_box = document.getElementById('postbox');

                    if(title_box.value == "" || post_box.value == ""){

                        document.getElementById('titlebox').style.backgroundColor = "#B22222";
                        document.getElementById('postbox').style.backgroundColor = "#B22222";
                    
                        window.alert("Missing Fields");

                        event.preventDefault();

                    }
                }
            }   
    
        </script>


            <a href="logout.php"> <button id="log-out">Logout</button></a>

        </div>

    </body>
    
</html>