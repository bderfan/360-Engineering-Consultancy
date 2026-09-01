<?php
error_reporting(E_ERROR | E_PARSE);
 ob_start();
 session_start();

 $old = $_POST;

 if(!isset($_SESSION['authenticate'])){
     header('Location:../index');
 }

 if(isset($_POST['Loggedout'])){
         session_destroy();
         session_unset();
         header('Location:../index');
 }

 if(isset($_POST['save_btn'])){
     require('../authenticate');
     $update = update_admin();
     if($update['status'] == 'success'){
        $success = $update['message'];
    }
      if($update['status'] == 'error'){
        $errors = $update['message'];
    }
    
  }


require('../class_libs/ADMINCLASS.php');

$home = new ADMINCLASS;

 if(isset($_POST['Update'])){
          $update_admin = $home->Admin_update();
          
      if($update_admin['status'] == 'error'){
              $errors = $update_admin['message'];
          }
          if($update_admin['status'] == 'success'){
             $success = $update_admin['message'];
         }  
 }
  
if(isset($_POST['add_category'])){
          $add_category = $home->Add_category();
          
          if($add_category['status'] == 'error'){
              $errors = $add_category['message'];
          }
          if($add_category['status'] == 'success'){
             $success = $add_category['message'];
         }  
 }


 if(isset($_POST['update_category'])){
          $update_category = $home->Category_update();
          
      if($update_category['status'] == 'error'){
              $errors = $update_category['message'];
          }
          if($update_category['status'] == 'success'){
             $success = $update_category['message'];
         }  
 }
 
 
  if(isset($_POST['update_prdct_category'])){
          $update_prdct_category = $home->Prdct_category_update();
          
      if($update_prdct_category['status'] == 'error'){
              $errors = $update_prdct_category['message'];
          }
          if($update_prdct_category['status'] == 'success'){
             $success = $update_prdct_category['message'];
         }  
 }


if(isset($_POST['DeletedID'])){
          $delete_category = $home->Category_delete();
          
          if($delete_category['status'] == 'success'){
             $success = $delete_category['message'];
         }  
 }
 
 
 
 if(isset($_POST['DeletedprdctctgryID'])){
          $delete_prdct_category = $home->Prdct_category_delete();
          
          if($delete_prdct_category['status'] == 'success'){
             $success = $delete_prdct_category['message'];
         }  
 }
 
 
  if(isset($_POST['DeletedprdctID'])){
          $delete_prdct = $home->Prdct_delete();
          
          if($delete_prdct['status'] == 'success'){
             $success = $delete_prdct['message'];
         }  
 }



if(isset($_POST['add_project'])){

          $add_project = $home->Add_project();
          
          if($add_project['status'] == 'error'){
              $errors = $add_project['message'];
          }
          if($add_project['status'] == 'success'){
             $success = $add_project['message'];
         }  
 }
 
 
 if(isset($_POST['add_product'])){

          $add_product = $home->Add_product();
          
          if($add_product['status'] == 'error'){
              $errors = $add_product['message'];
          }
          if($add_product['status'] == 'success'){
             $success = $add_product['message'];
         }  
 }
 
 
 if(isset($_POST['add_prdct_sub_ctgry'])){

          $add_prdct_sub_ctgry = $home->Add_prdct_sub_ctgry();
          
          if($add_prdct_sub_ctgry['status'] == 'error'){
              $errors = $add_prdct_sub_ctgry['message'];
          }
          if($add_prdct_sub_ctgry['status'] == 'success'){
             $success = $add_prdct_sub_ctgry['message'];
         }  
 }
 
 
 
 if(isset($_POST['add_prduct_category'])){
          $add_prduct_category = $home->Add_product_category();
          
          if($add_prduct_category['status'] == 'error'){
              $errors = $add_prduct_category['message'];
          }
          if($add_prduct_category['status'] == 'success'){
             $success = $add_prduct_category['message'];
         }  
 }

$admin = $home->Admin();
 

$categories = $home->Category();


$projects = $home->Project();


$products = $home->Product();

$prdct_categories = $home->prdct_Category();

$prdct_sub_categories = $home->prdct_sub_category();

$consultations = $home->Consultation();


$payments_status = $home->Payment_status();


$get_project = $home->Get_project($_GET['id']);

$get_product = $home->Get_product($_GET['id']);

$get_prdct_ctgry = $home->Get_product_ctgry($_GET['id']);


if(isset($_POST['update_project'])){
          $update_project = $home->Update_project($_GET['id']);
          
          if($update_project['status'] == 'error'){
              $errors = $update_project['message'];
          }
          if($update_project['status'] == 'success'){
             $success = $update_project['message'];
         }  
 }
 
 
 
 if(isset($_POST['update_product'])){
          $update_product = $home->Update_product($_GET['id']);
          
          if($update_product['status'] == 'error'){
              $errors = $update_product['message'];
          }
          if($update_product['status'] == 'success'){
             $success = $update_product['message'];
         }  
 }
 
 
 
 if(isset($_POST['update_product_sub_ctgry'])){
          $update_product_sub_ctgry = $home->Update_product_sub_ctgry($_GET['id']);
          
          if($update_product_sub_ctgry['status'] == 'error'){
              $errors = $update_product_sub_ctgry['message'];
          }
          if($update_product_sub_ctgry['status'] == 'success'){
             $success = $update_product_sub_ctgry['message'];
         }  
 }



if(isset($_POST['DeletedprjectID'])){
          $delete_project = $home->Project_delete();
          
          if($delete_project['status'] == 'success'){
             $success = $delete_project['message'];
         }  
 }
 
 
 if(isset($_POST['DeletedprdctsubctgryID'])){
          $delete_sub_ctgry = $home->Product_sub_ctgry_delete();
          
          if($delete_sub_ctgry['status'] == 'success'){
             $success = $delete_sub_ctgry['message'];
         }  
 }
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Best Interior Design Company In Bangladesh | 360 Engineering and Consultancy | Interior Design Dhaka | Agargaon interior designer</title>
<link rel="icon" href="../images/logo.png" type="image/png"style="width: 50px; height:50px;">
    <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="../css/vendor/sb-admin-2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aclonica&family=Alice&family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Calistoga&family=Cantata+One&family=Castoro:ital@0;1&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Display:ital@0;1&family=Domine:wght@400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gilda+Display&family=Gloock&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght,YOPQ@100..900,300&family=Lexend+Deca:wght@100..900&family=Lexend:wght@100..900&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Marcellus&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&family=PT+Serif+Caption:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Prata&family=Supermercado+One&family=Tenor+Sans&family=Ultra&family=Vidaloka&family=Yeseva+One&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Alata&family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Cardo:ital,wght@0,400;0,700;1,400&family=Cormorant:ital,wght@0,300..700;1,300..700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Figtree:ital,wght@0,300..900;1,300..900&family=Jost:ital,wght@0,100..900;1,100..900&family=League+Spartan:wght@100..900&family=M+PLUS+Rounded+1c&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Ovo&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Sofia&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
  
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    
      .sidebar .nav-link {
        font-weight: 500;
        color: #fff;
      }
      .sidebar .nav-link.active {
        color: #011533;
      }
    
      .ck-editor__editable {min-height: 500px;}
    
    
    .Category_form{
    width: 75%;
    margin: 0 auto;
    opacity: 1 !important;
    visibility: visible !important;
    background-color: rgb(237 222 255) !important;
}

.Category_form input, textarea{
    display: block;
    width: 100%;
    border-radius: .375rem;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 2px solid rgb(255, 152, 66);
}

.Category_form span{
    display: inline-block;
    width: 23%;
    align-items: center;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    white-space: nowrap;
    background-color: #d3d3d3;
    border: 2px solid rgb(255 186 128);
    border-radius: .375rem;
}

.Category_form #form_sq_input{
    width: 75%;
    display: inline-block;
}

.Category_form button{
   background: #dcdcdc;
}

.Category_form button:hover{
      background: #646464;
    color: #fff;
}

.Category_form input:focus, #Category_form textarea:focus{
    color: #212529;
    background-color: #dedede;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(255 177 113);
}
    
#Search_form button {
  cursor: pointer;
}

#Search_form .searchinput {
  width: 0;
  padding: 0;
  transition: all linear .3s;
  opacity: 0;
}

#Search_form .searchinput.active {
  width: 200px;
    opacity: 1;
    padding: .375rem .75rem;
     font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #000;
    background: transparent;
}
@media (max-width: 301px) {
#Search_form .searchinput.active {
  width: 170px;
}
}
    .prf_img{
        width: 150px; height: 150px;
    }
@media (max-width: 301px) {
.prf_img{
    width: 95px; height: 95px;
}
}
@media (max-width: 201px) {
.prf_img{
    width: 40px; height: 40px;
}
}
    
    
    .trnsctn_modal{
    background: #c8c8c8; width: 1000px; left: 50%; transform: translateX(-50%);
}
@media (max-width: 992px) {
.trnsctn_modal{
     width: 900px;
}
}
@media (max-width: 768px) {
.trnsctn_modal{
     width: 650px;
}
}
@media (max-width: 686px) {
.trnsctn_modal{
     width: 550px;
}
}
@media (max-width: 601px) {
.trnsctn_modal{
     width: 450px;
}
}
@media (max-width: 501px) {
.trnsctn_modal{
     width: 350px;
}
}
@media (max-width: 385px) {
.trnsctn_modal{
     width: 250px;
}
}
@media (max-width: 281px) {
.trnsctn_modal{
     width: 200px;
}
}
@media (max-width: 253px) {
.trnsctn_modal{
     width: 175px;
}
}
   .table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 10px 0;
  text-align: center;
  font-family: Mona Sans, sans-serif;
  border: 1px solid #ddd;
     overflow: hidden;
      height: auto;
      font-size: 15px;
}

.table img {
  max-width: 100%;
  height: auto;
  display: block;
}

/* Responsive behavior */
@media (max-width: 768px) {
  .table thead {
    display: none; /* hide thead, but we'll show labels via data-label */
  }

  .table, .table tbody, .table tr, .table td {
    display: block;
    width: 100%;
  }

  .table tr {
    margin-bottom: 15px;
    background: #92b1d0;
    border-radius: 8px;
    padding: 10px;
  }

  .table td {
    text-align: left;
    padding: 8px;
    position: relative;
       overflow: hidden;
      height: auto;
       line-break: anywhere;
  }

  /* Show header labels before each cell */
  .table td::before {
    content: attr(data-label);
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
  }
}
 
    
    
    @media (max-width: 301px) {
        .Category_form{
            width: 100%
        }
}
    
   
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       











