 <?php 

              if(isset($_GET['p_id'])) {

              $the_post_id = $_GET['p_id'];


              }

//               $query =    "
//               SELECT * FROM posts JOIN categories ON categories.cat_id = posts.post_category_id && posts.post_id = $the_post_id
//               ";


              $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
              $select_post_query = mysqli_query($connection, $query);

              while($row = mysqli_fetch_assoc($select_post_query)) {

              $post_title = $row['post_title'];
//               $post_author = $row['post_author'];
              $post_date = $row['post_date'];
              $post_image = $row['post_image'];

              $post_id = $row['post_id'];
              $post_exerpt = substr($row['post_content'],0, 200);



          ?>
      
<meta name="description" content="<?php echo $post_exerpt; ?>"/>
<link rel="canonical" href="https://cedarrapidscoworking.space/single.php?p_id=<?php echo $post_id; ?>" />
<link rel="publisher" href="https://cedarrapidscoworking.space"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $post_title; ?>" />
<meta property="og:description" content="<?php echo $post_exerpt; ?>" />
<meta property="og:url" content="https://cedarrapidscoworking.space/single.php?p_id=<?php echo $post_id; ?>" />
<meta property="og:site_name" content="James Welbes" />
<meta property="article:publisher" content="https://cedarrapidscoworking.space" />
<meta property="article:tag" content="freelance" />
<meta property="article:tag" content="how to be successful freelancer" />
<meta property="article:section" content="HTML" />
<meta property="article:published_time" content="<?php echo $post_date; ?>" />
<meta name="author" content="James Welbes">

<meta property="og:image" content="https://cedarrapidscoworking.space/images/posts/<?php echo $post_image; ?>" />
<meta property="og:image:secure_url" content="https://cedarrapidscoworking.space/images/posts/<?php echo $post_image; ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="auto" />
<meta property="og:image:alt" content=' <?php echo $post_title; ?>' />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="<?php echo $post_exerpt; ?>" />
<meta name="twitter:title" content="<?php echo $post_title; ?>" />

<meta name="twitter:image" content="https://cedarrapidscoworking.space/images/posts/<?php echo $post_image; ?>" />
      
      
      <?php } ?>