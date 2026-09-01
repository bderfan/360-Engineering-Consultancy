
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
                    <div class="d-flex align-items-center justify-content-end mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px;" href="project"><i class="fa-solid fa-angle-left"></i></a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
     <div style="width: 100%; margin: 0 auto;">
         <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="Category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Project category</label>
    <select class="form-select" aria-label="Default select example" id="Category" name="Category">
  <option value="<?php echo $get_project['category_name']??'' ; ?>" selected><?php echo $get_project['category_name']; ?></option>
  <option></option>
  <?php
     if(mysqli_num_rows($categories)>0){
         while($category = mysqli_fetch_assoc($categories)){   
  ?>
  <option value="<?php $old['Category']??'' ; ?>" style="font-family: Mona Sans, sans-serif;"><?php echo $category['name']; ?></option>
  <?php
         }
        }
  ?>
</select>
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Category']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="Name" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $get_project['name']??$old['Name']??'' ;?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Name']??'' ?></p>
  </div>
    <div class="mb-3 d-flex justify-content-center">
    <div style="height: 250px; width: 350px">
             <video autoplay muted loop width="100%" style="height: 100%; width:100%; object-fit: cover;">
             <source src="../videos/upload/<?php echo $get_project['category_name']; ?>/<?php echo $get_project['video']; ?>" type="video/mp4">
             Your browser does not support the video tag.
           </video>
          </div>
  </div>
    <div class="mb-3">
    <label for="Video" class="form-label fw-bold" style="font-family: Mona Sans, sans-serif;">Upload Video</label>
    <input type="file" class="form-control" id="Video" name="Video" accept="video/*">
     <input type="hidden" name="old_video" value="<?php echo $get_project['video']; ?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Video']??'' ?></p>
  </div>
  <div class="mb-3">
    <?php
    $images = json_decode($get_project['image'], true);
    if (!empty($images)) {
        foreach ($images as $index => $img) {
            ?>
            <div class="mb-3">
                <div class="mb-2 d-flex justify-content-center">
                    <img src="../images/project_image/<?php echo $get_project['category_name'].'/'.$get_project['name'].'/'.$img; ?>" 
                         style="height:150px;width:200px;object-fit:cover;" alt="<?php echo $img; ?>">
                </div>
                <label class="form-label fw-bold" for="Image2_<?php echo $index; ?>">
                    Replace Image <?php echo $index+1; ?>
                </label>
                <input type="file" class="form-control" id="Image2_<?php echo $index; ?>" name="Image2[]" accept="image/*">
                 <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Image2']??'' ?></p>
                <!-- keep old filename -->
                <input type="hidden" name="old_image[]" value="<?php echo htmlspecialchars($img, ENT_QUOTES); ?>">
            </div>
            <?php
        }
    }
    ?>
</div>

            
             
  
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="update_project" style="font-family: Mona Sans, sans-serif;">Update</button>
  </div>
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