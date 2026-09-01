
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px;" href="project"><i class="fa-solid fa-angle-left"></i></a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto" style="background: rgb(65 30 0 / 72%);">

                            
 <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="Category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Project category</label>
    <select class="form-select" aria-label="Default select example" id="Category" name="Category">
  <option selected></option>
  <?php
     if(mysqli_num_rows($categories)>0){
         while($category = mysqli_fetch_assoc($categories)){   
  ?>
  <option value="<?php echo $category['name']; ?>" style="font-family: Mona Sans, sans-serif;"><?php echo $category['name']; ?></option>
  <?php
         }
        }
  ?>
</select>
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Category']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="Name" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $old['Name']?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Name']??'' ?></p>
  </div>
    <div class="mb-3">
    <label for="Video" class="form-label fw-bold" style="font-family: Mona Sans, sans-serif;">Upload Video</label>
    <input type="file" class="form-control" id="Video" name="Video" accept="video/*">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Video']??'' ?></p>
  </div>
 <div class="mb-3 text-center">
    <label for="imageCount" class="form-label fw-bold">How many images do you want to upload (max 5)?</label>
      <div class="d-flex justify-content-center">
    <input type="number" class="form-control" id="imageCount" name="imageCount" value="<?php echo $old['imageCount'] ?>" min="0" max="5" style="width: 25%;">
  </div>
      <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['imageCount']??'' ?></p>
  </div>
      <div id="imageInputs"></div>
       <?php if (!empty($errors['Image'])): ?>
<script>
  var imageErrors = <?php echo json_encode($errors['Image']); ?>;
</script>
<?php endif; ?>

  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="add_project" style="font-family: Mona Sans, sans-serif;">Submit</button>
  </div>
</form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>



<?php
   require('footer.php');    
?>