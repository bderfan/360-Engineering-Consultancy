
     <?php
       require('sidebar.php'); 
     ?>

  <div style="background-image: url('../images/Exterior1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; position: relative;">
       <?php
            if(isset($success)){
          ?>
          <div class="alert alert-warning fw-bold" role="alert" name="success" style="position: absolute; z-index: 999; width:100%;">
            <?php print $success['success']; ?>
          </div>
          <?php
             header('Refresh:1,url=project');
             }
          ?> 
                <div class="mt-3 container-fluid" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">

                    <!-- Page Heading -->
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Project</h1>
                    </div>
                      <div class="d-flex align-items-center justify-content-center mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" href="add_project.php">Add project</a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12">
                         <div class="table" style="width: 100%;">
         <table class="table table-striped" style="background: #92b1d0;">
        <?php
          if(mysqli_num_rows($projects)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Category Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Video</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($project = mysqli_fetch_assoc($projects)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Category" style="font-family: Mona Sans, sans-serif;"><?php echo $project['category_name']; ?></td>
      <td data-label="Name" style="font-family: Mona Sans, sans-serif;"><?php echo $project['name']; ?></td>
      <td data-label="Video">
          <div style="height: 150px; width: 180px;">
             <video autoplay muted loop width="100%" style="height: 100%; width:100%; object-fit: cover;">
             <source src="../videos/upload/<?php echo $project['category_name']; ?>/<?php echo $project['video']; ?>" type="video/mp4">
             Your browser does not support the video tag.
           </video>
          </div>
      </td>
      <td data-label="Image">
          <?php
              $images = json_decode($project['image'], true);
               if (!empty($images)) {
          foreach ($images as $img) {
              echo '<div class="my-3" style="height:110px; width:140px;">';
              echo '<img src="../images/project_image/'.$project['category_name'].'/'.$project['name'].'/'.$img.'" style="height:100%; width:100%; object-fit:cover;" alt="'.$img.'">';
              echo '</div>';
          }
      }
          ?>
        
      </td>
      <td data-label="">
         <a class="btn btn-light p-2" href="update_project?id=<?php echo $project['id'];?>" style="font-family: Mona Sans, sans-serif;">Update project</a>
          <button class="btn btn-dark mt-2 p-2" onclick="if(!confirm('Do you want to delete <?php echo $project['name'];?> project?')){
                            return event.preventDefault();                                              
                          }else{
                            deleteProject(<?php echo $project['id']?>);                                              
                          }" style="font-family: Mona Sans, sans-serif;">Delete project</button>
      </td>
    </tr>
    <?php
               $x++;
          }
      }else{
    ?>      
     <tr>
      <th scope="col" colspan="8" class="fs-2" style="text-align: center; font-family: Alice, serif; font-size: 40px;">Sorry! no project here</th>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>   
      <form class="d-none" id="Deletedprtctform" method="post">
               <input type="hidden" id="DeletedprjectID" name="DeletedprjectID">
             </form>
       </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

<?php
   require('footer.php');    
?>