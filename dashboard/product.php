
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
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Product</h1>
                    </div>
                      <div class="d-flex align-items-center justify-content-center mb-4">
                         <a class="btn btn-dark" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" href="add_product.php">Add product</a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12">
                         <div class="table-responsive" style="width: 100%;">
         <table class="table table-striped table-responsive" style="background: #92b1d0;">
        <?php
          if(mysqli_num_rows($products)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Category Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Sub Category Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Brand/Company</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Image</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Price</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product ID</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($product = mysqli_fetch_assoc($products)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Category Name" style="font-family: Mona Sans, sans-serif;"><?php echo $product['prdct_ctgry_name']; ?></td>
       <td data-label="Sub Category Name" style="font-family: Mona Sans, sans-serif;"><?php echo $product['prdct_sub_ctgry_name']; ?></td>
      <td data-label="Name" style="font-family: Mona Sans, sans-serif;"><?php echo $product['name']; ?></td>
      <td data-label="Brand/Company" style="font-family: Mona Sans, sans-serif;"><?php echo $product['brand']; ?></td>
      <td data-label="Image">
          <div style="height: 150px; width: 180px;">
            <img src="../images/upload/<?php echo $product['prdct_ctgry_name']?>/<?php echo $product['image'] ?>" style="height:100%; width:100%; object-fit:cover;" alt="<?php echo $product['name']; ?>">
          </div>
      </td>
     <td data-label="Price" style="font-family: Mona Sans, sans-serif;"><?php echo $product['price']; ?></td>
     <td data-label="Product ID" style="font-family: Mona Sans, sans-serif;"><?php echo $product['product_id']; ?></td>
      <td data-label="">
         <a class="btn btn-light p-2" href="update_product?id=<?php echo $product['id'];?>" style="font-family: Mona Sans, sans-serif;">Update product</a>
          <button class="btn btn-dark mt-2 p-2" onclick="if(!confirm('Do you want to delete <?php echo $product['name'];?> product?')){
                            return event.preventDefault();                                              
                          }else{
                            deleteProduct(<?php echo $product['id']?>);                                              
                          }" style="font-family: Mona Sans, sans-serif;">Delete product</button>
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
      <form class="d-none" id="Deletedprdctform" method="post">
               <input type="hidden" id="DeletedprdctID" name="DeletedprdctID">
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