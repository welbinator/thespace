<?php include "admin_header.php"; ?>

    <div id="wrapper">




        <!-- Navigation -->
       <?php include "admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Posts

                        </h1>


                       <?php

                      if(isset($_GET['source'])){

                        $source = escape_string($_GET['source']);

                      } else {

                        $source = '';
                      }


                      switch($source) { // this uses the URL to include particular pages
                        case 'add_post';
                        include "includes/add_post.php";
                        break;
                        case 'edit_post';
                        include "includes/edit_post1.php";
                        break;

                        default:

                          include "includes/view_all_posts.php";

                          break;
                      }


                      ?>







                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "admin_footer.php"; ?>
