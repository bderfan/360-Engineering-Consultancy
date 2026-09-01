<?php
 error_reporting(E_ERROR | E_PARSE);
require_once('DATABASECLASS.php');

class ADMINCLASS extends DATABASECLASS{

       public function Admin_update(){
     
      $User = $_POST['User'];
      $Password = $_POST['Password'];
           
    $tmp_name2 = $_FILES['Image']['tmp_name'];
      $real_name2 = $_FILES['Image']['name'];
      $img_size = $_FILES['Image']['size'];
    
           $errors = [];
             if($tmp_name2){
             function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
          
        $NAME = RemoveSpecialChar($Name);
         
         
         $get_image_extension = strtolower(pathinfo($real_name2, PATHINFO_EXTENSION));
         
          $new_image = time().$NAME.'.'.$get_image_extension;
        $target_extension = ['png'];
                 
        if(!in_array($get_image_extension, $target_extension)){
            $errors['Image'] = 'Image should be in png format';
        }
           
           $categoryPath = "../images/admin_image/";  
            
               if(!file_exists($categoryPath)){
            mkdir($categoryPath);
        }
           
           move_uploaded_file($tmp_name2, $categoryPath.'/'.$new_image); 
              
              $final_image = $new_image;
         
    
              
              
          }else{
              $final_image = $_POST['admin_image']; // hidden field from form
    // Optionally ensure file exists in folder
    $oldPath = "../images/admin_image/".$final_image;
   
         $sourcePath = "../images/admin_image/".$final_image;
        if(file_exists($sourcePath)) {
            copy($sourcePath, $oldPath);
        }
    
        } 
            
               if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }  
           
           $connection = $this->connection;
           $success = []; 
          
    
           $update_admin_query = "UPDATE admin_login SET user='$User',password='$Password',image='$final_image'";
        
           $result = $connection->query($update_admin_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Admin info updated successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
    
    
     public function Add_category(){
      $Name = $_POST['Name'];
         
      $tmp_name2 = $_FILES['Image']['tmp_name'];
      $real_name2 = $_FILES['Image']['name'];
      $img_size = $_FILES['Image']['size'];
     
       $errors = [];
     
        
       if(strlen($Name) == 0){
              $errors['Name'] = 'Please insert category name...'; 
          }
        
          if(!$tmp_name){ 
           $errors['Image'] = 'Please upload image...';
             
         }elseif($tmp_name2){
             function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
          
        $NAME = RemoveSpecialChar($Name);
         
         
         $get_image_extension = strtolower(pathinfo($real_name2, PATHINFO_EXTENSION));
         
          $new_image = time().$NAME.'.'.$get_image_extension;
        $target_extension = ['jpg', 'jpeg', 'png', 'gif'];
         
    
        if(!in_array($get_image_extension, $target_extension)){
            $errors['Image'] = 'Image should be in jpg/jpeg/png/gif formate';
        }
        if($img_size > 1048576){
            $errors['Image'] = 'Image size can not be larger than 1Mb';
        }   
              
              
            $categoryPath = "../images/category_image/";  
            
             if(!file_exists($categoryPath)){
            mkdir($categoryPath);
        }

         
         
             move_uploaded_file($tmp_name2, $categoryPath.'/'.$new_image); 
              
              
              
              
          }
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $connection = $this->connection;
          
    
           $insert_category_query = "INSERT INTO project_category(name, image)VALUES('$Name', '')";
        
           $result = $connection->query($insert_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          $success['success'] = 'Category added successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
   
           
 }
    
    
    
    
    
      public function Category_update(){
     
      $updateId = $_POST['updateId'];
      $Name = $_POST['Name'];
          
       $tmp_name2 = $_FILES['Image']['tmp_name'];
      $real_name2 = $_FILES['Image']['name'];
      $img_size = $_FILES['Image']['size'];
    
          $errors = [];
          
         $categoryPath = "../images/category_image/";  
            
               if(!file_exists($categoryPath)){
            mkdir($categoryPath);
        }
           
          if($tmp_name2){
             function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
          
        $NAME = RemoveSpecialChar($Name);
         
         
         $get_image_extension = strtolower(pathinfo($real_name2, PATHINFO_EXTENSION));
         
          $new_image = time().$NAME.'.'.$get_image_extension;
        $target_extension = ['jpg', 'jpeg', 'png', 'gif'];
         
    
        if(!in_array($get_image_extension, $target_extension)){
            $errors['Image'] = 'Image should be in jpg/jpeg/png/gif format';
        }
        if($img_size > 1048576){
            $errors['Image'] = 'Image size can not be larger than 1Mb';
        }   
              
              
           

         
         
             move_uploaded_file($tmp_name2, $categoryPath.'/'.$new_image); 
              
              $final_image = $new_image;
              
              
          }else{
              $final_image = $_POST['old_image']; // hidden field from form
    // Optionally ensure file exists in folder
    $oldPath = "../images/category_image/".$final_image;
   
         $sourcePath = "../images/category_image/".$final_image;
        if(file_exists($sourcePath)) {
            copy($sourcePath, $oldPath);
        }
    
        } 
          
          
          if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $connection = $this->connection;
           $success = []; 
          
     
           $update_category_query = "UPDATE project_category SET name='$Name', image='$final_image' WHERE id='$updateId'";
        
           $result = $connection->query($update_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Category updated successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
    
    
      public function Category_delete(){
     
      $DeletedID = $_POST['DeletedID'];

    
           $connection = $this->connection;
        
           
           $success = []; 
          
     
           $delete_category_query = "DELETE FROM project_category WHERE id='$DeletedID'";
        
           $result = $connection->query($delete_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Category deleted successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
    

public function Add_product_category(){
      $Name = $_POST['Name'];
    
         
     
       $errors = [];
     
        
       if(strlen($Name) == 0){
              $errors['Name'] = 'Please insert category name...'; 
          }
          
       
        
       
           if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $connection = $this->connection;
          
    
           $insert_category_query = "INSERT INTO product_category(name)VALUES('$Name')";
        
           $result = $connection->query($insert_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          $success['success'] = 'Product category added successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
   
           
 }
 
 
 public function Prdct_category_update(){
     
      $updateId = $_POST['updateId'];
      $Name = $_POST['Name'];
          
    
    
          $errors = [];
          
      
          
          
          if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $connection = $this->connection;
           $success = []; 
          
     
           $update_category_query = "UPDATE product_category SET name='$Name' WHERE id='$updateId'";
        
           $result = $connection->query($update_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Product category updated successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 public function Prdct_category_delete(){
     
      $DeletedprdctctgryID = $_POST['DeletedprdctctgryID'];

    
           $connection = $this->connection;
        
           
           $success = []; 
          
     
           $delete_category_query = "DELETE FROM product_category WHERE id='$DeletedprdctctgryID'";
        
           $result = $connection->query($delete_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Product category deleted successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 
 public function Prdct_delete(){
     
      $DeletedprdctID = $_POST['DeletedprdctID'];

    
           $connection = $this->connection;
        
           
           $success = []; 
          
     
           $delete_prdct_query = "DELETE FROM product WHERE id='$DeletedprdctID'";
        
           $result = $connection->query($delete_prdct_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Product deleted successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
    
      public function Admin(){
     
    
           $connection = $this->connection;
          
    
           $view_admin_query = "SELECT * FROM admin_login";
        
           $result = $connection->query($view_admin_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result->fetch_assoc(); 
   
           
 }
    
    
    
        public function Category(){
     
    
           $connection = $this->connection;
          
    
           $view_category_query = "SELECT * FROM project_category";
        
           $result = $connection->query($view_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
 
 
         public function prdct_Category(){
     
    
           $connection = $this->connection;
          
    
           $view_category_query = "SELECT * FROM product_category";
        
           $result = $connection->query($view_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
    
    
    public function Project(){
     
    
           $connection = $this->connection;
          
    
           $view_project_query = "SELECT * FROM project";
        
           $result = $connection->query($view_project_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
 
 
 public function Product(){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
 
 
 
     public function prdct_sub_category(){
     
    
           $connection = $this->connection;
          
    
           $view_product_sub_category_query = "SELECT * FROM product_sub_category";
        
           $result = $connection->query($view_product_sub_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
 
 
 
 
     public function Consultation(){
     
    
           $connection = $this->connection;
          
    
           $view_customer_consultation_query = "SELECT * FROM customer_consultation";
        
           $result = $connection->query($view_customer_consultation_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
    
    
    
    public function Add_project(){
     $Category    = $_POST['Category']; 
$Name        = $_POST['Name'];


$tmp_name   = $_FILES['Video']['tmp_name'];
$real_name  = $_FILES['Video']['name'];
$video_size = $_FILES['Video']['size'];

$imageCount = $_POST['imageCount'];


$uploaded_images = [];

// Validation checks
if (empty($Name))       $errors['Name'] = 'Please insert project name...';
if (empty($imageCount)) $errors['imageCount'] = 'Please input number...';
         
         
            $connection = $this->connection;
    
           $sql_view = "SELECT * FROM project_category";
		
		$result = $connection->query($sql_view);
		
		if($connection->error){
			   die('Table Error: '.$connection->error);
        }

               
         $checkCategoryname = [];
         
          if($result->num_rows == 0){
           $errors['Category'] == 'Invalid categories';
        }else{
            while($category = $result->fetch_assoc()){
                $checkCategoryname[] = $category['name'];
                
            }
              
    
              /**
            print_r($checkCategoryid);
            return true;
           **/
            if(!in_array($Category, $checkCategoryname)){
                $errors['Category'] = 'Please add category...';
            }
          }
 
// Image loop
foreach ($_FILES['Image']['name'] as $index => $real_name2) {
    if (empty($_FILES['Image']['name'][$index])) {
    $errors['Image'][$index] = "Please upload image";
        
}

    $tmp_name2 = $_FILES['Image']['tmp_name'][$index];
    $img_size  = $_FILES['Image']['size'][$index];
    $errorCode = $_FILES['Image']['error'][$index];
    
    

    if ($errorCode === UPLOAD_ERR_OK) {
       
        
          
       
        
        
        $ext = strtolower(pathinfo($real_name2, PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif'];

        if (!in_array($ext, $allowed)) {
            $errors['Image'][$index] = "Image ".($index+1)." must be jpg/jpeg/png/gif";
            continue;
        }
        if ($img_size > 3145728) {
            $errors['Image'][$index] = "Image ".($index+1)." cannot be larger than 3Mb";
            continue;
        }

        $categoryPath = "../images/project_image/".$Category."/".$Name;
        if (!file_exists($categoryPath)) {
            mkdir($categoryPath, 0777, true);
        }

        $new_image = time()."_".basename($real_name2);
        move_uploaded_file($tmp_name2, $categoryPath.'/'.$new_image);

        $uploaded_images[] = $new_image;
    }
    
}
         



$all_images = json_encode($uploaded_images);

// Video validation
if (!$tmp_name) {
    $errors['Video'] = 'Please upload video...';
} else {
    $get_video_extension = strtolower(pathinfo($real_name, PATHINFO_EXTENSION));
    $new_video = time().'_'.$Name.'.'.$get_video_extension;

    $target_extensions = ['mp4','avi','mov','mkv','webm'];

    if (!in_array($get_video_extension, $target_extensions)) {
        $errors['Video'] = 'Video must be in mp4/avi/mov/mkv/webm format';
    }
    if ($video_size > 104857600) {
        $errors['Video'] = 'Video size cannot be larger than 100 MB';
    }

    $categoryPath2 = "../videos/upload/".$Category;
    if (!file_exists($categoryPath2)) {
        mkdir($categoryPath2, 0777, true);
    }

    if (empty($errors)) {
        move_uploaded_file($tmp_name, $categoryPath2.'/'.$new_video);
    }
}

// Stop if errors exist
if (!empty($errors)) {
    return [
        'status' => 'error',
        'message' => $errors
    ];
}


// ✅ Correct variable names
$insert_projects_query = "INSERT INTO project(category_name, name, video, image)
VALUES('$Category','$Name','$new_video','$all_images')";

$result = $connection->query($insert_projects_query);

if ($connection->error) {
    die('Table Error: '.$connection->error);
}

return [
    'status' => 'success',
    'message' => ['success' => 'Project created successfully!']
];

           
 }
 
 
 public function Add_product(){
     $Prodct_category    = $_POST['Prodct_category']; 
      $Prodct_sub_category    = $_POST['Prodct_sub_category']; 
$Name        = $_POST['Name'];
  $Brand = $_POST['Brand'];
   $Price = $_POST['Price'];


$tmp_name   = $_FILES['Image']['tmp_name'];
$real_name  = $_FILES['Image']['name'];
$img_size = $_FILES['Image']['size'];


// Validation checks
if (empty($Name))       $errors['Name'] = 'Please insert product name...';


         
         
            $connection = $this->connection;
    
           $sql_view = "SELECT * FROM product_category";
		
		$result = $connection->query($sql_view);
		
		if($connection->error){
			   die('Table Error: '.$connection->error);
        }

               
         $checkprdctcategoryname = [];
         
          if($result->num_rows == 0){
           $errors['Prodct_category'] == 'Invalid categories';
        }else{
            while($category = $result->fetch_assoc()){
                $checkprdctcategoryname[] = $category['name'];
                
            }
              
    
              /**
            print_r($checkCategoryid);
            return true;
           **/
            if(!in_array($Prodct_category, $checkprdctcategoryname)){
                $errors['Prodct_category'] = 'Please add product category...';
            }
          }
          
          
          
          $sql_view2 = "SELECT * FROM product_sub_category WHERE product_category_name='$Prodct_category'";
		
		$result2 = $connection->query($sql_view2);
		
		if($connection->error){
			   die('Table Error: '.$connection->error);
        }

               
         $checkprdctsubcategoryname = [];
         
          if($result2->num_rows == 0){
           $errors['Prodct_sub_category'] == 'Invalid sub categories';
        }else{
            while($subcategory = $result2->fetch_assoc()){
                $checkprdctsubcategoryname[] = $subcategory['name'];
                
            }
              
    
              /**
            print_r($checkCategoryid);
            return true;
           **/
            if(!in_array($Prodct_sub_category, $checkprdctsubcategoryname)){
                $errors['Prodct_sub_category'] = 'Please add product sub category...';
            }
          }
 


// Video validation
if (!$tmp_name) {
    $errors['Image'] = 'Please upload image...';
} else {
    $get_image_extension = strtolower(pathinfo($real_name, PATHINFO_EXTENSION));
    $new_image = time().'_'.$Name.'.'.$get_image_extension;

    $target_extensions = ['JPG','jpg','jpeg','png','webp'];

    if (!in_array($get_image_extension, $target_extensions)) {
        $errors['Image'] = 'Image must be in JPG/jpg/jpeg/png/webp format';
    }
    if ($img_size > 1048576) {
        $errors['Image'] = 'Image size cannot be larger than 1 MB';
    }

    $categoryPath2 = "../images/upload/".$Prodct_category;
    if (!file_exists($categoryPath2)) {
        mkdir($categoryPath2, 0777, true);
    }

    if (empty($errors)) {
        move_uploaded_file($tmp_name, $categoryPath2.'/'.$new_image);
    }
}

// Stop if errors exist
if (!empty($errors)) {
    return [
        'status' => 'error',
        'message' => $errors
    ];
}


           function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
$NAME = RemoveSpecialChar($Name);
        $BRAND = RemoveSpecialChar($Brand);

$product_id = $Name.'-'.$Price.'-'.time();
     
$insert_products_query = "INSERT INTO product(prdct_ctgry_name, prdct_sub_ctgry_name, name, brand, price, product_id, image)
VALUES('$Prodct_category','$Prodct_sub_category','$NAME', '$BRAND', '$Price', '$product_id', '$new_image')";

$result = $connection->query($insert_products_query);

if ($connection->error) {
    die('Table Error: '.$connection->error);
}

return [
    'status' => 'success',
    'message' => ['success' => 'Product created successfully!']
];

           
 }
 
 
 
 public function Add_prdct_sub_ctgry(){
     $Prodct_category    = $_POST['Prodct_category']; 
$Name        = $_POST['Name'];






// Validation checks
if (empty($Name))       $errors['Name'] = 'Please insert product sub category name...';

         
            $connection = $this->connection;
    
           $sql_view = "SELECT * FROM product_category";
		
		$result = $connection->query($sql_view);
		
		if($connection->error){
			   die('Table Error: '.$connection->error);
        }

               
         $checkprdctCategoryname = [];
         
          if($result->num_rows == 0){
           $errors['Prodct_category'] == 'Invalid product categories';
        }else{
            while($category = $result->fetch_assoc()){
                $checkprdctCategoryname[] = $category['name'];
                
            }
              
    
              /**
            print_r($checkCategoryid);
            return true;
           **/
            if(!in_array($Prodct_category, $checkprdctCategoryname)){
                $errors['Prodct_category'] = 'Please add product category...';
            }
          }
 



// Stop if errors exist
if (!empty($errors)) {
    return [
        'status' => 'error',
        'message' => $errors
    ];
}


// ✅ Correct variable names
$insert_prdct_sub_ctgry_query = "INSERT INTO product_sub_category(product_category_name, name)
VALUES('$Prodct_category','$Name')";

$result = $connection->query($insert_prdct_sub_ctgry_query);

if ($connection->error) {
    die('Table Error: '.$connection->error);
}

return [
    'status' => 'success',
    'message' => ['success' => 'Product sub category created successfully!']
];

           
 }
    
    
    
    
    
        public function Get_project($x){
     
    
           $connection = $this->connection;
          
    
           $view_project_query = "SELECT * FROM project WHERE id='$x'";
        
           $result = $connection->query($view_project_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result->fetch_assoc(); 
   
           
 }
 
 
 
       public function Get_product($x){
     
    
           $connection = $this->connection;
          
    
           $view_product_query = "SELECT * FROM product WHERE id='$x'";
        
           $result = $connection->query($view_product_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result->fetch_assoc(); 
   
           
 }
 
 
       public function Get_product_ctgry($x){
     
    
           $connection = $this->connection;
          
    
           $view_product_sub_category_query = "SELECT * FROM product_sub_category WHERE id='$x'";
        
           $result = $connection->query($view_product_sub_category_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result->fetch_assoc(); 
   
           
 }
    
    
    
     public function Update_project($y){
      $Category = $_POST['Category']; 

        
      $Name = $_POST['Name'];
         
      $tmp_name   = $_FILES['Video']['tmp_name'];  // temporary file path
      $real_name  = $_FILES['Video']['name'];      // original filename
      $video_size = $_FILES['Video']['size'];      // file size in bytes

     
     $imageCount2 = $_POST['imageCount2'];


$uploaded_images = [];
         
       $errors = [];
     
        
       if(strlen($Name) == 0){
              $errors['Name'] = 'Please insert project name...'; 
          }
   
       



 
        
           $connection = $this->connection;
    
           $sql_view = "SELECT * FROM project_category";
		
		$result = $connection->query($sql_view);
		
		if($connection->error){
			   die('Table Error: '.$connection->error);
        }

               
         $checkCategoryname = [];
         
          if($result->num_rows == 0){
           $errors['Category'] == 'Invalid categories';
        }else{
            while($category = $result->fetch_assoc()){
                $checkCategoryname[] = $category['name'];
                
            }
              
    
              /**
            print_r($checkCategoryid);
            return true;
           **/
            if(!in_array($Category, $checkCategoryname)){
                $errors['Category'] = 'Please add category...';
            }

        }
         
           function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
          
        $NAME = RemoveSpecialChar($Name);
           
          
    

       
          
         
  $final_images = [];

foreach ($_POST['old_image'] as $index => $old_img) {
    if (!empty($_FILES['Image2']['name'][$index])) {
        // replacement uploaded
        $real_name2 = $_FILES['Image2']['name'][$index];
        $tmp_name2  = $_FILES['Image2']['tmp_name'][$index];
        $img_size   = $_FILES['Image2']['size'][$index];
        $errorCode  = $_FILES['Image2']['error'][$index];

        if ($errorCode === UPLOAD_ERR_OK) {
            $ext = strtolower(pathinfo($real_name2, PATHINFO_EXTENSION));
            $allowed = ['jpg','jpeg','png','gif'];

 if (!in_array($ext, $allowed)) {
            $errors['Image2'] = "Image ".($index+1)." must be jpg/jpeg/png/gif";
            continue;
        }
        if ($img_size > 1048576) {
            $errors['Image2'] = "Image ".($index+1)." cannot be larger than 1Mb";
            continue;
        }
            if (in_array($ext, $allowed) && $img_size <= 3145728) {
                $new_image = time()."_".basename($real_name2);
                $newPath   = "../images/project_image/".$Category."/".$NAME."/".$new_image;
                move_uploaded_file($tmp_name2, $newPath);
                $final_images[] = $new_image;
            } else {
                $final_images[] = $old_img;
            }
        } else {
            $final_images[] = $old_img;
        }
    } else {
        $final_images[] = $old_img;
    }
}

// If you want to allow adding extra new images beyond old ones:
for ($i = count($_POST['old_image']); $i < count($_FILES['Image2']['name']); $i++) {
    if (!empty($_FILES['Image2']['name'][$i])) {
        $real_name2 = $_FILES['Image2']['name'][$i];
        $tmp_name2  = $_FILES['Image2']['tmp_name'][$i];
        $ext = strtolower(pathinfo($real_name2, PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif'];

        if (in_array($ext, $allowed)) {
            $new_image = time()."_".basename($real_name2);
            $newPath   = "../images/project_image/".$Category."/".$NAME."/".$new_image;
            move_uploaded_file($tmp_name2, $newPath);
            $final_images[] = $new_image;
        }
    }
}

$all_images = json_encode($final_images);


            
        

         
         
            $categoryPath2 = "../videos/upload/".$Category;  
            
              if(!file_exists($categoryPath2)){
                  mkdir($categoryPath2, 0777, true);
              }

             
                
              
         
        if($tmp_name){
            
         $get_video_extension = strtolower(pathinfo($real_name, PATHINFO_EXTENSION));
         $new_video = time().'_'.$NAME.'.'.$get_video_extension;

         $target_extensions = ['mp4','avi','mov','mkv','webm'];

   
            if(!in_array($get_video_extension, $target_extensions)){
             $errors['Video'] = 'Video must be in mp4/avi/mov/mkv/webm format';
         }

         if($video_size > 104857600){ // 100 MB
             $errors['Video'] = 'Video size cannot be larger than 100 MB';
         } 
         
            $categoryPath2 = "../videos/upload/".$Category;  
            
              if(!file_exists($categoryPath2)){
                  mkdir($categoryPath2, 0777, true);
              }

              if(empty($errors)){
                  move_uploaded_file($tmp_name, $categoryPath2.'/'.$new_video);
                  $final_video = $new_video;
              }

         }else{
             $final_video = $_POST['old_video']; // hidden field from form
    // Optionally ensure file exists in folder
    $oldPath2 = "../videos/upload/".$Category."/".$final_video;
   
         $sourcePath2 = "../videos/upload/".$get_project['category_name']."/".$final_video;
        if(file_exists($sourcePath2)) {
            copy($sourcePath2, $oldPath2);
        }
        }
        
         
          if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $success = []; 
         
         
    
         
         
         $update_projects_query = "UPDATE project SET category_name='$Category', name='$NAME', video='$final_video', image='$all_images' WHERE id='$y'";
        
           $result = $connection->query($update_projects_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Project updated successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
 }
 
 
 
 public function Update_product($y){
      $Prodct_category = $_POST['Prodct_category']; 
      $Prodct_sub_category = $_POST['Prodct_sub_category']; 

        
      $Name = $_POST['Name'];
      $Brand = $_POST['Brand'];
      $Price = $_POST['Price'];
         
      $tmp_name   = $_FILES['Image']['tmp_name'];  // temporary file path
      $real_name  = $_FILES['Image']['name'];      // original filename
      $img_size = $_FILES['Image']['size'];      // file size in bytes

     
    



         
       $errors = [];
     
        
       if(strlen($Name) == 0){
              $errors['Name'] = 'Please insert product name...'; 
          }
   
      
     
      if(strlen($Prodct_category) == 0){
              $errors['Prodct_category'] = 'Please insert product category...'; 
          }
     
     


 
        
           $connection = $this->connection;
           $connection->set_charset("utf8mb4");

      
         
         
         




           function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
          
        $NAME = RemoveSpecialChar($Name);
        $BRAND = RemoveSpecialChar($Brand);
           
          
 
         
         
            $categoryPath2 = "../images/upload/".$Prodct_category;  
            
              if(!file_exists($categoryPath2)){
                  mkdir($categoryPath2, 0777, true);
              }

             
                
              
         
        if($tmp_name){
            
         $get_img_extension = strtolower(pathinfo($real_name, PATHINFO_EXTENSION));
         $new_img = time().'_'.$NAME.'.'.$get_img_extension;

         $target_extensions = ['JPG','jpg','jpeg','png','webp'];

   
            if(!in_array($get_img_extension, $target_extensions)){
             $errors['Image'] = 'Image must be in JPG/jpg/jpeg/png/webp format';
         }

         if($video_size > 1048576){ // 100 MB
             $errors['Image'] = 'Image size cannot be larger than 1 MB';
         } 
         
            $categoryPath2 = "../images/upload/".$Prodct_category;  
            
              if(!file_exists($categoryPath2)){
                  mkdir($categoryPath2, 0777, true);
              }

              if(empty($errors)){
                  move_uploaded_file($tmp_name, $categoryPath2.'/'.$new_img);
                  $final_img = $new_img;
              }

         }else{
             $final_img = $_POST['old_img']; // hidden field from form
 
           $categoryPath2 = "../images/upload/".$Prodct_category;  
            move_uploaded_file($tmp_name, $categoryPath2.'/'.$final_img);
        }
        
         
          if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $success = []; 
         
         
          $product_id = $Name.'-'.$Price.'-'.time();
         
         
         $update_products_query = "UPDATE product SET prdct_ctgry_name='$Prodct_category', prdct_sub_ctgry_name='$Prodct_sub_category', name='$NAME', brand='$BRAND', price='$Price', product_id='$product_id', image='$final_img' WHERE id='$y'";
        
           $result = $connection->query($update_products_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Product updated successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
 }
    
     
     
     public function Update_product_sub_ctgry($y){
      $Product_Category = $_POST['Product_Category']; 

        
      $Name = $_POST['Name'];
         
     
         
       $errors = [];
     
        
       if(strlen($Name) == 0){
              $errors['Name'] = 'Please insert product name...'; 
          }
   
       



 
        
           $connection = $this->connection;
    
           $sql_view = "SELECT * FROM product_category";
		
		$result = $connection->query($sql_view);
		
		if($connection->error){
			   die('Table Error: '.$connection->error);
        }

               
         $checkprdctcategoryname = [];
         
          if($result->num_rows == 0){
           $errors['Product_Category'] == 'Invalid categories';
        }else{
            while($category = $result->fetch_assoc()){
                $checkprdctcategoryname[] = $category['name'];
                
            }
              
    
              /**
            print_r($checkCategoryid);
            return true;
           **/
            if(!in_array($Product_Category, $checkprdctcategoryname)){
                $errors['Product_Category'] = 'Please add product category...';
            }

        }
         
           function RemoveSpecialChar($str) {
 
               // Using str_replace() function 
               // to replace the word 
               $res = str_replace( array( '\'', '"',
               ',' , ';', '<', '>' ), '', $str);
 
               // Returning the result 
               return $res;
            }
          
        $NAME = RemoveSpecialChar($Name);
    
      
         
          if(count($errors) > 0){
             return[
                'status' => 'error',
                'message' => $errors
             ]; 
          }
          
           $success = []; 
         
         
    
         
         
         $update_prdct_sub_ctgry_query = "UPDATE product_sub_category SET product_category_name='$Product_Category', name='$NAME' WHERE id='$y'";
        
           $result = $connection->query($update_prdct_sub_ctgry_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Product sub category updated successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
 }
    
     public function Project_delete(){
     
      $DeletedID = $_POST['DeletedprjectID'];

    
           $connection = $this->connection;
        
           
           $success = []; 
          
     
           $delete_project_query = "DELETE FROM project WHERE id='$DeletedID'";
        
           $result = $connection->query($delete_project_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Project deleted successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
 
 
 public function Product_sub_ctgry_delete(){
     
      $DeletedprdctsubctgryID = $_POST['DeletedprdctsubctgryID'];

    
           $connection = $this->connection;
        
           
           $success = []; 
          
     
           $delete_project_query = "DELETE FROM product_sub_category WHERE id='$DeletedprdctsubctgryID'";
        
           $result = $connection->query($delete_project_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

          $success['success'] = 'Product sub category deleted successfully!';
               
          return[
           'status' => 'success',
           'message' => $success
          ]; 
           
            
            
          
     
           
 }
    
    
    
      public function Payment_status(){
     
    
           $connection = $this->connection;
          
    
           $view_bank_transfers_query = "SELECT * FROM bank_transfers";
        
           $result = $connection->query($view_bank_transfers_query);
           
           if($connection->error){
               die('Table Error:'.$connection->error);
           }

               
          return $result; 
   
           
 }
}

?>