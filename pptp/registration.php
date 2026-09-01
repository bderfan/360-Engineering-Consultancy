<?php
 
  require('header.php');


 require('authenticate.php'); 
 
$connection = mysqli_connect('localhost', 'groupcom_360_engineering', '360password#', 'groupcom_360_engineering');

// Check if admin is already registered
$result = $connection->query("SELECT * FROM admin_login LIMIT 1");
$isAdminRegistered = $result->num_rows > 0;


 
  if(isset($_POST['login'])){
    $old = $_POST;
    $login = admin_login();
    if($login['status'] == 'error'){
        $errors = $login['message'];
    }
  }
  if(isset($_POST['Registration'])){
    $old = $_POST;  
    $new_admin = New_admin();
    if($new_admin['status'] == 'error'){
        $errors = $new_admin['message'];
    }
    if($new_admin['status'] == 'success'){
        $success = $new_admin['message'];
    }
  }
?>
      
    <main>
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
             header('Refresh:1,url=registration');
             }
          ?>  
      <!=========================== Login part ================================>
      <section id="Login" style="position: relative; background-image: url('../images/CEO_room.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 642px;">
        <div class="login_bg">
           <?php if (!$isAdminRegistered): ?>
          <form class="login_from py-5 px-2" method="post">
  <div class="mb-2">
    <label for="User" class="trnsfr_lbl form-label">User Name</label>
    <input type="text" class="form-control" id="User" name="User">
  </div>
   <p class="text-white fw-bold trnsfr_err"> <?php echo $errors['User']??'' ?></p>
  <div class="mb-2">
    <label for="Password" class="trnsfr_lbl form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
   <p class="text-white fw-bold trnsfr_err"> <?php echo $errors['Password']??'' ?></p>
  
 <div class="mb-2">
    <label for="Confirm_Password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password">
  </div>
   <p class="text-white fw-bold trnsfr_err"> <?php echo $errors['Confirm_Password']??'' ?></p>
  <div class="d-flex justify-content-center">
    <button type="submit" class="login_btn btn btn-white" name="Registration" style="font-family: Mona Sans, sans-serif;">Registration</button>
  </div>
   
</form>
           <?php else: ?>
             <form class="login_from py-5 px-2" style="position: absolute; top: 50%; left: 50%; width: 75%; transform: translate(-50%, -50%); background: #de6501e8;" method="post">
  <div class="mb-2">
    <label for="User" class="trnsfr_lbl form-label">User Name</label>
    <input type="text" class="form-control" id="User" name="User">
  </div>
   <p class="text-white fw-bold trnsfr_err"> <?php echo $errors['User']??'' ?></p>
  <div class="mb-2">
    <label for="Password" class="trnsfr_lbl form-label">Password</label>
    <div class="input-group">
    <input type="password" class="form-control" id="Password" name="Password">
    <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
      <i class="fa-solid fa-eye-slash"></i>
    </span>
  </div>
  </div>
   <p class="text-white fw-bold trnsfr_err"> <?php echo $errors['Password']??'' ?></p>
   

  <div class="d-flex justify-content-center">
    <button type="submit" class="login_btn btn btn-white" name="login" style="font-family: Mona Sans, sans-serif;">Login</button>
  </div>
  
</form>
    <?php endif; ?>
        </div>
      </section>

    </main>
      
<?php
  include('footer.php');
?>