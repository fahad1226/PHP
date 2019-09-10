<?php session_start();
require_once('database_connect.php');
?>
<?php require_once('header.php'); ?>

<?php
    if (!isset($_COOKIE['currentUser'])) {
        header("location: login.php");
    }
 ?>

 <div class="container">
     <form  action="post_core.php" method="post" >
         <div class="form-group">
           <label for="comment">whats on your mind?</label>
            <textarea name="post" class="form-control" rows="5" id="post"></textarea>
           <button type="submit" class="btn btn-secondary" id="postbtn" >Post</button>
         </div>
     </form>
 </div>


         <?php

         $dbmail = $_COOKIE['currentUser'];
         $all_data = "SELECT * FROM baikka_table WHERE auth = '$dbmail'";
         $runquery = mysqli_query($dbConnect,$all_data);

         $getData = mysqli_fetch_array($runquery);
         $name = $getData['fname'].' '.$getData['lname'] ;
         // while ($getData = mysqli_fetch_array($runquery)) {
         //     //echo "<pre>" . var_dump($getData) . "</pre>";
         //     echo "<br>";
         //     echo $getData['fname']." ".$getData['lname'];
         //     $image = $getData['dp'];
         //     echo "<br>";
         //     echo "<img src='Images/$image.png'>";
         // }

         ?>

         <div class="container">
             <h4><?php echo $name ?></h4>
             <?php

             $postShow = "SELECT * FROM user_posts";
             $runpostquery = mysqli_query($dbConnect,$postShow);
             if ($runpostquery == true) {
                while ($getPost = mysqli_fetch_array($runpostquery)) {
                    echo 
                }
             }



              ?> </strong> </p>
         </div>

         <?php

         ?>


 <?php require_once('footer.php'); ?>
