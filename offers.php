<?php
  include('header.php');
?>
    <main>
    
   <!=========================== Offer part ================================>

           <?php
            if(isset($success)){
          ?>
        <section id="Success">
            <div class="row">
             <div class="col-12">
                <div class="alert alert-warning fw-bold" role="alert" name="success" style="width: 100%;">
                   <?php print $success['success']; ?>
                 </div>
             </div>
            </div>
         </section>
          <?php
             header('Refresh:1,url=offers');
             }
          ?>  
        
        <section id="Offer">
  <div class="row">
    <!-- Marquee row -->
    <div class="col-12" style="background: #b52929;">
      <marquee style="font-family: Alice, serif; font-size: 40px;" scrollamount="10" scrolldelay="50" direction="left" class="fs-2 fw-bold">
        <span style="color: #fff;">Offer!
          <span style="margin-left: 500px;">Offer!</span>
          <span style="margin-left: 500px;">Offer!</span>
        </span>
      </marquee>
    </div>

    <!-- Background image row -->
    <div class="col-12 p-0 position-relative">
      <!-- Background image -->
      <img class="col_img" src="images/landscape3.jpeg" alt="landscape3" class="w-100">

      <!-- White overlay -->
      <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(255,255,255,0.58);">
        <div class="container h-100">
          <div class="row h-100">
            <!-- Left branch -->
            <div class="col-lg-6 col-md-12 col-sm-12">
             <img src="images/flat1.png" alt="flat1" style="width: 75%; height: 12%; margin: 0 auto; margin-top: 150px;">
              <img src="images/flat2.png" alt="flat2" style="width: 90%; height: 13%; margin: 0 auto; margin-top: 190px;">
               <img src="images/flat3.png" alt="flat3" style="width: 80%; height: 14%; margin: 0 auto; margin-top: 180px;">
        <h1 class="fw-bold" style="bottom: 350px; left: 50%; margin-top: 150px; font-family: Mona Sans, sans-serif;">Great offer at <span class="fs-1 fw-bold" style="display: inline-block; padding: 20px 40px; background: #ffda73;
background: linear-gradient(32deg, rgba(255, 218, 115, 1) 30%, rgba(196, 196, 196, 1) 100%); color: #000; clip-path: polygon(50% 0%, 100% 0, 95% 53%, 100% 100%, 68% 100%, 32% 100%, 0 100%, 5% 54%, 0 0); transform: rotate(-7deg); margin-left: 10px; font-family: Alice, serif; font-size: 40px;"> Sagufta!!!</span></h1>
        <h2 style="margin-top: 50px; font-family: Mona Sans, sans-serif;">Your dream's house is waiting at <br><span class="dream_mirpur fs-1 fw-bold"> Sagufta!!!</span></h2>
        
 <?php
require('database.php');

$connection = db_connection(); // important!

$sql = "SELECT flat, floor, status2 FROM bank_transfers";
$result = $connection->query($sql);

$booked = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $booked[$row['floor']][$row['flat']] = $row['status2'];

    }
}

$floors = [
    "9th & 10th Floor" => ["Studio Duplex","Economy Duplex 1","Economy Duplex 2","Luxury Duplex"],
    "8th Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "7th Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "6th Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "5th Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "4th Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "3rd Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "2nd Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
    "1st Floor"        => ["Studio","Economy 1","Economy 2","Luxury"],
];
?>

<div class="mt-5 p-3" style="background:#fff;">
    <div class="table" style="width:100%;">
<table class="table table-striped rounded rounded-4" border="1" cellpadding="0" cellspacing="0">
     <thead>
      <tr>
        <th scope="col">Floor</th>
        <th scope="col">Studio</th>
        <th scope="col">Economy 1</th>
        <th scope="col">Economy 2</th>
        <th scope="col">Luxury</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($floors as $floor => $flats): ?>
  <tr>
    <td><h6 class="fw-bold"><?php echo $floor; ?></h6></td>
    <?php foreach ($flats as $flat): 
      $class = (isset($booked[$floor][$flat]) && $booked[$floor][$flat]==1) ? 'booked' : 'vacant';
    ?>
      <td><p class="<?php echo $class; ?>"><?php echo $flat; ?></p></td>
    <?php endforeach; ?>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
  </div>
</div>


            </div>

            <!-- Right branch -->
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column">
                  
         <div class="px-5 mb-5 py-2 ndcol1st">
      <h2 class="text-dark fw-bold" style="font-family: Alice, serif; font-size: 30px;">Studio</h2>  
       <h2 class="text-dark mt-2" style="font-family: Alice, serif; font-size: 25px;">2 beds(1 flat)</h2>  
       <h2 class="text-dark mt-2" style="font-family: Alice, serif; font-size: 25px;">750 square feet</h2>  
    
    </div>
        
               <h3 class="mb-5" style="top: 5%; left: 50%; width: 100%; margin-top: 20px; font-family: Mona Sans, sans-serif;"><span>By only</span><span class="fs-1 fw-bold" style="display: inline-block; padding: 20px 40px; background: #AD1010;
background: linear-gradient(32deg, rgba(173, 16, 16, 1) 35%, rgba(245, 171, 0, 1) 99%); color: #fff; clip-path: polygon(50% 0%, 100% 0, 95% 53%, 100% 100%, 68% 100%, 32% 100%, 0 100%, 5% 54%, 0 0); transform: rotate(-7deg); font-family: Alice, serif; font-size: 40px;"> 25,000/-</span> <br><span style="margin-left: 170px;">you will get your dream's flat</span></h3>
     <div class="rounded-pill mt-5" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold" style="font-family: Mona Sans, sans-serif;">Down payment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">10,00,000/-</h6>
     </div> 
   </div>
    <div class="mt-3 rounded-pill" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold" style="font-family: Mona Sans, sans-serif;">Monthly installment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">25,000/- (for 4 years)</h6>
     </div> 
   </div>
       <div class="mt-3 rounded-pill" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold py-2" style="font-family: Mona Sans, sans-serif;">Big installment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">1,99,000/- (after 6 months total 8 times in 4 years)</h6>
     </div> 
   </div>
   
   
    <div class="px-5 mb-5 py-2" style="margin-top: 5rem; background: #e3e3e3; clip-path: polygon(5% 0, 100% 0%, 95% 100%, 0% 100%); width: 500px">
      <h2 class="text-dark fw-bold" style="font-family: Alice, serif; font-size: 30px;">Economy</h2>  
       <h2 class="text-dark mt-2" style="font-family: Alice, serif; font-size: 25px;">3 beds(2 flats)</h2>  
       <h2 class="text-dark mt-2" style="font-family: Alice, serif; font-size: 25px;">1125 square feet</h2>  
    
    </div>
        
               <h3 class="mb-5" style="top: 5%; left: 50%; width: 100%; margin-top: 20px; font-family: Mona Sans, sans-serif;"><span>By only</span><span class="fs-1 fw-bold" style="display: inline-block; padding: 20px 40px; background: #AD1010;
background: linear-gradient(32deg, rgba(173, 16, 16, 1) 35%, rgba(245, 171, 0, 1) 99%); color: #fff; clip-path: polygon(50% 0%, 100% 0, 95% 53%, 100% 100%, 68% 100%, 32% 100%, 0 100%, 5% 54%, 0 0); transform: rotate(-7deg); font-family: Alice, serif; font-size: 40px;"> 36,000/-</span> <br><span style="margin-left: 170px;">you will get your dream's flat</span></h3>
     <div class="rounded-pill mt-5" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold" style="font-family: Mona Sans, sans-serif;">Down payment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">15,00,000/-</h6>
     </div> 
   </div>
    <div class="mt-3 rounded-pill" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold" style="font-family: Mona Sans, sans-serif;">Monthly installment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">36,000/- (for 4 years)</h6>
     </div> 
   </div>
       <div class="mt-3 rounded-pill" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold py-2" style="font-family: Mona Sans, sans-serif;">Big installment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">2,99,000/- (after 6 months total 8 times in 4 years)</h6>
     </div> 
   </div>
   
   
   
   
   
    <div class="px-5 mb-5 py-2" style="margin-top: 5rem; background: #e3e3e3; clip-path: polygon(5% 0, 100% 0%, 95% 100%, 0% 100%); width: 500px">
      <h2 class="text-dark fw-bold" style="font-family: Alice, serif; font-size: 30px;">Luxury</h2>  
       <h2 class="text-dark mt-2" style="font-family: Alice, serif; font-size: 25px;">4 beds(1 flat)</h2>  
       <h2 class="text-dark mt-2" style="font-family: Alice, serif; font-size: 25px;">1875 square feet</h2>  
    
    </div>
        
               <h3 class="mb-5" style="top: 5%; left: 50%; width: 100%; margin-top: 20px; font-family: Mona Sans, sans-serif;"><span>By only</span><span class="fs-1 fw-bold" style="display: inline-block; padding: 20px 40px; background: #AD1010;
background: linear-gradient(32deg, rgba(173, 16, 16, 1) 35%, rgba(245, 171, 0, 1) 99%); color: #fff; clip-path: polygon(50% 0%, 100% 0, 95% 53%, 100% 100%, 68% 100%, 32% 100%, 0 100%, 5% 54%, 0 0); transform: rotate(-7deg); font-family: Alice, serif; font-size: 40px;"> 60,000/-</span> <br><span style="margin-left: 170px;">you will get your dream's flat</span></h3>
     <div class="rounded-pill mt-5" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold" style="font-family: Mona Sans, sans-serif;">Down payment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">25,00,000/-</h6>
     </div> 
   </div>
    <div class="mt-3 rounded-pill" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold" style="font-family: Mona Sans, sans-serif;">Monthly installment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">60,000/- (for 4 years)</h6>
     </div> 
   </div>
       <div class="mt-3 rounded-pill" style="background: #ffb87e; display:flex; overflow: hidden;">
     <div class="px-3 py-3" style="flex: 1;">
       <h6 class="my-0 fw-bold py-2" style="font-family: Mona Sans, sans-serif;">Big installment</h6>
     </div> 
     <div class="px-3 py-3" style="flex: 1; background: #6a6a6a;">
       <h6 class="my-0 text-white" style="font-family: Mona Sans, sans-serif;">4,99,000/- (after 6 months total 8 times in 4 years)</h6>
     </div> 
   </div>
    <h3 class="text-end me-5 fw-bold" style="font-family: Alice, serif; font-size: 30px; margin-top: 20rem;">It includes</h3>    
    <div class="d-flex justify-content-end mb-5">
    <div class="rounded-start-pill me-5" style="background: #ffb87e; width: 255px;">
       <div class="px-5 py-3">
       <h5 class="my-0" style="font-family: Mona Sans, sans-serif;">* 2 Bedrooms</h5>
       <h5 class="mt-2" style="font-family: Mona Sans, sans-serif;">* Gymnesium</h5>
       <h5 class="mt-2" style="font-family: Mona Sans, sans-serif;">* Swimming pool</h5>
     </div>     
    </div>
   </div>  
     <div class="d-flex justify-content-center">
         <div class="px-5 mb-1 py-2" style="background: #B20404; clip-path: polygon(5% 0, 100% 0%, 95% 100%, 0% 100%); width: 500px">
      <h2 class="text-white" style="font-family: Alice, serif; font-size: 30px;">Do you want to grab this opportunity?</h2>    
    </div>
   </div>
 
      
  <div class="d-flex justify-content-center">
       <div class="mt-5 text-center" style="height: 180px;">
          <label for="flatSelect" class="form-label fw-bold">Please choose flat category</label>
          <div class="d-flex justify-content-center">
           <select id="flatSelect" class="form-select" style="width: 100%;" name="flatSelect">
  <option value="Studio">Studio (750 sqft)</option>
  <option value="Economy 1">Economy 1 (1125 sqft)</option>
  <option value="Economy 2">Economy 2 (1125 sqft)</option>
  <option value="Luxury">Luxury (1875 sqft)</option>
</select>

   </div> 
      </div>
      
      
      <div class="mt-5 text-center ms-2" style="height: 180px;">
          <label for="flatSelect" class="form-label fw-bold">Please choose floor</label>
          <div class="d-flex justify-content-center">
           <select id="floorSelect" class="form-select" style="width: 100%;" name="floorSelect">
  <option value="1st Floor">1st Floor</option>
  <option value="2nd Floor">2nd Floor</option>
  <option value="3rd Floor">3rd Floor</option>
  <option value="4th Floor">4th Floor</option>
  <option value="5th Floor">5th Floor</option>
  <option value="6th Floor">6th Floor</option>
  <option value="7th Floor">7th Floor</option>
  <option value="8th Floor">8th Floor</option>
  <option value="9th & 10th Floor">9th & 10th Floor</option>
</select>

   </div> 
      </div>
     </div>
      
      
      <div class="d-flex justify-content-center">
         <div class="px-4 mb-5 py-2" style="background: #2d2d2d; clip-path: polygon(75% 0%, 83% 50%, 75% 100%, 0% 100%, 5% 50%, 0% 0%); width: 190px">
      <button class="btn fw-bold fs-3 text-white" id="openModalBtn" style="font-family: Alice, serif; font-size: 40px;">Pay us</button> 
                 <!-- Modal -->


    </div>
        
   </div>
      

        
    
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="modal_Studio_1stFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
   <div class="modal fade" id="modal_Studio_2ndFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>     
        
        
        <div class="modal fade" id="modal_Studio_3rdFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Studio_4thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        <div class="modal fade" id="modal_Studio_5thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        <div class="modal fade" id="modal_Studio_6thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        
        <div class="modal fade" id="modal_Studio_7thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Studio_8thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
    
        <div class="modal fade" id="modal_Studio_9th10thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Studio (750 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 10,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer" name="offer" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name" name="name" class="form-control" value="<?php echo $old['name']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $old['phone']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id" name="transaction_id" class="form-control" value="<?php echo $old['transaction_id']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount" name="amount" class="form-control" value="<?php echo $old['amount']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date" name="transfer_date" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt" name="receipt" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 25,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer2" name="offer2" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name2" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name2" name="name2" class="form-control" value="<?php echo $old['name2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone2" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $old['phone2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id2" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id2" name="transaction_id2" class="form-control" value="<?php echo $old['transaction_id2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id2']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount2" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount2" name="amount2" class="form-control" value="<?php echo $old['amount2']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date2" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date2" name="transfer_date2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date2']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt2" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt2" name="receipt2" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt2']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer2">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 1,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer3" name="offer3" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name3" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name3" name="name3" class="form-control" value="<?php echo $old['name3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone3" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone3" name="phone3" class="form-control" value="<?php echo $old['phone3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id3" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id3" name="transaction_id3" class="form-control" value="<?php echo $old['transaction_id3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id3']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount3" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount3" name="amount3" class="form-control" value="<?php echo $old['amount3']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date3" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date3" name="transfer_date3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date3']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt3" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt3" name="receipt3" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt3']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer3">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
         <div class="modal fade" id="modal_Economy1_1stFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_2ndFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_3rdFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_4thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        
        <div class="modal fade" id="modal_Economy1_5thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_6thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_7thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_8thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        <div class="modal fade" id="modal_Economy1_9th10thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
        
        <div class="modal fade" id="modal_Economy2_1stFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
          <div class="modal fade" id="modal_Economy2_2ndFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
          <div class="modal fade" id="modal_Economy2_3rdFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
          <div class="modal fade" id="modal_Economy2_4thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
          <div class="modal fade" id="modal_Economy2_5thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
          <div class="modal fade" id="modal_Economy2_6thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
          <div class="modal fade" id="modal_Economy2_7thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
          <div class="modal fade" id="modal_Economy2_8thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
        
          <div class="modal fade" id="modal_Economy2_9th10thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Economy (1125 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 15,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer4" name="offer4" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name4" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name4" name="name4" class="form-control" value="<?php echo $old['name4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone4" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone4" name="phone4" class="form-control" value="<?php echo $old['phone4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id4" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id4" name="transaction_id4" class="form-control" value="<?php echo $old['transaction_id4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id4']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount4" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount4" name="amount4" class="form-control" value="<?php echo $old['amount4']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date4" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date4" name="transfer_date4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date4']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt4" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt4" name="receipt4" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt4']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer4">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 36,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer5" name="offer5" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name5" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name5" name="name5" class="form-control" value="<?php echo $old['name5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone5" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone5" name="phone5" class="form-control" value="<?php echo $old['phone5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id5" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id5" name="transaction_id5" class="form-control" value="<?php echo $old['transaction_id5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id5']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount5" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount5" name="amount5" class="form-control" value="<?php echo $old['amount5']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date5" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date5" name="transfer_date5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date5']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt5" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt5" name="receipt5" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt5']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer5">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 2,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer6" name="offer6" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name6" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name6" name="name6" class="form-control" value="<?php echo $old['name6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone6" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone6" name="phone6" class="form-control" value="<?php echo $old['phone6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id6" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id6" name="transaction_id6" class="form-control" value="<?php echo $old['transaction_id6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id6']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount6" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount6" name="amount6" class="form-control" value="<?php echo $old['amount6']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date6" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date6" name="transfer_date6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date6']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt6" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt6" name="receipt6" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt6']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer6">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
        
         <div class="modal fade" id="modal_Luxury_1stFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
         <div class="modal fade" id="modal_Luxury_2ndFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
         <div class="modal fade" id="modal_Luxury_3rdFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
         <div class="modal fade" id="modal_Luxury_4thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
         <div class="modal fade" id="modal_Luxury_5thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
         <div class="modal fade" id="modal_Luxury_6thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
         <div class="modal fade" id="modal_Luxury_7thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
        
         <div class="modal fade" id="modal_Luxury_8thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
        
        
        
         <div class="modal fade" id="modal_Luxury_9th10thFloor" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: Alice, serif;">Transaction</h1>
        <button type="button" class="btn-close p-0 m-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=dnWj68fbIjQS&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 25px; height: 25px; top: 3px; right: 3px;"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mt-5">
               <h1 class="down_payment fw-bold" class="text-center mb-5">Luxury (1875 square feet)</h1>  
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="pt-5">
          <h1 class="down_payment" class="text-center mb-5">Transaction of down payment (BDT 25,00,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
        <div class="d-flex justify-content-center">
            <form class="Category_form py-5 px-2 rounded rounded-4 mb-5" method="post" enctype="multipart/form-data">
                <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer7" name="offer7" class="form-control" value="Down payment offer">
  </div>
    <div class="mb-3">
    <label for="name7" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name7" name="name7" class="form-control" value="<?php echo $old['name7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['name7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone7" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone7" name="phone7" class="form-control" value="<?php echo $old['phone7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['phone7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id7" class="trnsfr_lbl form-label fw-bold" >Transaction ID:</label>
    <input type="text" id="transaction_id7" name="transaction_id7" class="form-control" value="<?php echo $old['transaction_id7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transaction_id7']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount7" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount7" name="amount7" class="form-control" value="<?php echo $old['amount7']??'' ?>">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['amount7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date7" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date7" name="transfer_date7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['transfer_date7']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt7" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt7" name="receipt7" class="form-control">
    <p class="trnsfr_err fw-bold text-white"><?php echo $errors['receipt7']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer7">Transfer</button>
  </div>
</form>
        </div>  
        </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of monthly installment (BDT 60,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer8" name="offer8" class="form-control" value="Monthly installment offer">
  </div>
    <div class="mb-3">
    <label for="name8" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name8" name="name8" class="form-control" value="<?php echo $old['name8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone8" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone8" name="phone8" class="form-control" value="<?php echo $old['phone8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id8" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id8" name="transaction_id8" class="form-control" value="<?php echo $old['transaction_id8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id8']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount8" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount8" name="amount8" class="form-control" value="<?php echo $old['amount8']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date8" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date8" name="transfer_date8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date8']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt8" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt8" name="receipt8" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt8']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer8">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="pt-5">
             <h1 class="down_payment text-center">Transaction of big installment (BDT 4,99,000)</h1>  
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
        <h5 class="trnsfr_rcpt fw-bold text-center mt-3 mb-5">**** After transfer through bank,<br>please upload the receipt below ****</h5>

         <h6 class="trnsctn_dta fw-bold text-center mt-5">**** Please give your transaction informations ****</h6> 
                  <div class="d-flex justify-content-center">
        <form class="Category_form py-5 px-2 rounded rounded-4" method="post" enctype="multipart/form-data">
            <input type="hidden" name="selected_flat" id="selected_flat">
<input type="hidden" name="selected_floor" id="selected_floor">
    <div class="mb-3">
    <input type="hidden" id="offer9" name="offer9" class="form-control" value="Big installment offer">
  </div>
    <div class="mb-3">
    <label for="name9" class="trnsfr_lbl form-label fw-bold">Your Name:</label>
    <input type="text" id="name9" name="name9" class="form-control" value="<?php echo $old['name9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['name9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="phone9" class="trnsfr_lbl form-label fw-bold">Your Phone Number:</label>
    <input type="text" id="phone9" name="phone9" class="form-control" value="<?php echo $old['phone9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['phone9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transaction_id9" class="trnsfr_lbl form-label fw-bold">Transaction ID:</label>
    <input type="text" id="transaction_id9" name="transaction_id9" class="form-control" value="<?php echo $old['transaction_id9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transaction_id9']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="amount9" class="trnsfr_lbl form-label fw-bold">Amount:</label>
    <input type="number" id="amount9" name="amount9" class="form-control" value="<?php echo $old['amount9']??'' ?>">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['amount9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="transfer_date9" class="trnsfr_lbl form-label fw-bold">Date of Transfer:</label>
    <input type="date" id="transfer_date9" name="transfer_date9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['transfer_date9']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="receipt9" class="trnsfr_lbl form-label fw-bold">Upload Receipt:</label>
    <input type="file" id="receipt9" name="receipt9" class="form-control">
    <p class="fw-bold text-white trnsfr_err"> <?php echo $errors['receipt9']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn trnsfr_btn" name="make_transfer9">Transfer</button>
  </div>
</form>
                  </div>
       </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div> 
   
<!=========================== Offer2 part ================================>
        
        

<section id="Offer2" style="margin-top: 100px;">
  <div class="row">
    <div class="col-12" style="background: #b52929;">
        <marquee scrollamount="10" scrolldelay="50" direction="left" class="fs-2 fw-bold text-white" style="font-family: Alice, serif; font-size: 40px;">Bang Offer!!!</marquee>
    </div>
      <div class="col-12 p-0 position-relative">
  <!-- Background image -->
  <img class="col_img2" src="images/landscape3.jpeg" alt="landscape3">

  <!-- White overlay -->
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: #664b1af2;">
    <div class="container py-5" style="position: absolute; top: 50%; transform: translateY(-50%);">
      <div class="row">
        <!-- Left branch -->
        <div class="col-lg-6 col-12 mb-4">
          <img src="images/kitchen_offer.png" alt="kitchen_offer" style="width:75%; height: 75%;">
        </div>

        <!-- Right branch -->
        <div class="col-lg-6 col-12">
           <h3 style="width:100%; text-align: center;"><span class="text-white" style="font-family: Mona Sans, sans-serif;">On the occasion of <span class="fs-1 fw-bold" style="font-family: Alice, serif; font-size: 50px;">Pahela Baisakh</span></span></h3>
        <h3 style="width:100%;"><span class="text-white kitchen_offer">you will get kitchen 3D</span><br><span class="text-white kitchenatonly_offer">at Only</span><br><span class="kitchenatonly_offer_price fs-1 fw-bold"> 1,433/-</span></h3>
   <div style="width:100%;"> 
  
   </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</section>  

    </main>


<?php
  include('footer.php');
?>