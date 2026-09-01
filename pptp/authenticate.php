  
    <main>
<?php
    require('../database.php');
        
   function admin_login(){
          
          $User = $_POST['User'];
          $Password = $_POST['Password'];
       
     
          $errors = [];
          
           
    
           $connection = db_connection();
           $sql_view = "SELECT * FROM admin_login WHERE user='$User' and password='$Password'";
    
           $result = mysqli_query($connection, $sql_view);       
     
           if(mysqli_error($connection)){
               die('Table error:'.mysqli_error($connection));
           }
           
           if(strlen($User) == 0){
               $errors['User'] = 'Empty User Name';
           }
           if(strlen($Password) == 0){
             $errors['Password'] = 'Empty Password';
           }else{
              
                  if($result->num_rows == 0){
                    $errors['Password'] = "Username/Password doesn't match";
                  }        
              
           }
           
           
           if(count($errors) > 0){
                return[
                   'status' => 'error',
                   'message' => $errors
               ];
           }else{
               $_SESSION['authenticate']= mysqli_fetch_assoc($result);
           #print_r($result);
          
           
           header('Location:../dashboard/dashboard');  
           }      
    
           
             

}
     
        
        function New_admin(){
          $User = $_POST['User'];
          $Password = $_POST['Password'];
          $Confirm_Password = $_POST['Confirm_Password'];
          
     
          $errors = [];
    
          $Connection = db_connection();
    

          if(strlen($User) == 0){
              $errors['User'] = 'Please input admin user name ...';
          }
          if(strlen($Password) == 0){
              $errors['Password'] = 'Please insert password ...';
          }
          if(strlen($Confirm_Password) == 0){
              $errors['Confirm_Password'] = 'This field can not be empty ...';
          }else{
              if($Password != $Confirm_Password){
                  $errors['Confirm_Password'] = 'Password is not matched ...';
              }
          }
          
         
        
           
           if(count($errors) > 0){
                return[
                   'status' => 'error',
                   'message' => $errors
               ];
           }
    
           $success = [];
           
           //print_r($Connection);
    
           $insert_query = "INSERT INTO admin_login(user, password) VALUES('$User', '$Password')";
    
           $result = mysqli_query($Connection,$insert_query);
    
           if(mysqli_error($Connection)){
               die('Table Error:'.mysqli_error($Connection));
           }else{
               $success['success'] = 'Data Saved Successfully!';
           }
            
           return[
               'status' => 'success',
               'message' => $success
           ];
    
          
           
              
}
?>
    </main>
      
