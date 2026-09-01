
   <?php
     error_reporting(E_ERROR | E_PARSE);

     require('sidebar.php'); 
     require('../class_libs/ORDERCLASS.php');
     

     $old = $_POST;
     
     $orders = new ORDERCLASS;
     
     $rows = $orders->index();
    

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
                   

             


                    <!-- Content Row -->
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
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Invoice</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Total Price</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Total Payment</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Transaction ID</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Status</th>
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
      <td data-label="Name" style="font-family: Mona Sans, sans-serif;"><?php echo $row['name']; ?></td>
      <td data-label="Invoice" style="font-family: Mona Sans, sans-serif;"><?php echo $row['invoice']; ?></td>
       <td data-label="Total Price" style="font-family: Mona Sans, sans-serif;"><?php echo $row['total_bill']; ?></td>
      <td data-label="Total Payment" style="font-family: Mona Sans, sans-serif;"><?php echo $row['total_payment']; ?></td>
      <td data-label="Transaction ID" style="font-family: Mona Sans, sans-serif;"><?php echo $row['transaction_id']; ?></td>
       <td data-label="Status">
           <?php if($row['status'] == 0){
					     echo '<span class="badge bg-warning">Pending</span>';
				     }elseif($row['status'] == 1){
					     echo '<span class="badge bg-success">Approve</span>';
				     }elseif($row['status'] == 2){
					     echo '<span class="badge bg-danger">Cancel</span>';
				     } 
                   ?>   
      </td>
      <td>
           <div class="d-flex justify-content-center">
                     <a href="order-lists?invoice=<?php echo $row['invoice'];?>">
                       <button class="btn btn-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="10" height="15" class="d-flex align-items-center">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                          </svg>  
                        </button>  
                     </a>
                   </div>   
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
      
       </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

 
<?php
  require('footer.php');  
?>

