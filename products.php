<?php


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
<?php
$category = strtolower(str_replace(' ', '-', $_GET['category'] ?? 'default'));
$sub = strtolower(str_replace(' ', '-', $_GET['sub_category'] ?? 'default'));

if($category === 'hardware'){
    switch($sub){
        case 'hinge':
            $title = "Best Hinges in Bangladesh | 360 Engineering and Consultancy";
            $description = "Durable and affordable hinges for furniture and construction. Available now at 360 Engineering and Consultancy.";
            break;
        case 'lock':
            $title = "High‑Quality Locks in Bangladesh | 360 Engineering and Consultancy";
            $description = "Secure and reliable locks for doors and cabinets. Trusted hardware from 360 Engineering and Consultancy.";
            break;
        case 'handle':
            $title = "Stylish Handles in Bangladesh | 360 Engineering and Consultancy";
            $description = "Modern handles with durable finish. Perfect for home and office furniture.";
            break;
        case 'knob':
            $title = "Stylish Knobs in Bangladesh | 360 Engineering and Consultancy";
            $description = "Modern and durable knobs for furniture and cabinets. Affordable designs available at 360 Engineering and Consultancy.";
            break;
        case 'white-gum':
            $title = "White Gum Adhesive in Bangladesh | 360 Engineering and Consultancy";
            $description = "High‑quality white gum adhesive for woodworking and furniture projects. Strong bonding solutions from 360 Engineering and Consultancy.";
            break;
        case 'solution-gum':
            $title = "Solution Gum Adhesive in Bangladesh | 360 Engineering and Consultancy";
            $description = "Reliable solution gum adhesive for construction and furniture applications. Long‑lasting performance from 360 Engineering and Consultancy.";
            break;
        case 'screw':
            $title = "Premium Screws in Bangladesh | 360 Engineering and Consultancy";
            $description = "Durable screws for furniture, hardware, and construction projects. Available now at 360 Engineering and Consultancy.";
            break;
        case 'edging':
            $title = "Furniture Edging Supplies in Bangladesh | 360 Engineering and Consultancy";
            $description = "High‑quality edging materials for furniture finishing. Smooth and durable solutions from 360 Engineering and Consultancy.";
            break;
        case 'wheel':
            $title = "Furniture & Door Wheels in Bangladesh | 360 Engineering and Consultancy";
            $description = "Strong and smooth wheels for door and furniture. Easy installation with reliable performance.";
            break;
        case 'door-encloser':
            $title = "Door Enclosers in Bangladesh | 360 Engineering and Consultancy";
            $description = "Durable door enclosers for secure and smooth closing. Trusted hardware solutions from 360 Engineering and Consultancy.";
            break;
        default:
            $title = "Hardware Supplies in Bangladesh | 360 Engineering and Consultancy";
            $description = "Explore premium hardware products including hinges, locks, and fittings. Reliable quality at competitive prices.";
    }
} else {
    switch($category) {
        case 'board':
            $title = "Best Boards in Bangladesh | 360 Engineering and Consultancy";
            $description = "High‑quality boards for furniture and construction. Affordable prices from 360 Engineering and Consultancy.";
            break;
        case 'kitchen-accessories':
            $title = "Modern Kitchen Accessories in Bangladesh | 360 Engineering and Consultancy";
            $description = "Upgrade your kitchen with stylish and durable accessories. Affordable solutions from 360 Engineering and Consultancy.";
            break;
        case 'light':
            $title = "Interior & Exterior Lighting Solutions | 360 Engineering and Consultancy";
            $description = "Energy‑efficient lighting for homes and offices. Discover modern designs at 360 Engineering and Consultancy.";
            break;
        case 'top':
            $title = "Furniture Tops & Surfaces in Bangladesh | 360 Engineering and Consultancy";
            $description = "Durable and stylish tops for tables, counters, and furniture. Quality craftsmanship from 360 Engineering and Consultancy.";
            break;
        case 'glass':
            $title = "Glass Sheets & Panels in Bangladesh | 360 Engineering and Consultancy";
            $description = "Clear, tinted, and decorative glass for interiors and exteriors. Available now at 360 Engineering and Consultancy.";
            break;
        case 'aluminium':
            $title = "Aluminium Profiles & Sections in Bangladesh | 360 Engineering and Consultancy";
            $description = "Strong aluminium profiles for construction and design projects. Affordable and durable.";
            break;
        case 'drawer-channel':
            $title = "Smooth Drawer Channels in Bangladesh | 360 Engineering and Consultancy";
            $description = "High‑quality drawer channels for furniture. Easy installation and long‑lasting performance.";
            break;
        default:
            $title = "Best Interior Design Company In Bangladesh | 360 Engineering and Consultancy | Interior Design Dhaka | Agargaon interior designer";
            $description = "360 Engineering and Consultancy delivers sustainable design, consultancy, and construction solutions across Bangladesh.";
    }
}

echo "<title>$title</title>";
echo "<link rel='canonical' href='https://360group.com.bd/products?sub_category=$sub' />";
echo "<meta name='description' content='$description'>";
?>


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
      
    <main>
     


        
    <!=========================== Materials part ================================>        
<section id="Materials" style="background: #ff7300;">
    <div class="row">
 <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="list-group">
        <?php
        if(mysqli_num_rows($categories)>0){
          while($category = mysqli_fetch_assoc($categories)){
        ?>
          <!-- Category -->
          <a href="#sub-<?php echo $category['id']; ?>" 
             class="list-group-item list-group-item-action" 
             data-bs-toggle="collapse" 
             role="button" 
             aria-expanded="false" 
             aria-controls="sub-<?php echo $category['id']; ?>">
             <?php echo htmlspecialchars($category['name']); ?>
          </a>

          <?php if(strtolower($category['name']) === 'hardware'){ ?>
            <!-- Hardware sub-categories -->
            <div id="sub-<?php echo $category['id']; ?>" class="collapse ms-3">
              <?php
              $subcategories = $home->getSubCategoriesByCategory($category['name']); 
              if($subcategories && mysqli_num_rows($subcategories)>0){
                while($sub = mysqli_fetch_assoc($subcategories)){ ?>
                  <a href="#prod-<?php echo $sub['id']; ?>" 
                     class="list-group-item list-group-item-action" 
                     data-bs-toggle="collapse" 
                     role="button" 
                     aria-expanded="false" 
                     aria-controls="prod-<?php echo $sub['id']; ?>">
                     <?php echo htmlspecialchars($sub['name']); ?>
                  </a>

                  <!-- Products under sub-category -->
                  <div id="prod-<?php echo $sub['id']; ?>" class="collapse ms-3">
                    <?php
                    $products = $home->getProductsBySubCategory($sub['name']);
                    $shown = [];
                    if($products && mysqli_num_rows($products)>0){
                       while($product = mysqli_fetch_assoc($products)){
                        if(!in_array($product['name'],$shown)){
                          echo '<a href="products?name='.$product['name'].'&category='.$product['prdct_ctgry_name'].'&sub_category='.$product['prdct_sub_ctgry_name'].'" 
                                   class="list-group-item list-group-item-action">'
                               . htmlspecialchars($product['name']) .
                               '</a>';
                          $shown[] = $product['name'];
                        }
                      }
                    }
                    ?>
                  </div>
                <?php }
              } ?>
            </div>
          <?php } else { 
            // Non-hardware categories: show products directly
            $products = $home->getProductsByCategory($category['name']);
            ?>
            <div id="sub-<?php echo $category['id']; ?>" class="collapse ms-3">
              <?php
              $shown = [];
              if($products && mysqli_num_rows($products)>0){
                while($product = mysqli_fetch_assoc($products)){
                  if(!in_array($product['name'],$shown)){
                    echo '<a href="products?name='.$product['name'].'&category='.$product['prdct_ctgry_name'].'" 
                             class="list-group-item list-group-item-action">'
                         . htmlspecialchars($product['name']) .
                         '</a>';
                    $shown[] = $product['name'];
                  }
                }
              }
              ?>
            </div>
          <?php } ?>
        <?php
          }
        }
        ?>
      </div>
    </div>
         <div class="col-9 pt-5 mx-auto">
            <div class="container">
        <div class="row gy-5">
          <?php
// Define formatter once
function formatIndianNumber($num) {
  $num = (string)$num;
  $lastThree = substr($num, -3);
  $restUnits = substr($num, 0, -3);
  if($restUnits != '') {
    $lastThree = ',' . $lastThree;
  }
  return preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $restUnits) . $lastThree;
}

$products = $home->get_product($_GET['name'], $_GET['sub_category']);

if($products && mysqli_num_rows($products) > 0){
  while($product = mysqli_fetch_assoc($products)){
?>
<div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch">
  <div class="card p-3" style="width: 100%; box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;">
    <img src="images/upload/<?php echo $product['prdct_ctgry_name']?>/<?php echo $product['image']?>" 
         class="card-img-top rounded" 
         alt="<?php echo $product['name']?>" 
         style="height: 240px;">
    <div class="card-body text-center">
      <h5 class="card-title"><span class="fw-bold">Name:</span> <?php echo $product['name']?></h5>
      <?php if(!empty($product['brand'])): ?>
        <h5 class="card-title mt-2"><span class="fw-bold">Brand/Company:</span> <?php echo $product['brand']?></h5>
      <?php endif; ?>
      <h5 class="card-title mt-3">
        <span class="fw-bold">Price:</span> 
        <?php echo formatIndianNumber($product['price']); ?>/-
      </h5>
      <div class="d-flex justify-content-center">
        <a href="product_cart?id=<?php echo $product['id'];?>" class="btn" style="background: #ff7300;">Go to cart</a>
      </div>
    </div>
  </div>
</div>
<?php
  }
}
?>

            
           
        </div>
    </div>
        </div>
    </div>
    
</section>

       
           
        
    </main>
      
<?php
  include('footer.php');
?>