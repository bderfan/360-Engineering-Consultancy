
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
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Product Sub Category</h1>
                    </div>
                      <div class="d-flex align-items-center justify-content-center mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" href="add_prdct_sub_category.php">Add Sub Category</a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12">
                         <div class="table" style="width: 100%;">
         <table class="table table-striped" style="background: #92b1d0;">
        <?php
          if(mysqli_num_rows($prdct_sub_categories)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Category Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Name</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($prdct_sub_category = mysqli_fetch_assoc($prdct_sub_categories)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Product Category Name" style="font-family: Mona Sans, sans-serif;"><?php echo $prdct_sub_category['product_category_name']; ?></td>
      <td data-label="Name" style="font-family: Mona Sans, sans-serif;"><?php echo $prdct_sub_category['name']; ?></td>
      <td data-label="">
         <a class="btn btn-light p-2" href="update_product_sub_category?id=<?php echo $prdct_sub_category['id'];?>" style="font-family: Mona Sans, sans-serif;">Update product sub category</a>
          <button class="btn btn-dark mt-2 p-2" onclick="if(!confirm('Do you want to delete <?php echo $prdct_sub_category['name'];?> sub category?')){
                            return event.preventDefault();                                              
                          }else{
                            deletePrdctsubcategory(<?php echo $prdct_sub_category['id']?>);                                              
                          }" style="font-family: Mona Sans, sans-serif;">Delete product sub category</button>
      </td>
    </tr>
    <?php
               $x++;
          }
      }else{
    ?>      
     <tr>
      <th scope="col" colspan="8" class="fs-2" style="text-align: center; font-family: Alice, serif; font-size: 40px;">Sorry! no prodct sub category here</th>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>   
      <form class="d-none" id="Deletedprtctsubctgryform" method="post">
               <input type="hidden" id="DeletedprdctsubctgryID" name="DeletedprdctsubctgryID">
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