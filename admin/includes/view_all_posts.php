<?php

if (isset($_POST['checkBoxArray'])) {

  foreach($_POST['checkBoxArray'] as $postValueId ) {

    $bulk_options = $_POST['bulk_options'];

    switch($bulk_options) {

      case 'Published':

      $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id= {$postValueId} ";

      $update_to_published_status = mysqli_query($connection, $query);

      confirm($update_to_published_status);


      case 'Draft':

      $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id= {$postValueId} ";

      $update_to_draft_status = mysqli_query($connection, $query);

      confirm($update_to_draft_status);

      break;


            case 'delete':

            $query = "DELETE FROM posts WHERE post_id= {$postValueId} ";

            $update_to_delete_status = mysqli_query($connection, $query);

            confirm($update_to_delete_status);

            break;
        
     
         case 'clone':
        
        $query = "SELECT * FROM posts WHERE post_id = '{$postValueId}' ";
        $select_post_query = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_array($select_post_query)) {
          $post_title        = $row['post_title'];
          $post_category_id  = $row['post_category_id'];
          $post_date         = $row['post_date'];
          $post_author       = $row['post_author'];
          $post_status       = $row['post_status'];
          $post_image        = $row['post_image'];
          $post_tags         = $row['post_tags'];
          $post_content      = $row['post_content'];
        
        };
        
        $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status) ";
        $query .= "VALUES({$post_category_id}, '{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
                  $copy_query = mysqli_query($connection, $query);
                  
                  if(!$copy_query ) {
                  
                  die("QUERY FAILED" . mysqli_error($connection));
                  }
                  
                  break;
        
        
    }
  }
}

?>


<form action="" method="post">

<table class="table table-bordered table-hover">

  <div id="bulkOptionContainer" class="col-xs-4">

    <select class="form-control" name="bulk_options" id="">

      <option value="">Select Options</option>
      <option value="Published">Publish</option>
      <option value="Draft">Draft</option>
      <option value="delete">Delete</option>
       <option value="clone">Clone</option>

    </select>

  </div>

  <div class="col-xs-4">

    <input type="submit" name="submit" class="btn btn-success" value="Apply">
  <a href="posts.php?source=add_post" class="btn btn-primary">Add New</a>
  </div>


                        <thead>
                          <tr>
                           <th><input type="checkbox" id="selectAllBoxes"></th>
                            <th>Id</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Comments</th>
                            <th>Date</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>

                       <tbody>
                          <?php
                          $query = "SELECT * FROM posts ORDER BY post_id DESC";
                          $select_posts = mysqli_query($connection, $query);

                          while ($row = mysqli_fetch_assoc($select_posts)) {
                            $post_id = $row['post_id'];
                            $post_author = $row['post_author'];
                            $post_title = $row['post_title'];
                            $post_category_id = $row['post_category_id'];
                            $post_status = $row['post_status'];
                            $post_image = $row['post_image'];
                            $post_tags = $row['post_tags'];
                            $post_comment_count = $row['post_comment_count'];
                            $post_date = $row['post_date'];

                            echo "<tr>";

                            ?>


                         <td><input type='checkbox' class='checkBoxes' name='checkBoxArray[]' value='<?php echo $post_id; ?>' </td>
                            <?php
                            echo "<td>$post_id</td>";
                            echo "<td>$post_author</td>";
                            echo "<td>$post_title</td>";

                                $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} "; //"SELECT * FROM categories LIMIT 3" to limit to 3 categories
                                $select_categories_id = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc( $select_categories_id)) {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                }

                            echo "<td>$cat_title</td>";
                            echo "<td>$post_status</td>";
                            echo "<td><img width='100' src='../images/$post_image'></td>";
                            echo "<td>$post_tags</td>";
                            echo "<td>$post_comment_count</td>";
                            echo "<td>$post_date</td>";
                            echo "<td><a href='../post.php?p_id={$post_id}'>View</a></td>";
                            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                            echo "<td><a onclick=\"return confirm('Are you sure?');\" href='posts.php?delete={$post_id}'>Delet</a></td>";
                            echo "</tr>";



                          }

                          ?>



                        </tbody>

                      </table>

  </form>

<?php
if(isset($_GET['delete'])) {

 $the_post_id =  $_GET['delete'];

  $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
  $delete_query = mysqli_query($connection, $query);
  header("Location: posts.php");
};

?>