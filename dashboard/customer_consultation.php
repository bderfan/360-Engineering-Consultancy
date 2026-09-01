
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
             header('Refresh:1,url=customer_consultation');
             }
          ?> 
                <div class="mt-3 container-fluid" style="width: 100%; height: 100%; background: rgb(255 115 0 / 72%);">

                    <!-- Page Heading -->
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: Alice, serif; font-size: 40px;">Customer Consultation</h1>
                    </div>
                     

             


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-12">
                         <div class="table" style="width: 100%;">
         <table class="table table-striped" style="background: #92b1d0;">
        <?php
          if(mysqli_num_rows($consultations)>0){   
        ?>
  <thead>
    <tr>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">SL</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Name</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Email</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Phone no</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Appointment date</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Appointment time</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Property area</th>
      <th scope="col" style="font-family: Mona Sans, sans-serif;">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
          $x= 1;
          while($consultation = mysqli_fetch_assoc($consultations)){
              
    ?>
    <tr>
      <td data-label="SL">
        <?php 
              
              echo $x;
             
          ?>
      </td>
      <td data-label="Name" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Name']; ?></td>
      <td data-label="Email" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Email']; ?></td>
      <td data-label="Phone no" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Phone']; ?></td>
     <td data-label="Appointment date" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Appointment_date']; ?></td>
     <td data-label="Appointment time" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Appointment_time']; ?></td>
     <td data-label="Property area" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Sq_ft']; ?> Square feet</td>
     <td data-label="Address" style="font-family: Mona Sans, sans-serif;"><?php echo $consultation['Address']; ?></td>
    </tr>
    <?php
               $x++;
          }
      }else{
    ?>      
     <tr>
      <th scope="col" colspan="8" class="fs-2" style="text-align: center; font-family: Alice, serif; font-size: 40px;">Sorry! no consultation record here</th>
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