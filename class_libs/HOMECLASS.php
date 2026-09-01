<?php
 error_reporting(E_ERROR | E_PARSE);
require_once('DATABASECLASS.php');

class HOMECLASS extends DATABASECLASS{

     public function Consultation_add(){
     
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $Phone =$_POST['Phone'];  
      $Appoint_date = $_POST['Appoint_date'];
      $Appoint_time = $_POST['Appoint_time'];
      $Square_ft= $_POST['Square_ft'];
      $Address = $_POST['Address'];
     
     
       $errors = [];
     
        
       if(strlen($Name) == 0){
              $errors['Name'] = 'Please insert your name...'; 
          }
        
        if(strlen($Email) == 0){
              $errors['Email'] = 'Please give email address...'; 
          }
         
        if(strlen($Phone) == 0){
              $errors['Phone'] = 'Please input your phone number...'; 
          }
         
        if(strlen($Appoint_date) == 0){
              $errors['Appoint_date'] = 'Please book your appointment date...'; 
          }
         
         if(strlen($Appoint_time) == 0){
              $errors['Appoint_time'] = 'Please book your appointment time...'; 
          }
         
         if(strlen($Square_ft) == 0){
              $errors['Square_ft'] = 'Please mention how many square feet of property do you have...'; 
          }
        
         if(strlen($Address) == 0){
              $errors['Address'] = 'Please give your address...'; 
          }
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_consulation_query = "INSERT INTO customer_consultation(Name, Email, Phone,  Appointment_date, Appointment_time, Sq_ft, Address)VALUES('$Name','$Email','$Phone','$Appoint_date','$Appoint_time','$Square_ft','$Address')";
        
           $result = $connection->query($insert_consulation_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Consultation form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }

    public function get_Category(){
     
    
           $connection = $this->connection;
          
    
           $view_category_query = "SELECT * FROM project_category";
        
           $result = $connection->query($view_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
 
 
   public function getProductsByCategory($n){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product WHERE prdct_ctgry_name='$n' ORDER BY name ASC,
         CAST(SUBSTRING(name, LOCATE('(', name) + 1, LOCATE('mm', name) - LOCATE('(', name) - 1) AS UNSIGNED) ASC";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
 
    
    
    
       public function getProductsByCategory2($n){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product WHERE prdct_ctgry_name='$n' ORDER BY id ASC LIMIT 1";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
 
 
    public function getSubCategoriesByCategory($m){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product_sub_category WHERE product_category_name='$m'";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
 
 
     public function getProductsBySubCategory($s){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product WHERE prdct_sub_ctgry_name='$s' ORDER BY name ASC,
         CAST(SUBSTRING(name, LOCATE('(', name) + 1, LOCATE('mm', name) - LOCATE('(', name) - 1) AS UNSIGNED) ASC";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
    
    
    
         public function getProductsBySubCategory2($s){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product WHERE prdct_sub_ctgry_name='$s' ORDER BY id ASC LIMIT 1";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
 
    public function get_product_ctgry(){
     
    
           $connection = $this->connection;
          
    
           $view_product_category_query = "SELECT * FROM product_category";
        
           $result = $connection->query($view_product_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
 
 
     public function get_product($m, $n){
     

     
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT *
                           FROM product 
                           WHERE name='$m' AND prdct_sub_ctgry_name='$n'";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
           
           
    
          return $result; 
   
           
 }
 
 
 public function get_cart_product($m){
     

     
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT *
                           FROM product 
                           WHERE id='$m'";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
           
           
    
          return $result; 
   
           
 }
    
    
     public function get_Projects($m){
     
    
           $connection = $this->connection;
          
    
           $view_project_query = "SELECT * FROM project WHERE category_name='$m'";
        
           $result = $connection->query($view_project_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result; 
   
           
 }
    
    
    
         public function get_Projects_name($j){
     
    
           $connection = $this->connection;
          
    
           $view_project_query = "SELECT * FROM project WHERE name='$j'";
        
           $result = $connection->query($view_project_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }
    
          return $result->fetch_assoc(); 
   
           
 }
 

     public function Add_transfer(){
         
      $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];
         
      $offer = $_POST['offer'];
         
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $transaction_id = $_POST['transaction_id'];
      $amount = $_POST['amount'];
      $transfer_date =$_POST['transfer_date'];  
      $receipt_name = $_FILES["receipt"]["name"];
      $receipt_tmp_name = $_FILES["receipt"]["tmp_name"];   
        
         
        $unique_transaction_id = $offer . "_" . $transaction_id;   
     
         
         
       $errors = [];
     
        
        if(strlen($name) == 0){
              $errors['name'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone) == 0){
              $errors['phone'] = 'Please input your phone number...'; 
          }
         
       if(strlen($transaction_id) == 0){
              $errors['transaction_id'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount) == 0){
              $errors['amount'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date) == 0){
              $errors['transfer_date'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt']) && $_FILES['receipt']['error'] == 0){
    // Check extension
    $ext = strtolower(pathinfo($_FILES['receipt']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime = $_FILES['receipt']['type'];

    if($ext === "pdf" && $mime === "application/pdf"){
       
    } else {
        $errors['receipt'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path = "uploads/";
     
           if(!file_exists($receipt_path)){
            mkdir($receipt_path);
        }
         
         $receipt = $receipt_path.basename($receipt_name);
         
          move_uploaded_file($receipt_tmp_name, $receipt);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name','$phone', '$unique_transaction_id','$amount','$transfer_date','$receipt_name', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
    
    
    
      public function Add_transfer2(){
            
              $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];
      
      echo $selected_flat;
      echo $selected_floor;
      
      $offer2 = $_POST['offer2'];
     
      $name2 = $_POST['name2'];
      $phone2 = $_POST['phone2'];
      $transaction_id2 = $_POST['transaction_id2'];
      $amount2 = $_POST['amount2'];
      $transfer_date2 =$_POST['transfer_date2'];  
      $receipt_name2 = $_FILES["receipt2"]["name"];
      $receipt_tmp_name2 = $_FILES["receipt2"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id2 = $offer2 . "_" . $transaction_id2;  
         
       $errors = [];
     
        
        if(strlen($name2) == 0){
              $errors['name2'] = 'Please insert your name...'; 
          }
            
        if(strlen($phone2) == 0){
              $errors['phone2'] = 'Please input your phone number...'; 
          }
         
         
       if(strlen($transaction_id2) == 0){
              $errors['transaction_id2'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount2) == 0){
              $errors['amount2'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date2) == 0){
              $errors['transfer_date2'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt2']) && $_FILES['receipt2']['error'] == 0){
    // Check extension
    $ext2 = strtolower(pathinfo($_FILES['receipt2']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime2 = $_FILES['receipt2']['type'];

    if($ext2 === "pdf" && $mime2 === "application/pdf"){
       
    } else {
        $errors['receipt2'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt2'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path2 = "uploads2/";
     
           if(!file_exists($receipt_path2)){
            mkdir($receipt_path2);
        }
         
         $receipt2 = $receipt_path2.basename($receipt_name2);
         
          move_uploaded_file($receipt_tmp_name2, $receipt2);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name2','$phone2', '$unique_transaction_id2','$amount2','$transfer_date2','$receipt_name2', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
    
    
        public function Add_transfer3(){
            
              $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];
            
      $offer3 = $_POST['offer3'];
     
      $name3 = $_POST['name3'];
      $phone3 = $_POST['phone3'];
      $transaction_id3 = $_POST['transaction_id3'];
      $amount3 = $_POST['amount3'];
      $transfer_date3 =$_POST['transfer_date3'];  
      $receipt_name3 = $_FILES["receipt3"]["name"];
      $receipt_tmp_name3 = $_FILES["receipt3"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id3 = $offer3 . "_" . $transaction_id3;  
         
       $errors = [];
     
        
        if(strlen($name3) == 0){
              $errors['name3'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone3) == 0){
              $errors['phone3'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id3) == 0){
              $errors['transaction_id3'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount3) == 0){
              $errors['amount3'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date3) == 0){
              $errors['transfer_date3'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt3']) && $_FILES['receipt3']['error'] == 0){
    // Check extension
    $ext3 = strtolower(pathinfo($_FILES['receipt3']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime3 = $_FILES['receipt3']['type'];

    if($ext3 === "pdf" && $mime3 === "application/pdf"){
       
    } else {
        $errors['receipt3'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt3'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path3 = "uploads3/";
     
           if(!file_exists($receipt_path3)){
            mkdir($receipt_path3);
        }
         
         $receipt3 = $receipt_path3.basename($receipt_name3);
         
          move_uploaded_file($receipt_tmp_name3, $receipt3);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name3','$phone3', '$unique_transaction_id3','$amount3','$transfer_date3','$receipt_name3', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
 public function Add_transfer4(){
     
       $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];
            
      $offer4= $_POST['offer4'];
     
      $name4 = $_POST['name4'];
      $phone4 = $_POST['phone4'];
      $transaction_id4 = $_POST['transaction_id4'];
      $amount4 = $_POST['amount4'];
      $transfer_date4 =$_POST['transfer_date4'];  
      $receipt_name4 = $_FILES["receipt4"]["name"];
      $receipt_tmp_name4 = $_FILES["receipt4"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id4 = $offer4 . "_" . $transaction_id4;  
         
       $errors = [];
     
        
        if(strlen($name4) == 0){
              $errors['name4'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone4) == 0){
              $errors['phone4'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id4) == 0){
              $errors['transaction_id4'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount4) == 0){
              $errors['amount4'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date4) == 0){
              $errors['transfer_date4'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt4']) && $_FILES['receipt4']['error'] == 0){
    // Check extension
    $ext4 = strtolower(pathinfo($_FILES['receipt4']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime4 = $_FILES['receipt4']['type'];

    if($ext4 === "pdf" && $mime4 === "application/pdf"){
       
    } else {
        $errors['receipt4'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt4'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path4 = "uploads/";
     
           if(!file_exists($receipt_path4)){
            mkdir($receipt_path4);
        }
         
         $receipt4 = $receipt_path4.basename($receipt_name4);
         
          move_uploaded_file($receipt_tmp_name4, $receipt4);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name4','$phone4', '$unique_transaction_id4','$amount4','$transfer_date4','$receipt_name4', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
 public function Add_transfer5(){
     
       $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];
            
      $offer5= $_POST['offer5'];
     
      $name5 = $_POST['name5'];
      $phone5 = $_POST['phone5'];
      $transaction_id5 = $_POST['transaction_id5'];
      $amount5 = $_POST['amount5'];
      $transfer_date5 =$_POST['transfer_date5'];  
      $receipt_name5 = $_FILES["receipt5"]["name"];
      $receipt_tmp_name5 = $_FILES["receipt5"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id5 = $offer5 . "_" . $transaction_id5;  
         
       $errors = [];
     
        
        if(strlen($name5) == 0){
              $errors['name5'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone5) == 0){
              $errors['phone5'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id5) == 0){
              $errors['transaction_id5'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount5) == 0){
              $errors['amount5'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date5) == 0){
              $errors['transfer_date5'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt5']) && $_FILES['receipt5']['error'] == 0){
    // Check extension
    $ext5 = strtolower(pathinfo($_FILES['receipt5']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime5 = $_FILES['receipt5']['type'];

    if($ext5 === "pdf" && $mime5 === "application/pdf"){
       
    } else {
        $errors['receipt5'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt5'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path5 = "uploads2/";
     
           if(!file_exists($receipt_path5)){
            mkdir($receipt_path5);
        }
         
         $receipt5 = $receipt_path5.basename($receipt_name5);
         
          move_uploaded_file($receipt_tmp_name5, $receipt5);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name5','$phone5', '$unique_transaction_id5','$amount5','$transfer_date5','$receipt_name5', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
  public function Add_transfer6(){
    $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];

  
            
      $offer6= $_POST['offer6'];
     
      $name6 = $_POST['name6'];
      $phone6 = $_POST['phone6'];
      $transaction_id6 = $_POST['transaction_id6'];
      $amount6 = $_POST['amount6'];
      $transfer_date6 =$_POST['transfer_date6'];  
      $receipt_name6 = $_FILES["receipt6"]["name"];
      $receipt_tmp_name6 = $_FILES["receipt6"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id6 = $offer6 . "_" . $transaction_id6;  
         
       $errors = [];
     
        
        if(strlen($name6) == 0){
              $errors['name6'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone6) == 0){
              $errors['phone6'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id6) == 0){
              $errors['transaction_id6'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount6) == 0){
              $errors['amount6'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date6) == 0){
              $errors['transfer_date6'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt6']) && $_FILES['receipt6']['error'] == 0){
    // Check extension
    $ext6 = strtolower(pathinfo($_FILES['receipt6']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime6 = $_FILES['receipt6']['type'];

    if($ext6 === "pdf" && $mime6 === "application/pdf"){
       
    } else {
        $errors['receipt6'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt6'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path6 = "uploads3/";
     
           if(!file_exists($receipt_path6)){
            mkdir($receipt_path6);
        }
         
         $receipt6 = $receipt_path6.basename($receipt_name6);
         
          move_uploaded_file($receipt_tmp_name6, $receipt6);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name6','$phone6', '$unique_transaction_id6','$amount6','$transfer_date6','$receipt_name6', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
 public function Add_transfer7(){
     
       $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];

            
      $offer7= $_POST['offer7'];
     
      $name7 = $_POST['name7'];
      $phone7 = $_POST['phone7'];
      $transaction_id7 = $_POST['transaction_id7'];
      $amount7 = $_POST['amount7'];
      $transfer_date7 =$_POST['transfer_date7'];  
      $receipt_name7 = $_FILES["receipt7"]["name"];
      $receipt_tmp_name7 = $_FILES["receipt7"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id7 = $offer7 . "_" . $transaction_id7;  
         
       $errors = [];
     
        
        if(strlen($name7) == 0){
              $errors['name7'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone7) == 0){
              $errors['phone7'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id7) == 0){
              $errors['transaction_id7'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount7) == 0){
              $errors['amount7'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date7) == 0){
              $errors['transfer_date7'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt7']) && $_FILES['receipt7']['error'] == 0){
    // Check extension
    $ext7 = strtolower(pathinfo($_FILES['receipt7']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime7 = $_FILES['receipt7']['type'];

    if($ext7 === "pdf" && $mime7 === "application/pdf"){
       
    } else {
        $errors['receipt7'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt7'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path7 = "uploads/";
     
           if(!file_exists($receipt_path7)){
            mkdir($receipt_path7);
        }
         
         $receipt7 = $receipt_path7.basename($receipt_name7);
         
          move_uploaded_file($receipt_tmp_name7, $receipt7);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name7','$phone7', '$unique_transaction_id7','$amount7','$transfer_date7','$receipt_name7', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
 public function Add_transfer8(){
     
       $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];
            
      $offer8= $_POST['offer8'];
     
      $name8 = $_POST['name8'];
      $phone8 = $_POST['phone8'];
      $transaction_id8 = $_POST['transaction_id8'];
      $amount8 = $_POST['amount8'];
      $transfer_date8 =$_POST['transfer_date8'];  
      $receipt_name8 = $_FILES["receipt8"]["name"];
      $receipt_tmp_name8 = $_FILES["receipt8"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id8 = $offer8 . "_" . $transaction_id8;  
         
       $errors = [];
     
        
        if(strlen($name8) == 0){
              $errors['name8'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone8) == 0){
              $errors['phone8'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id8) == 0){
              $errors['transaction_id8'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount8) == 0){
              $errors['amount8'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date8) == 0){
              $errors['transfer_date8'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt8']) && $_FILES['receipt8']['error'] == 0){
    // Check extension
    $ext8 = strtolower(pathinfo($_FILES['receipt8']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime8 = $_FILES['receipt8']['type'];

    if($ext8 === "pdf" && $mime8 === "application/pdf"){
       
    } else {
        $errors['receipt8'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt8'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path8 = "uploads2/";
     
           if(!file_exists($receipt_path8)){
            mkdir($receipt_path8);
        }
         
         $receipt8 = $receipt_path8.basename($receipt_name8);
         
          move_uploaded_file($receipt_tmp_name8, $receipt8);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name8','$phone8', '$unique_transaction_id8','$amount8','$transfer_date8','$receipt_name8', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 public function Add_transfer9(){
     
       $selected_flat = $_POST['selected_flat'];
      $selected_floor = $_POST['selected_floor'];

            
      $offer9= $_POST['offer9'];
     
      $name9 = $_POST['name9'];
      $phone9 = $_POST['phone9'];
      $transaction_id9 = $_POST['transaction_id9'];
      $amount9 = $_POST['amount9'];
      $transfer_date9 =$_POST['transfer_date9'];  
      $receipt_name9 = $_FILES["receipt9"]["name"];
      $receipt_tmp_name9 = $_FILES["receipt9"]["tmp_name"];   
        
         
     
     
       $unique_transaction_id9 = $offer9 . "_" . $transaction_id9;  
         
       $errors = [];
     
        
        if(strlen($name9) == 0){
              $errors['name9'] = 'Please insert your name...'; 
          }
         
        if(strlen($phone9) == 0){
              $errors['phone9'] = 'Please input your phone number...'; 
          }
       if(strlen($transaction_id9) == 0){
              $errors['transaction_id9'] = 'Please insert your transaction id...'; 
          }
        
        if(strlen($amount9) == 0){
              $errors['amount9'] = 'Please give your amount...'; 
          }
         
        if(strlen($transfer_date9) == 0){
              $errors['transfer_date9'] = 'Please mention your transfer date...'; 
          }
         
         
       if(isset($_FILES['receipt9']) && $_FILES['receipt9']['error'] == 0){
    // Check extension
    $ext9 = strtolower(pathinfo($_FILES['receipt9']['name'], PATHINFO_EXTENSION));
    
    // Check MIME type
    $mime9 = $_FILES['receipt9']['type'];

    if($ext9 === "pdf" && $mime9 === "application/pdf"){
       
    } else {
        $errors['receipt9'] = "Only PDF files are allowed...";
    }
} else {
    $errors['receipt9'] = "No file uploaded...";
}

         
         

        
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
         
          $receipt_path9 = "uploads3/";
     
           if(!file_exists($receipt_path9)){
            mkdir($receipt_path9);
        }
         
         $receipt9 = $receipt_path9.basename($receipt_name9);
         
          move_uploaded_file($receipt_tmp_name9, $receipt9);
         
         
           $connection = $this->connection;
           $success = []; 
          
    
           $insert_bank_transfers_query = "INSERT INTO bank_transfers(flat, floor, name, phone, transaction_id, amount, transfer_date,  receipt, status2)VALUES('$selected_flat', '$selected_floor', '$name9','$phone9', '$unique_transaction_id9','$amount9','$transfer_date9','$receipt_name9', '1')";
        
           $result = $connection->query($insert_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Transaction form submited successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
   public function confirm_checkout($g){
       
        
         $_SESSION['cartList']['customer_details']['status'] = 1;
       
       $success = []; 
       
       $success['success'] = 'Please press the Check out now button twice';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
    }
 
    
      public function customer_details($t){
 
        $_SESSION['cartList']['customer_details'] = [
                  'status' => 2,
        ];
          
           $success = []; 
       
       $success['success'] = 'Please press the Check out now button once';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
    }
 
    
    public function confirm_payment($x){
       
         $_SESSION['cartList']['payment_details']['status'] = 1;
        
       
    }
    
    
    
    public function payment_details($m){
          $name = $_POST['name'];
          $transaction_id = $_POST['transaction_id'];
          $amount = $_POST['amount'];
          
     
          $errors = [];

           if(strlen($name) == 0){
              $errors['name'] = 'Please insert your name...'; 
          }
        if(strlen($transaction_id) == 0){
              $errors['transaction_id'] = 'Please insert your purchase transaction id...'; 
          }
          

           
           if(count($errors) > 0){
                return[
                   'status' => 'error',
                   'message' => $errors
               ];
           }
        
        $_SESSION['cartList']['payment_details'] = [
				  'transaction_id' => $transaction_id,
                  'status' => 2,
        ];
         
        $invoice = 'ETS-'.time();
        
        $name = $_POST['name'];
        $cart_data = $_SESSION['cartList'];
        $total_bill = 0;
         
        foreach($cart_data['items'] as $items){
           $total_bill += $items['Price']*$items['Quantity'];
        }
         
        $total_payment = $total_bill;
        $transaction_id = $_POST['transaction_id'];
        
        
       
        
        $invoice = 'ETS-'.time();
         
        $connection = $this->connection;
        //print_r($Connection);
        
      $order_insert_query = "INSERT INTO orders(invoice, name, total_bill, total_payment, transaction_id) 
                       VALUES ('$invoice', '$name','$total_bill','$total_payment','$transaction_id')";
$connection->query($order_insert_query);

if($connection->error){
    die('Table Error:'.$connection->error);
}

$order_id = $connection->insert_id;

// Loop through all items
foreach($_SESSION['cartList']['items'] as $item){
    $product_id = $item['ID'];   // ensure key matches your session
    $product_name = $item['Name'];
    $product_brand = $item['Brand'];
    $product_price = $item['Price'];
    $product_quantity = $item['Quantity'];
    $product_image = $item['Image'];

    $order_list_insert_query = "INSERT INTO order_list(order_id, product_id, product_name, product_brand, product_price, product_quantity, product_image)VALUES('$order_id','$product_id','$product_name','$product_brand', '$product_price','$product_quantity', '$product_image')";
    $connection->query($order_list_insert_query);

    if($connection->error){
        die('Table Error:'.$connection->error);
    }
}

// ✅ After all inserts
unset($_SESSION['cartList']);
header('Location:index');

return [
    'status' => 'success',
    'message' => ['success' => 'Order placed successfully!']
];

    }
    
    
    
   public function Cart($y){
           $Product_id = $_POST['prdct_id'];
           #print_r($y);
        
           $quantity = $y['quantity'];
        
           $errors = [];
        
           if(strlen($quantity) == 0){
               $errors['quantity'] = 'Please input product quantity';
           }
        
           if(count($errors) > 0){
                return[
                   'status' => 'error',
                   'message' => $errors
               ];
           }    
        
           $connection = $this->connection;
           //print_r($Connection);
    
           $view_products_query = "SELECT * FROM product WHERE id='$Product_id'";
    
           $result = $connection->query($view_products_query);
    
           if($connection->error){
               die('Table Error:'.$connection->error);
           }  
        
           $product = $result->fetch_assoc();
       
      
        
           if($_SESSION['cartList']){
               if(count($_SESSION['cartList']['items']) > 0){
                   if(isset($_SESSION['cartList']['items'][$product['id']])){
                        $_SESSION['cartList']['items'][$product['id']]['Quantity'] = $y['quantity'];
                   }else{
                       $_SESSION['cartList']['items'][$product['id']] = [
                                    'id' => $product['id'],
                                    'Name' => $product['name'],
                                    'Category' => $product['prdct_ctgry_name'],
                                    'Brand' => $product['brand'],
                                    'Price' => $product['price'],
                                    'Image' => $product['image'],
                                    'ID' => $product['product_id'],
                                    'Quantity' => $y['quantity'],
                                ];
                       
                   }  
               }
           }else{
               $_SESSION['cartList'] = [
                       'product_id' => $product['id'],
                       'customer_details' => [
                          'Name' => '',
                          'status' => 0,
                        ],
                        'payment_details' => [
					          'transaction_id' => null,
					          'status' => 0,
                        ],
                        'items' => [
                            $product['id'] => [
                                'id' => $product['id'],
                                'Name' => $product['name'],
                                'Category' => $product['prdct_ctgry_name'],
                                'Brand' => $product['brand'],
                                'Price' => $product['price'],
                                'Image' => $product['image'],
                                'ID' => $product['product_id'],
                                'Quantity' => $y['quantity'],
                            ]
                        ],
               ];  
           }
         
          
          
 }
    
     public function Removeproduct($m){
        
        $remove_id = $m['remove_id'];
        
        if($_SESSION['cartList']){
            $cartItem = $_SESSION['cartList']['items'];
            echo $cartItem;
            if(count($cartItem)>0 && !empty($remove_id) && isset($cartItem[$remove_id])){
                unset($cartItem[$remove_id]);
                
                $_SESSION['cartList']['items']=$cartItem;
            }
            
          
        }
    }
}

?>