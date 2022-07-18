
<?php
    
    session_start();

    session_start();
    if(!isset($_SESSION['username'])){
    header("Location: login.php");
    die();
}
    include("db.php");
    //If form submitted, insert values into the database.
    if (isset($_POST['post_button'])){

      $title= $_POST['title'];
      $blog_post = $_POST['blog-post'];
      $current_date = date("jS F Y, H:i T");   
      date_default_timezone_set('UTC');
      

      if($title != '' && $blog_post != ''){
        $sql = "INSERT INTO blog (title, post, dateandtime) VALUES('$title', '$blog_post', '$current_date') ";
        $run_query = mysqli_query($conn, $sql);
        
        if($run_query){
          header("location: viewBlog.php");
        }
        else{
          header("location: addPost.php?post=failed");
        }
      }
  }
?>

