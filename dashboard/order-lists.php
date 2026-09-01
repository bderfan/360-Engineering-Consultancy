
   <?php
      error_reporting(E_ERROR | E_PARSE);
     require('sidebar.php'); 
     require('../class_libs/ORDERCLASS.php');
     

     $old = $_POST;
     
     $orders = new ORDERCLASS;
     
     $order = $orders->getOrderlist($_GET['invoice']);
     $rows = $orders->getProducts($order['id']);

     if(isset($_POST['approve'])){
          $approve = $orders->Approved_order($_POST);
          
          if($approve['status'] == 'success'){
              $success = $approve['message'];
          }  
      
      }

     if(isset($_POST['delete'])){
          $delete = $orders->Delete_order($_POST);
          
          if($delete['status'] == 'success'){
              $success = $delete['message'];
          }  
      
      }
    

   ?>
<div style="background-image: url('../images/Exterior1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; position: relative;">
       <?php
            if(isset($success)){
          ?>
          <div class="alert alert-warning fw-bold" role="alert" name="success" style="position: absolute; z-index: 999; width:100%;">
            <?php print $success['success']; ?>
          </div>
          <?php
             header('Refresh:1,url=orders');
             }
          ?> 
                <div class="mt-3 container-fluid" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">

                    <!-- Page Heading -->
                   

             <h5 class="text-white fw-bold fs-1">Order Lists of <span class="text-black"><?php echo $order['invoice']; ?></span></h5>
        <a href="orders" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
        </a>

<div class ="container mt-5">
         <div class="row">
            <div class="col-6">
               <h5 class="text-black"><?php echo $order['invoice'];?></h5>
               <p class="my-1 text-black"><?php echo $order['name'];?></p>
             </div>
             <div class="col-6">
               <h6 class="text-black"><b>Total price:</b> <?php echo $order['total_bill']; ?></h6>
               <h6 class="text-black"><b>Total payment:</b> <?php echo $order['total_payment']; ?></h6>
             </div>
         </div>
    
      <div class="row">

                        <div class="col-12">
                         <div class="table-responsive" style="width: 100%;">
         <table class="table table-striped" style="background: #92b1d0;">
        <?php
          if(mysqli_num_rows($rows)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product ID</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Brand</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Price</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Quantity</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Image</th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($row = mysqli_fetch_assoc($rows)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Product ID" style="font-family: Mona Sans, sans-serif;"><?php echo $row['product_id']; ?></td>
      <td data-label="Product Name" style="font-family: Mona Sans, sans-serif;"><?php echo $row['product_name']; ?></td>
      <td data-label="Product Brand" style="font-family: Mona Sans, sans-serif;"><?php echo $row['product_brand']; ?></td>
       <td data-label="Product Price" style="font-family: Mona Sans, sans-serif;"><?php echo $row['product_price']; ?></td>
      <td data-label="Product Quantity" style="font-family: Mona Sans, sans-serif;"><?php echo $row['product_quantity']; ?></td>
        <td data-label="Product Image">
            <img src="../images/upload/<?php echo $row['prdct_ctgry_name']?>/<?php echo $row['image']?>" alt="<?php echo $row['name']?>" width="120" height="150">   
        </td>
    </tr>
    <?php
               $x++;
          }
      }else{
    ?>      
     <tr>
      <th scope="col" colspan="8" class="fs-2" style="text-align: center; font-family: Alice, serif; font-size: 40px;">Sorry! no order here</th>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>   
       <?php
               if($order['status'] == 0){
             ?>
               <form method="post">
                   <input type="hidden" name="invoice" value="<?php echo $order['invoice']; ?>">
                   <div class="container my-5">
                      <div class="row">
                        <div class="col-6 mx-auto">
                           <div class="row">
                             <div class="col-6">
                               <div class="d-flex justify-content-end">
                                 <button type="submit" name="delete" class="btn btn-warning">Delete</button>
                               </div>
                             </div>
                             <div class="col-6">
                               <div class="d-flex justify-content-start">
                                 <button type="submit" name="approve" class="btn btn-danger">Approve</button>
                               </div>
                             </div>
                           </div>
                        </div>
                      </div>
                    </div>
                 </form>
             <?php
               }else if($order['status'] == 1){
             ?>
               <form method="post">
                   <input type="hidden" name="invoice" value="<?php echo $order['invoice']; ?>">
                   <div class="container my-5">
                      <div class="row">
                        <div class="col-6 mx-auto">
                           <div class="row">
                             <div class="d-flex justify-content-center">
                               <button type="submit" name="delete" class="btn btn-warning">Delete</button>
                             </div>
                           </div>
                        </div>
                      </div>
                    </div>
                 </form>
             <?php
               }
             ?>
       </div>
                        </div>
          
          
         
                    </div>
       </div>
                    <!-- Content Row -->
                  

                </div>
                <!-- /.container-fluid -->

            </div>




  
<?php
  require('footer.php');  
?>

