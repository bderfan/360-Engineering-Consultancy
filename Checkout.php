<?php
   error_reporting(E_ERROR | E_PARSE);
  include('header.php');
 
  require_once('class_libs/HOMECLASS.php');

  $home = new HOMECLASS;

  if(isset($_POST['remove_btn'])){
      $home->Removeproduct($_POST);
      print_r($_POST);
  } 

   if(isset($_POST['goto_customer_details']) && (isset($_SESSION['cartList']) && $_SESSION['cartList']['customer_details']['status'] == 0)){
      //$home->Removeproduct($_POST);
      //print_r($_POST); 
     $goto_customer_details = $home->confirm_checkout($_POST);
       if($goto_customer_details['status'] == 'success'){
          $success = $goto_customer_details['message'];
      }
      //print_r($_SESSION['cartList']);  
  } 

  if(isset($_POST['customer_details']) && (isset($_SESSION['cartList']) && $_SESSION['cartList']['customer_details']['status'] == 1)){
      //$home->Removeproduct($_POST);
      //print_r($_POST); 
      $old = $_POST;
      $customer_details = $home->customer_details($_POST);
     if($customer_details['status'] == 'success'){
          $success = $customer_details['message'];
      }
      //print_r($_SESSION['cartList']);  
  } 

  if(isset($_POST['goto_payment_details']) && (isset($_SESSION['cartList']) && $_SESSION['cartList']['payment_details']['status'] == 0)){
      //$home->Removeproduct($_POST);
      $home->confirm_payment($_POST);
     
     // print_r($_SESSION['cartList']);  
  } 

    if(isset($_POST['payment_details']) && (isset($_SESSION['cartList']) && $_SESSION['cartList']['payment_details']['status'] == 1)){
      //$home->Removeproduct($_POST);
      //print_r($_POST); 
      $old = $_POST;
      $payment_details = $home->payment_details($_POST);
      if($payment_details['status'] == 'error'){
        $errors = $payment_details['message'];
      }
      if($payment_details['status'] == 'success'){
          $success = $payment_details['message'];
      }
      //print_r($_SESSION['cartList']);  
  } 
  
?>

<!-- ============================== Banner part ========================= -->
<main>    


    


    
<!-- =================================== Service part ================================== -->
    
<section id="service" class="section-padding text-center bg-warning">
  <div class="container">
        <div class= "row">
           <?php
            if(isset($success)){
             ?>
             <div class="alert alert-success fw-bold" role="alert" name="success">
               <?php print $success['success']; ?>
             </div>
             <?php
                header('Refresh:2,url=Checkout');
                }
             ?>
           <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
              <div class="table" style="width: 100%;">
             <?php
                if(isset($_SESSION['cartList'])){
             ?>
               <table class="table table-light table-striped">
                 <tr>
                <th scope="col" style="font-family: Mona Sans, sans-serif;">Product Details</th>
                <th scope="col" style="font-family: Mona Sans, sans-serif;">Quantity</th>
                <th scope="col" style="font-family: Mona Sans, sans-serif;">Price</th>
                <th scope="col" style="font-family: Mona Sans, sans-serif;">Subtotal</th>
                 </tr> 
              <?php
                 if(count($_SESSION['cartList']['items']) > 0){
                     $total=0;
                     foreach($_SESSION['cartList']['items'] as $item){
              ?>
                  <tr>
                   <td data-label="Product Details">
                     <div class="d-flex gap-2">
                       <img src="images/upload/<?php echo $item['Category']; ?>/<?php echo $item['Image']; ?>" alt="<?php echo $item['Name']; ?>" style="height:50px; width:50px;">  
                       <div class="text-start">
                         <h6><?php echo $item['Name']; ?><br></h6> 
                         <form method="post">
                            <input type="hidden" name="remove_id" value="<?php echo $item['id'];?>">
                            <button type="submit" name="remove_btn" class="bg-transparent border-0 text-danger text-center">Delete</button>  
                         </form>
                       </div>
                     </div>     
                   </td> 
                    
                   <td data-label="Quantity"><?php echo $item['Quantity']; ?></td> 
                   <td data-label="Price"><?php echo $item['Price']; ?></td> 
                   <td data-label="Subtotal"><?php echo $subtotal=($item['Quantity']*$item['Price']); ?></td> 
                 </tr> 
              <?php
                    $total += $subtotal;
                     }
                 }else{
                     
              ?>
                 <tr>
                   <td colspan="4">No product available</td>  
                 </tr>   
              <?php
                 }   
              ?>
                 <tr>
                   <td class="fw-bold text-start ps-2" colspan=4>Total: <?php echo $total??0; ?></td>  
                   
                 </tr>
             
            
               </table>
             <?php
                }
             ?>
             </div>
             <?php
               if(isset($total) && $total>0){
             ?>
              <form method="post" enctype="multipart/form-data">
             <?php  
                  if($_SESSION['cartList']['customer_details']['status'] > 0){
             ?>
              <div class="border border-dark border-4 my-5 px-4">
                 
                
           
             </div>
             <?php
              }if($_SESSION['cartList']['payment_details']['status'] > 0){
             ?> 
             <div class="border border-dark border-4 my-5 px-4">
                  <h3 class="text-center text-black my-2 fw-bold">Payment Information</h3>
                  <div class="my-3 ms-0">
                   <h3 class="bank_transfer1">Bank Transfer Instructions</h3>
                   <p class="pymnt_trnsfr">Please transfer the payment to:</p>
                 <ul style="text-align: center;">
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Bank:</span> NRBC Bank PLC</li>
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Account Name:</span> 360 ENGINEERING & CONSULTANCY</li>
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Account Number:</span> 523233300002913</li>
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Branch:</span> Mirpur Branch</li>
        </ul>
            <p class="pymnt_trnsfr_optn my-2 text-center fw-bold">OR</p>
        <ul style="text-align: center;">
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Bank:</span> DBBL</li>
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Account Name:</span> THREE SIXTY ENGINEERING AND CONSULTANCY</li>
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Account Number:</span> 1151100047399</li>
            <li class="pymnt_trnsfr_optn"><span class="fw-bold">Branch:</span> Mirpur Branch</li>
        </ul>
       
                      
                 <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
      
            

    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>

  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $total??'' ?>" readonly>
    <p class="fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
 

 

      
                </div>
             
              </div>
              <?php
               } 
                   $CART = $_SESSION['cartList'];
                   $CART_status = $CART['customer_details']['status'] == 1 ? 'customer_details' : ($CART['customer_details']['status'] == 2 && $CART['payment_details']['status'] == 0 ? 'goto_payment_details' : ($CART['payment_details']['status'] == 1 ? 'payment_details' : 'goto_customer_details'));
                 ?>
                 <button class="btn btn-dark" type="submit" name="<?php echo $CART_status; ?>" id="checkoutBtn">Check out now</button>
               </form>
               
            <?php
               }
            ?>
           </div>
        </div>
    </div>      
</section>
   
    


   
    
 
</main>

<?php
 include('footer.php');
?>