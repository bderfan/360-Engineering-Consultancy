
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
             header('Refresh:1,url=customer_payment');
             }
          ?> 
                <div class="mt-3 container-fluid" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">

                    <!-- Page Heading -->
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Payment Status</h1>     
                    </div>

                     <div class="d-flex align-items-center justify-content-center mb-4">
                        <form class="d-flex" role="search" id="Search_form" method="get" action="customer_payment_search.php">
  <input class="me-2 searchinput border-bottom border-0 border-black" 
         type="search" 
         placeholder="Enter Transaction ID" 
         aria-label="Search" 
         name="search_transaction_id" 
         id="searchItem">
  <button type="button" class="btn btn-dark" onclick="toggleSearch()">
    <i class="fa-solid fa-magnifying-glass"></i>
  </button>
</form>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12">

                            
                       <div class="table-responsive" style="width: 100%;">
      
         <table class="table table-striped" style="background: #92b1d0;">
          

      <?php
              $x= 1;
          if(mysqli_num_rows($payments_status)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Customer Name</th>
       <th scope="col" style="font-family: Mona Sans, sans-serif;">Flat</th>
        <th scope="col" style="font-family: Mona Sans, sans-serif;">Floor</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Customer Phone Number</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Offer Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Transaction ID</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Amount</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Transfer Date</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Receipt</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Status</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Status2</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($payment_status = mysqli_fetch_assoc($payments_status)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Customer Name" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['name']; ?></td>
       <td data-label="Flat" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['flat']; ?></td>
        <td data-label="Floor" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['floor']; ?></td>
      <td data-label="Customer Phone Number" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['phone']; ?></td>
      <td data-label="Offer Name">
          <?php  
              list($offerPart, $transactionPart) = explode("_", $payment_status['transaction_id'], 2);
              echo $offerPart;
          ?>
      </td>
      <td data-label="Transaction ID" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['transaction_id']; ?></td>
      <td data-label="Amount" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['amount']; ?></td>
      <td data-label="Transfer Date" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['transfer_date']; ?></td>
      <td data-label="Receipt">
          <?php  
              list($offerPart2, $transactionPart2) = explode("_", $payment_status['transaction_id'], 2);
              if($offerPart2 == "Big installment offer"){
         ?>
           <a class="text-dark fs-6" href="../uploads3/<?php echo $payment_status['receipt']; ?>" target="_blank" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['receipt']; ?></a>
          <?php
              }elseif($offerPart2 == "Monthly installment offer"){
          ?>
           <a class="text-dark fs-6" href="../uploads2/<?php echo $payment_status['receipt']; ?>" target="_blank" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['receipt']; ?></a>
          <?php
              }elseif($offerPart2 == "Down payment offer"){
          ?>
          <a class="text-dark fs-6" href="../uploads/<?php echo $payment_status['receipt']; ?>" target="_blank" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['receipt']; ?></a>
          <?php
              }
          ?>
         
      </td>
     <td data-label="Status" style="font-family: Mona Sans, sans-serif;"><?php echo $payment_status['status']; ?></td>
     <td data-label="Status2" style="font-family: Mona Sans, sans-serif;"><?php echo ($payment_status['status2'] == 1 ? 'booked' : 'vacant'); ?></td>
     <td data-label=""><a class="btn btn-light p-2" href="update_customer_payment.php?transaction_id=<?php echo urlencode($payment_status['transaction_id']); ?>" style="font-family: Mona Sans, sans-serif;">Update status</a></td>
    </tr>
    <?php
               $x++;
          }
      }else{
    ?>      
     <tr>
      <th scope="col" colspan="8" class="fs-2" style="text-align: center; font-family: Alice, serif; font-size: 40px;">Sorry! no payment history here</th>
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
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

 
<?php
   require('footer.php');    
?>