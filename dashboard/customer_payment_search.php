
     <?php
       require('sidebar.php'); 
     ?>

<?php
$conn = new mysqli("localhost", "groupcom_360_engineering", "360password#", "groupcom_360_engineering");

$search_results = [];

if(isset($_GET['search_transaction_id']) && strlen($_GET['search_transaction_id']) > 0){
    $search_id = $_GET['search_transaction_id'];
    
    $sql = "SELECT * FROM bank_transfers WHERE transaction_id LIKE '%$search_id%'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $search_results[] = $row;
        }
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
             header('Refresh:1,url=customer_payment');
             }
          ?> 
                <div class="mt-3 container-fluid p-5" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a class="btn btn-dark" style="padding:10px 30px;" href="customer_payment.php"><i class="fa-solid fa-angle-left"></i></a>
                    </div>

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12">

                               <div style="width: 100%;">
        <?php if(isset($_GET['search_transaction_id']) && strlen($_GET['search_transaction_id']) > 0): ?>
    <?php if(count($search_results) > 0): ?>
        <table class="table table-striped" style="background: #92b1d0;">
          <tr>
            <th>SL</th>
            <th>Customer Name</th>
            <th>Offer Name</th>
            <th>Transaction ID</th>
            <th>Amount</th>
            <th>Transfer Date</th>
            <th>Receipt</th>
            <th>Status</th>
            <th></th>
          </tr>
          <?php $x=1; foreach($search_results as $payment): ?>
            <tr>
              <th><?php echo $x++; ?></th>
              <td><?php echo $payment['name']; ?></td>
              <td><?php list($offerPart, $transactionPart) = explode("_", $payment['transaction_id'], 2); echo $offerPart; ?></td>
              <td><?php echo $payment['transaction_id']; ?></td>
              <td><?php echo $payment['amount']; ?></td>
              <td><?php echo $payment['transfer_date']; ?></td>
              <th><a class="text-dark fs-6" href="../uploads/<?php echo $payment['receipt']; ?>" target="_blank"><?php echo $payment['receipt']; ?></a></th>
              <th class="fs-5"><?php echo $payment['status']; ?></th>
              <td><a class="btn btn-light p-2" href="update_customer_payment.php?transaction_id=<?php echo urlencode($payment['transaction_id']); ?>">Update status</a></td>
            </tr>
          <?php endforeach; ?>
        </table>
    <?php else: ?>
        <table class="table table-striped" style="background: #92b1d0;">
          <tr>
            <th colspan="9" class="fs-2 text-center">Sorry! invalid search value</th>
          </tr>
        </table>
    <?php endif; ?>
<?php else: ?>
    <!-- Nothing searched yet, show only message -->
    <table class="table table-striped" style="background: #92b1d0;">
      <tr>
        <th colspan="9" class="fs-2 text-center">Sorry! no payment history here</th>
      </tr>
    </table>
<?php endif; ?>
       </div>
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

<?php
   require('footer.php');    
?>