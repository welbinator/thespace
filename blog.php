<?php include "includes/header.php"; ?>

	
              
              <h2 class="page-title">Blog</h2>
            <div class="blog-posts-container">    
         <?php
              
              
              if(isset($_GET['page'])) { //pagination
                
                $page = $_GET['page'];
              } else {
                $page = "";
                
              }
              
              if($page == "" || $page == 1) {
                $page_1 = 0;
              } else {
                
                $page_1 = ($page * 5) - 5;
                  
              }
              
              
              
              
              $post_query_count = "SELECT * FROM posts";
              $find_count = mysqli_query($connection, $post_query_count);
              $count = mysqli_num_rows($find_count);
              
              $count = ceil($count / 5);
              
              
            //   $query = "SELECT * FROM posts WHERE post_status = published LIMIT $page_1, 5";
            //   $query = "SELECT * FROM posts WHERE post_status = 'published' LIMIT $page_1, 5";
            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $page_1, 5";
            // $query = "SELECT * FROM POSTS";
              $select_all_posts_query = mysqli_query($connection, $query);
              
              while($row = mysqli_fetch_assoc( $select_all_posts_query)) {
                    
                    $post_id = $row['post_id'];
                    $post_status = $row['post_status'];
                    $post_title = $row['post_title'];
                    // $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'],0, 200);
                   
                    if ($post_status == 'published') {
                  
                
                    ?>


<div class="blog-posts" id="blog-posts">
          
         <div class="row mb-5" data-aos="fade-up">
            <div class="col-12">
             
            </div>
          </div>

          <div class="row">
            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="single.php?p_id=<?php echo $post_id; ?>"><img loading="lazy" src="img/posts/<?php echo $post_image; ?>" alt="Image" class="img-fluid"></a></div>
                <div class="blog-archive-content-box">
                  <h2 class="mt-0 mb-2"><a href="single.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                  <div class="meta mb-3">Posted by James on <?php echo $post_date ?></div>
                  <p><?php echo $post_content ?>...<a href="single.php?p_id=<?php echo $post_id; ?>">Read More.</a></p>
                  
                  
                </div>
              </div>
            </div>


           

            
          </div>
</div>

<?php } } ?>
</div> <!-- blog-posts-container -->


 <?php include "includes/members.php"; ?>
        <!-- Members Area End -->
        <!-- Partner Area Start -->
       <?php include "includes/partners.php"; ?>
        <!-- Partner Area End -->
        <!-- Footer Start -->
        <?php include "includes/footer.php"; ?>