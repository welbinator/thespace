<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
  
  
  
  </title>
</head>
<body>
  
   <?php
     $files = glob("img/team/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
            echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
             echo '<img loading="lazy" src="'.$image .'" alt="Random image" />'."<br /><br />";
            } else {
                continue;
            }
          }
       ?>
</body>
</html>