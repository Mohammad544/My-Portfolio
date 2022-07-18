<?php
session_start();
include_once("db.php");

if(!isset($_SESSION['username'])){
    header("location: login.html");
    return;
}

if(!isset($_GET['post_id'])){
    header("location: viewBlog.php");
}
else{
    $post_id = $_GET['post_id'];
    $sql = "DELETE FROM blog WHERE id=$post_id";
    mysqli_query($conn, $sql);
    header("location: viewBlog.php");

}
?>