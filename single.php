<?php include "includes/header-single.php"; ?>
<div class="container-fluid posts">
<!--        <h2 class="" data-aos="fade-up">My Ramblings</h2><br> -->
      <div class="row align-items-stretch">
   

            <!-- Blog Entries Column -->
            <div id="single-post-container" itemscope itemtype="http://schema.org/Article">
<!--                <h2 class="text-white mb-4 text-center">My Ramblings</h2> -->

                
              <?php

              if(isset($_GET['p_id'])) {

                $the_post_id = $_GET['p_id'];


              }

$query =    "SELECT * FROM posts WHERE post_id = $the_post_id";
              

//               $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
              $select_all_posts_query = mysqli_query($connection, $query);

              while($row = mysqli_fetch_assoc($select_all_posts_query)) {

                    $post_title = $row['post_title'];
                   
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                   
                   
                    ?>


              

                <!-- First Blog Post -->
                <img loading="lazy" itemprop="image" class="img-responsive" src="img/posts/<?php echo $post_image; ?>" alt="<?php echo $post_title; ?>">
              <h2>
                  <span itemprop="headline"><?php echo $post_title ?></span>
                </h2>
              <hr class="category-divider">
              <h6 class="categories-meta"><?php echo $post_category; ?></h6>
                <hr class="category-divider">
                  <p class="lead">
                    by <span  itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name">James Welbes</span></span>
                </p>
                <p><span class="glyphicon glyphicon-time" Posted on <span itemprop="datePublished"><?php echo $post_date ?></span></span></p>
                <hr>
                
                <hr>
              <div class="post-content" itemprop="articleBody"><?php echo $post_content ?></div>
<!--                 <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a> -->

                <hr>
                <div class="sharethis-inline-share-buttons"></div>


                 <?php } ?>




              
          

              
              
                
                
              
              
                

               

            </div><!-- single post container -->
</div>
           <?php include "includes/footer.php"; ?>
