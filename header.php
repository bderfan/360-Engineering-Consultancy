<?php
session_start();
   ob_start();

 $old = $_POST;

  require('class_libs/HOMECLASS.php');

    $home = new HOMECLASS; 

   $get_category = $home->get_Category();
 
   $get_projects = $home->get_Projects($_GET['name']);

   $get_project_name = $home->get_Projects_name($_GET['name']);
   
   
   $categories = $home->get_product_ctgry();
   
    
   
   
 

   if(isset($_POST['make_transfer'])){
          $add_transfer = $home->Add_transfer();
          
          if($add_transfer['status'] == 'error'){
              $errors = $add_transfer['message'];
          }
          if($add_transfer['status'] == 'success'){
             $success = $add_transfer['message'];
         }  
 }

if(isset($_POST['make_transfer2'])){
          $add_transfer2 = $home->Add_transfer2();
          
          if($add_transfer2['status'] == 'error'){
              $errors = $add_transfer2['message'];
          }
          if($add_transfer2['status'] == 'success'){
             $success = $add_transfer2['message'];
         }  
 }

if(isset($_POST['make_transfer3'])){
          $add_transfer3 = $home->Add_transfer3();
          
          if($add_transfer3['status'] == 'error'){
              $errors = $add_transfer3['message'];
          }
          if($add_transfer3['status'] == 'success'){
             $success = $add_transfer3['message'];
         }  
 }
 
 if(isset($_POST['make_transfer4'])){
          $add_transfer4 = $home->Add_transfer4();
          
          if($add_transfer4['status'] == 'error'){
              $errors = $add_transfer4['message'];
          }
          if($add_transfer4['status'] == 'success'){
             $success = $add_transfer4['message'];
         }  
 }
 
  if(isset($_POST['make_transfer5'])){
          $add_transfer5 = $home->Add_transfer5();
          
          if($add_transfer5['status'] == 'error'){
              $errors = $add_transfer5['message'];
          }
          if($add_transfer5['status'] == 'success'){
             $success = $add_transfer5['message'];
         }  
 }
 
  if(isset($_POST['make_transfer6'])){
          $add_transfer6 = $home->Add_transfer6();
          
          if($add_transfer6['status'] == 'error'){
              $errors = $add_transfer6['message'];
          }
          if($add_transfer6['status'] == 'success'){
             $success = $add_transfer6['message'];
         }  
 }
 
 
 if(isset($_POST['make_transfer7'])){
          $add_transfer7 = $home->Add_transfer7();
          
          if($add_transfer7['status'] == 'error'){
              $errors = $add_transfer7['message'];
          }
          if($add_transfer7['status'] == 'success'){
             $success = $add_transfer7['message'];
         }  
 }
 
 
 if(isset($_POST['make_transfer8'])){
          $add_transfer8 = $home->Add_transfer8();
          
          if($add_transfer8['status'] == 'error'){
              $errors = $add_transfer8['message'];
          }
          if($add_transfer8['status'] == 'success'){
             $success = $add_transfer8['message'];
         }  
 }
 
 
  if(isset($_POST['make_transfer9'])){
          $add_transfer9 = $home->Add_transfer9();
          
          if($add_transfer9['status'] == 'error'){
              $errors = $add_transfer9['message'];
          }
          if($add_transfer9['status'] == 'success'){
             $success = $add_transfer9['message'];
         }  
 }




   ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Best Interior Design Company In Bangladesh | 360 Engineering and Consultancy | Interior Design Dhaka | Agargaon interior designer</title>
   <link rel="preload" href="images/house_interior.avif" as="image" fetchpriority="high">
    <link rel="canonical" href="https://360group.com.bd/" />
    <meta name="description" content="360 Engineering & Consultancy — the best interior design company in Bangladesh. Based in Agargaon, Dhaka, we deliver sustainable and innovative interior solutions tailored to your lifestyle.">
    <link rel="preload" href="/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="images/house_interior.webp" as="image">

    <link rel="icon" href="images/logo.png" type="image/png"style="width: 50px; height:50px;">
    <link href="css/maplibre-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/bootstrap-extensions.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
    <link rel="stylesheet" href="css/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aclonica&family=Alice&family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Calistoga&family=Cantata+One&family=Castoro:ital@0;1&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Display:ital@0;1&family=Domine:wght@400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gilda+Display&family=Gloock&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght,YOPQ@100..900,300&family=Lexend+Deca:wght@100..900&family=Lexend:wght@100..900&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Marcellus&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&family=PT+Serif+Caption:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Prata&family=Supermercado+One&family=Tenor+Sans&family=Ultra&family=Vidaloka&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Alata&family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Cardo:ital,wght@0,400;0,700;1,400&family=Cormorant:ital,wght@0,300..700;1,300..700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Figtree:ital,wght@0,300..900;1,300..900&family=Jost:ital,wght@0,100..900;1,100..900&family=League+Spartan:wght@100..900&family=M+PLUS+Rounded+1c&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Ovo&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Sofia&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "360 Engineering and Consultancy",
    "image": "https://360group.com.bd/logo.png",
    "url": "https://360group.com.bd",
    "telephone": ["+8801335224360", "+8801410360247"],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "102/1 West Agargaon, Darul Yusuf Tower (Level -7)",
      "addressLocality": "Dhaka",
      "postalCode": "1207",
      "addressCountry": "BD"
    },
    "priceRange": "$$",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "23.779409580450405",
      "longitude": "90.3687967910083"
    },
     "openingHours": [
    "Mo 10:00-20:00",
    "We 10:00-20:00",
    "Th 10:00-20:00",
    "Fr 10:00-20:00",
    "Sa 10:00-20:00",
    "Su 10:00-20:00"
  ],
    "sameAs": [
      "https://www.facebook.com/360engineeringNconsultancy",
      "https://www.linkedin.com/company/360-engineeringandconsultancy"
    ]
  }
  </script>
  </head>
  <body style="background-image: url(images/house_interior.webp); background-size: cover; background-repeat: no-repeat; background-position: center; position: relative; ">
  

     
    <header>
      <nav class="navbar navbar-expand-lg py-0">
       <div class="container-fluid">
         <a class="navbar-brand py-0 px-4" href="index"><img src="images/logo.png" alt="logo" style="width: 64px; height: 64px;"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mx-auto">
             <li class="nav-item px-4">
               <a class="nav-link" aria-current="page" href="Project">Projects</a>
             </li>
            <li class="nav-item dropdown px-3">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Interiors
               </a>
               <ul class="dropdown-menu one">
                   <li class="text-end px-2">
                      <button type="button" class="btn-close" onclick="closeDropdown(this)"><i class="fa-solid fa-xmark"></i></button>
                    </li>
                 <li><a class="dropdown-item" href="Residential_interior">Residential Interior</a></li>
                 <li><a class="dropdown-item" href="Corporate_interior">Corporate Interior</a></li>
                 <li><a class="dropdown-item" href="Resort_interior">Hotel / Resort Interior</a></li>
               </ul>
             </li>
               <li class="nav-item px-4">
               <a class="nav-link" aria-current="page" href="offers">Offers</a>
             </li>   
              <li class="nav-item px-4">
               <a class="nav-link" aria-current="page" href="Privacy_policy">Privacy Policy</a>
             </li>  
              <li class="nav-item px-4">
               <a class="nav-link" aria-current="page" href="product">Product</a>
             </li>  
              <li class="nav-item">
    <?php if(isset($_SESSION['cartList'])): ?>
        <?php if(count($_SESSION['cartList']['items']) > 0): ?>
    <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Cart 
                <span class="badge text-bg-secondary">
                    <?php echo count($_SESSION['cartList']['items']); ?>
                </span>
  </a>
           
        <?php endif; ?>
    <?php endif; ?>
<?php if(isset($_SESSION['cartList'])): ?>        
        <div class="collapse" id="collapseExample">
            <div class="card card-body" style="width: 300px; max-height: 400px; overflow-y: auto;">
                
                    <?php 
                    if(count($_SESSION['cartList']['items']) > 0){
                        foreach($_SESSION['cartList']['items'] as $items){ ?>   
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                       <img src="images/upload/<?php echo $items['Category']; ?>/<?php echo $items['Image']; ?>" 
                                         alt="<?php echo $items['Name']; ?>" 
                                         style="width:100px; height:100px;"> 
                                    </div>
                                    <h5 class="text-danger text-center mt-3">
                                        <span class="fw-bold">Name:</span> <?php echo $items['Name']; ?><br>
                                        <span class="fw-bold">Brand:</span> <?php echo $items['Brand']; ?><br>
                                        <span class="fw-bold">Price:</span> <?php echo $items['Price']; ?><br>
                                        <span class="fw-bold">Qty:</span> <?php echo $items['Quantity']; ?><br>
                                        <span class="fw-bold">Total price:</span> <?php echo $items['Price'] * $items['Quantity']; ?>
                                    </h5>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <div class="row">
                            <div class="col-6 mx-auto">
                                <h4 class="text-center">No product</h4>
                            </div>
                        </div>
                    <?php } ?>
               
                <div class="mt-1 d-flex justify-content-center">
                    <a href="Checkout" class="btn btn-sm btn-warning">Checkout</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
</li>
  
           </ul>
          
         </div>
       </div>
     </nav>
        
    </header>