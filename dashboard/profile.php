
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
             header('Refresh:1,url=profile');
             }
          ?> 
                <div class="container-fluid" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">
       
                    <!-- Page Heading -->
                    <div class="mt-3 d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Profile</h1>
                        
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
<form id="login_from" style="background: #de6501e8;" class="py-5 px-2" method="post" enctype="multipart/form-data">
 <div class="d-flex justify-content-center my-5">
    <div class="border border-black border-4 rounded-circle p-4">
    <img class="prf_img" src="<?php 
        if (!empty($admin['image'])) {
            echo '../images/admin_image/' . $admin['image'];
        } else {
            echo '../images/man_icon.png';
        }
     ?>" alt="<?php echo $admin['image']; ?>"> 
    </div>
  </div>
   <div class="mb-3">
       <label class="form-label fw-bold text-white" for="Image" style=" font-family: Mona Sans, sans-serif;">Upload Image</label>
       <input type="file" class="form-control" id="Image" name="Image" accept="image/*">
       <input type="hidden" name="admin_image" value="<?php echo $admin['image']; ?>">
        <p class="fw-bold" style="font-size:15px; color: #000; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Image']??'' ?></p>
  </div>
  <div class="mb-2">
    <label for="User" class="form-label fw-bold text-white" style="font-family: Mona Sans, sans-serif;">User Name</label>
    <input type="text" class="form-control" id="User" name="User" value="<?php echo $admin['user']??$old['User']??'';?>">
  </div>
<div class="mb-2">
  <label for="Password" class="form-label fw-bold text-white" style="font-family: Mona Sans, sans-serif;">Password</label>
  <div class="input-group">
    <input type="password" class="form-control" id="Password" name="Password" value="<?php echo $admin['password']??$old['Password']??''; ?>">
    <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
      <i class="fa-solid fa-eye-slash"></i>
    </span>
  </div>
</div>
   <div class="d-flex justify-content-center py-3">
    <button class="btn btn-dark" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" name="Update">Update</button>
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