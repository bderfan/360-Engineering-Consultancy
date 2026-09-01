
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
             header('Refresh:1,url=product_sub_category');
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
         <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post">
  <div class="mb-3">
    <label for="Category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Product category</label>
    <select class="form-select" aria-label="Default select example" id="Product_Category" name="Product_Category">
  <option value="<?php echo $get_prdct_ctgry['product_category_name']??'' ; ?>" selected><?php echo $get_prdct_ctgry['product_category_name']; ?></option>
  <option></option>
  <?php
     if(mysqli_num_rows($prdct_sub_categories)>0){
         while($prdct_sub_category = mysqli_fetch_assoc($prdct_sub_categories)){   
  ?>
  <option value="<?php $old['Category']??'' ; ?>" style="font-family: Mona Sans, sans-serif;"><?php echo $prdct_sub_category['name']; ?></option>
  <?php
         }
        }
  ?>
</select>
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Product_Category']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="Name" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $get_prdct_ctgry['name']??$old['Name']??'' ;?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Name']??'' ?></p>
  </div>


            
             
  
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="update_product_sub_ctgry" style="font-family: Mona Sans, sans-serif;">Update</button>
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