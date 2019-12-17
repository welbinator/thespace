

<?php


if(isset($_POST['create_member'])) {

  $member_id = $_POST['member_id'];
  $member_name = $_POST['member_name'];
  $member_business = $_POST['member_business'];
  $member_website = $_POST['member_website'];
  $member_faebook = $_POST['member_facebook'];

  $member_image = $_FILES['image']['name'];
  $member_image_temp = $_FILES['image']['tmp_name'];

  $member_instagram = $_POST['member_instagram'];
  $member_twitter = $_POST['member_twitter'];
  $member_linkedin = $_POST['member_linkedin'];
  $member_bio = $_POST['member_bio'];
  
//   $post_comment_count = 4;


  move_uploaded_file($member_image_temp, "../images/$member_image");

  $query = "INSERT INTO members(member_id, member_name, member_business, member_website, member_facebook, member_image, member_instagram, member_twitter, member_linkedin) ";

  $query .= "VALUES({$member_id},'{$member_name}','{$member_business}','{$member_website}','{$member_facebook}','{$member_image}','{$member_instagram}','{$member_twitter}','{$member_linkedin}' ) ";

  $create_member_query = mysqli_query($connection, $query);

  confirm($create_member_query);

  $the_member_id = mysqli_insert_id($connection); // this apparently pulls the last created id from this db table

  echo "<p class='bg-success'>member Updated. <a href='../member.php?p_id={$the_member_id}'>View member</a></p>";
};

?>
<form action="" method="post" enctype="multipart/form-data"> <!-- enctype is because we're uploading an image -->

<div class="form-group"><label for="title">Member Name</label>
  <input type="text" class="form-control" name="member_name">
  </div>

 

  <div class="form-group">
    <label for="member_business">Member Business</label>
  <input type="text" class="form-control" name="author">
  </div>

  <div class="form-group">

    <select class="" name="member_website">
      <option value="">Member Website</option>
      <option value="Published">Published</option>
      <option value="Draft">Draft</option>
    </select>

  </div>

  <div class="form-group">
    <label for="member_image">member Image</label>
  <input type="file" class="form-control" name="image">
  </div>

  <div class="form-group">
    <label for="member_tags">Member Facebook</label>
  <input type="text" class="form-control" name="member_facebook">
  </div>

  <div class="form-group">
    <label for="member_content">Member Instagram</label>
    <textarea class="form-control" name="member_instagram" id="body" cols="30" rows="10"></textarea>
  </div>
  
   <div class="form-group">
    <label for="member_content">Member Twitter</label>
    <textarea class="form-control" name="member_twitter" id="body" cols="30" rows="10"></textarea>
  </div>
  
   <div class="form-group">
    <label for="member_content">Member LinkedIn</label>
    <textarea class="form-control" name="member_linkedin" id="body" cols="30" rows="10"></textarea>
  </div>
  
  <div class="form-group">
    <label for="post_content">Member Bio</label>
    <textarea class="form-control" name="member_bio" id="body" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_member" value="Publish member">
  </div>








</form>


