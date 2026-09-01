
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
             header('Refresh:1,url=product');
             }
          ?> 
                <div class="mt-3 container-fluid" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px;" href="product"><i class="fa-solid fa-angle-left"></i></a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto" style="background: rgb(65 30 0 / 72%);">

                            
 <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="Prodct_category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Product Category</label>
    <select class="form-select" aria-label="Default select example" id="Prodct_category" name="Prodct_category">
  <option selected></option>
  <?php
     if(mysqli_num_rows($prdct_categories)>0){
         while($$prdct_category = mysqli_fetch_assoc($prdct_categories)){   
  ?>
  <option value="<?php echo $$prdct_category['name']; ?>" style="font-family: Mona Sans, sans-serif;"><?php echo $$prdct_category['name']; ?></option>
  <?php
         }
        }
  ?>
</select>

    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Prodct_category']??'' ?></p>
  </div>
  
  <div class="mb-3">
       <label for="Prodct_sub_category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Product Sub Category</label>
    <select class="form-select" aria-label="Default select example" id="Prodct_sub_category" name="Prodct_sub_category">
  <option selected></option>
  <?php
     if(mysqli_num_rows($prdct_sub_categories)>0){
         while($prdct_sub_category = mysqli_fetch_assoc($prdct_sub_categories)){   
  ?>
  <option value="<?php echo $prdct_sub_category['name']; ?>" style="font-family: Mona Sans, sans-serif;"><?php echo $prdct_sub_category['name']; ?></option>
  <?php
         }
        }
  ?>
</select>

 <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Prodct_sub_category']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="Name" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $old['Name']?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Name']??'' ?></p>
  </div>
   <div class="mb-3">
    <label for="Brand" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Brand/Company</label>
    <input type="text" id="Brand" name="Brand" value="<?php echo $old['Brand']?>">
    
  </div>
   <div class="mb-3">
    <label for="Price" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Price</label>
    <input type="number" id="Price" name="Price" value="<?php echo $old['Price']?>">
   
  </div>
    <div class="mb-3">
    <label for="Image" class="form-label fw-bold" style="font-family: Mona Sans, sans-serif;">Upload Image</label>
    <input type="file" class="form-control" id="Image" name="Image">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Image']??'' ?></p>
  </div>


  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="add_product" style="font-family: Mona Sans, sans-serif;">Submit</button>
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