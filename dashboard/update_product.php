
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
                    <div class="d-flex align-items-center justify-content-end mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px;" href="product"><i class="fa-solid fa-angle-left"></i></a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
     <div style="width: 100%; margin: 0 auto;">
         <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="Prodct_category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Product category</label>
<input type="text" id="Prodct_category" name="Prodct_category" value="<?php echo $get_product['prdct_ctgry_name']??$old['Prodct_category']??'' ;?>">

    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Prodct_category']??'' ?></p>
  </div>
  <div class="mb-3">
       <label for="Prodct_sub_category" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Product Sub Category</label>
    <input type="text" id="Prodct_sub_category" name="Prodct_sub_category" value="<?php echo $get_product['prdct_sub_ctgry_name']??$old['Prodct_sub_category']??'' ;?>">



  </div>
 <div class="mb-3">
    <label for="Name" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $get_product['name']??$old['Name']??'' ;?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Name']??'' ?></p>
  </div>
   <div class="mb-3">
    <label for="Brand" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Brand/Company</label>
    <input type="text" id="Brand" name="Brand" value="<?php echo $get_product['brand']??$old['Brand']??'' ;?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Brand']??'' ?></p>
  </div>
   <div class="mb-3">
    <label for="Price" class="form-label fs-6 fw-bold" style="font-family: Mona Sans, sans-serif;">Price</label>
    <input type="number" id="Price" name="Price" value="<?php echo $get_product['price']??$old['Price']??'' ;?>">
   
  </div>
    <div class="mb-3 d-flex justify-content-center">
    <div style="height: 150px; width: 180px;">
            <img src="../images/upload/<?php echo $get_product['prdct_ctgry_name']?>/<?php echo $get_product['image'] ?>" style="height:100%; width:100%; object-fit:cover;" alt="<?php echo $get_product['name']; ?>">
          </div>
  </div>
    <div class="mb-3">
    <label for="Image" class="form-label fw-bold" style="font-family: Mona Sans, sans-serif;">Upload Image</label>
    <input type="file" class="form-control" id="Image" name="Image">
     <input type="hidden" name="old_img" value="<?php echo $get_product['image']; ?>">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Image']??'' ?></p>
  </div>


            
             
  
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="update_product" style="font-family: Mona Sans, sans-serif;">Update</button>
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