<?php include 'includes/header.php'; ?>

<?php include 'includes/add_member.php'; ?>
<?php
              $query = "SELECT * FROM members";
              $select_all_members_query = mysqli_query($connection, $query);

              while($row = mysqli_fetch_assoc( $select_all_members_query)) {

              $member_name = $row['member_name'];
              $member_business = $row['member_business'];
              $member_website = $row['member_website'];
              $member_website = $row['member_facebook'];
              $member_website = $row['member_instagram'];
              $member_website = $row['member_twitter'];
              $member_website = $row['member_linkedin'];
              $member_image = $row['member_image'];
                    
                      
         ?>



 <div class='col-md-3 col-sm-4 col-xs-12'>
                        <div class='single-mentor'>
                            <div class='mentor-img'>
                                <a href='#'><img src='img/team/devin-green.jpg' alt='member'></a>
                                <div class='mentor-hover'>
                                    <h5><?php echo "$member_name"; ?></h5>
                                  <p><?php echo "$member_business"; ?></p>
                                    
                                    
                                    <ul>
                              <?php if($member_website) { echo "<li><a href='{$member_website}'; target='_blank'><i class='zmdi zmdi-globe'></i></a></li>";} ?>
                              <?php if($member_facebook) { echo "<li><a href='{$member_facebook}' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>"; } ?>
                              <?php if($member_twitter) { echo "<li><a href='{$member_twitter}' target='_blank'><i class='zmdi zmdi-twitter'></i></a></li>"; } ?>
                              <?php if($member_instagram) { echo "<li><a href='{$member_instagram}' target='_blank'><i class='zmdi zmdi-instagram'></i></a></li>"; } ?>
                              <?php if($member_linkedin) { echo "<li><a href='{$member_linkedin}' target='_blank'><i class='zmdi zmdi-linkedin'></i></a></li>"; } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>







<?php } ?>






 <?php include 'includes/footer.php'; ?>