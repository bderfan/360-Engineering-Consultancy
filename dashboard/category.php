
     <?php
       require('sidebar.php'); 
     ?>
<!-- Begin Page Content -->
  <div style="background-image: url('../images/Exterior1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; position: relative;">
        <?php
            if(isset($success)){
          ?>
          <div class="alert alert-warning fw-bold" role="alert" name="success" style="position: absolute; z-index: 999; width:100%;">
            <?php print $success['success']; ?>
          </div>
          <?php
             header('Refresh:1,url=category');
             }
          ?> 
                <div class="mt-3 container-fluid py-5 px-2" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">
                    <!-- Page Heading -->
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Category</h1>
                    </div>
                       <div class="d-flex align-items-center justify-content-center mb-4">
                         <button class="btn btn-dark" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" data-bs-toggle="modal" data-bs-target="#exampleModal">Add category</button>
                    </div>

           

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">

                            <div class="table" style="width: 100%;">
         <table class="table table-striped" style="background: #92b1d0;">
      <?php
          if(mysqli_num_rows($categories)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($category = mysqli_fetch_assoc($categories)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Name" style="font-family: Mona Sans, sans-serif;"><?php echo $category['name']; ?></td>
      <td data-label="Image">
          <div class="d-flex justify-content-center">
            <img src="../images/category_image/<?php echo $category['image']; ?>" style="height: 146px; width:178px;" alt="<?php echo $category['name']; ?>">
          </div>
      </td>
      <td data-label="Update">
         <button class="btn btn-light" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" data-bs-toggle="modal" data-bs-target="#exampleModal2_<?php echo $category['id'];?>">Update category</button>
        <div class="modal fade" id="exampleModal2_<?php echo $category['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content" style="background: #c8c8c8;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif; font-size: 40px;">Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=79023&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1;"></button>
      </div>
      <div class="modal-body">
        <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
             <input type="hidden" name="updateId" value="<?php echo $category['id'];?>">
  <div class="mb-3">
    <label for="Name" class="form-label" style=" font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name" value="<?php echo $old['Name']?? $category['name']??''; ?>">
  </div>
       <div class="mb-3 d-flex justify-content-center">
       <div style="height: 200px; width:278px;">
            <img src="../images/category_image/<?php echo $category['image']; ?>" style="height: 100%; width:100%;" alt="<?php echo $category['image']; ?>">
          </div>
  </div>
   <div class="mb-3">
       <label class="form-label fw-bold" for="Image" style=" font-family: Mona Sans, sans-serif;">Upload Image</label>
       <input type="file" class="form-control" id="Image" name="Image" accept="image/*">
       <input type="hidden" name="old_image" value="<?php echo $category['image']; ?>">
        <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Image']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="update_category" style="font-family: Mona Sans, sans-serif;">Submit</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
      </td>
      <td data-label="Delete"><button class="btn btn-dark" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" onclick="if(!confirm('Do you want to delete <?php echo $category['name'];?> category?')){
                            return event.preventDefault();                                              
                          }else{
                            deleteCategory(<?php echo $category['id']?>);                                              
                          }">Delete category</button></td>
    </tr>
    <?php
               $x++;
          }
      }else{
    ?>      
     <tr>
      <th scope="col" colspan="8" class="fs-2" style="text-align: center; font-family: Alice, serif; font-size: 40px;">Sorry! no category here</th>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>   
      <form class="d-none" id="Deletedform" method="post">
               <input type="hidden" id="DeletedID" name="DeletedID">
             </form>
       </div>
                            
                        </div>
                        
                         <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content" style="background: #c8c8c8;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=79023&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1;"></button>
      </div>
      <div class="modal-body">
        <form class="Category_form mt-5 py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" id="Name" name="Name">
    <p class="fw-bold" style="font-size:15px; color: #FF9842;"> <?php echo $errors['Name']??'' ?></p>
  </div>
  <div class="mb-3">
       <label class="form-label fw-bold" for="Image">Upload Image</label>
       <input type="file" class="form-control" id="Image" name="Image" accept="image/*">
        <p class="fw-bold" style="font-size:15px; color: #FF9842;"> <?php echo $errors['Image']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="add_category">Submit</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>   
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

   
  
<?php
   require('footer.php');    
?>