<?php


 

                  

if(isset($_POST['create_post'])) {
  
 

  $post_title = $_POST['title'];
 // $post_author = $_POST['author'];
  $post_category_id = $_POST['post_category'];
  $post_status = $_POST['post_status'];

  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  //$post_tags = $_POST['post_tags'];
  $post_content = escape($_POST['post_content']);
  $post_date = date('d-m-y');
//   $post_comment_count = 4;


  move_uploaded_file($post_image_temp, "../img/posts/$post_image");

  $query = "INSERT INTO posts(post_title, post_date, post_image, post_content, post_status) ";

  $query .= "VALUES('{$post_title}',now(),'{$post_image}','{$post_content}', '{$post_status}' ) ";

  $create_post_query = mysqli_query($connection, $query);

  confirm($create_post_query);

  $the_post_id = mysqli_insert_id($connection); // this apparently pulls the last created id from this db table

  echo "<p class='bg-success'>Post Updated. <a href='../post.php?p_id={$the_post_id}'>View Post</a></p>";
};


?>


<form action="" method="post" enctype="multipart/form-data"> <!-- enctype is because we're uploading an image -->

<div class="form-group"><label for="title">Post Title</label>
  <input type="text" class="form-control" name="title">
  </div>

 

  

  

  <div class="form-group">
    <label for="post_image">Post Image</label>
  <input type="file" class="form-control" name="image">
  </div>

<!--   <div class="form-group">
    <label for="post_tags">Post Tags</label>
  <input type="text" class="form-control" name="post_tags">
  </div> -->

  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control textarea-editor" name="post_content" id="wysiwyg" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
  <label for="post-status">Post Status</label>
  <input type="text" class="form-control" name="post_status">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
  </div>








</form>











