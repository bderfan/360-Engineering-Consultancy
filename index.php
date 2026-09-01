<?php
  include('header.php');

   $old = $_POST;

  require_once('class_libs/HOMECLASS.php');
       $add_consultation = new HOMECLASS;

     if(isset($_POST['add_consultation'])){
          $consultation_add = $add_consultation->Consultation_add();
          
           if($consultation_add['status'] == 'error'){
             $errors = $consultation_add['message'];
         }
          if($consultation_add['status'] == 'success'){
             $success = $consultation_add['message'];
         }  
     }

$categories = $add_consultation->get_product_ctgry();


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
             header('Refresh:1,url=index.php');
             }
          ?>  
      <!=========================== Banner part ================================>
      <section id="Banner">
  <div class="video-container">
    <video autoplay muted loop width="100%">
      <source src="videos/UttoraShowreel.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="overlay">
     <h4 class="txt-yellow" style="font-family: Alice, serif; font-size: 75px;">Welcome to<br><span class="typed-text" style="font-size: 50px; font-weight: 900; color: #ff7300;"></span><span class="cursor">&nbsp;</span></h4>
            </div>
    </div>
     <div class="video_marquee py-3">
      <marquee style="font-family: Alice, serif;" scrollamount="10" scrolldelay="50" direction="left" class="fs-2 fw-bold">ইন্টেরিয়র মানেই<span style="color: #ff7300;"> ৩৬০</span></marquee>
    </div>
</section>

        
    
        
       <!=========================== Service1 part ================================>
<section id="Service1" class="py-5" style="background: #d6d6d6;">
     <div class="row">
      <div class="col-12">
          <div class="carousel-wrapper position-relative">
  <!-- Background panel -->
  <div id="bgCarousel" class="position-absolute top-0 start-0 w-100 h-100">
    <img id="bgImage" src="images/interior6.JPG" class="w-100">
  </div>
   <div class="row">
       <div class="col-4">
      </div>
      <div class="col-4">
      </div>
       <div class="col-4 position-relative">
  <h3 class="my-5 text-center text-white position-relative">We provide</h3>

  <!-- Overlay wrapper anchored to col-4 -->
  <div class="carousel-overlay position-relative bottom-0 start-0 w-100">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/interior6.JPG" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/DSC03941.JPG" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/DSC03950.JPG" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/Kitchen.JPG" class="d-block w-100">
        </div>
      </div>
    </div>
  </div>
</div>

   </div>
           
      </div>
  </div> 
 </div>
</section>

        
     
        
        
         <!=========================== Service2 part ================================>
<section id="Service2" class="bg-white">
 <div class="container">
     <h3 class="text-center" style="font-family: Alice, serif; font-size: 40px;">
          Our Services/Products
        </h3>
  <div class="row" id="Service2_row">
    <!-- Left column: centered text -->
    <div class="col-lg-6 col-md-12 col-sm-12">
         <h3 class="my-5" style="text-align: center; font-family: Alice, serif; font-size: 50px;">Services</h3>
         <ul class="list-group">
  <li class="list-group-item"><i class="fa-solid fa-hand-point-right"></i> Complete interior solution</li>
  <li class="list-group-item"><i class="fa-solid fa-hand-point-right"></i> 3D design</li>
  <li class="list-group-item"><i class="fa-solid fa-hand-point-right"></i> Kitchen cabinet</li>
  <li class="list-group-item"><i class="fa-solid fa-hand-point-right"></i> Construction</li>
  <li class="list-group-item"><i class="fa-solid fa-hand-point-right"></i> Plumber & electrical support (Agragaon based)</li>
</ul>
    </div>
     <div class="col-lg-6 col-md-12 col-sm-12">
         <h3 class="my-5" style="text-align: center; font-family: Alice, serif; font-size: 50px;">Products</h3>
        <div class="row gy-5 px-2">
      <?php
       
       // your function to fetch categories
      if ($categories && mysqli_num_rows($categories) > 0) {
        while ($category = mysqli_fetch_assoc($categories)) {
       
          // get subcategories
          $subcategories = $add_consultation->getSubCategoriesByCategory($category['name']);
          if ($subcategories && mysqli_num_rows($subcategories) > 0) {
            // loop subcategories
            while ($sub = mysqli_fetch_assoc($subcategories)) {
             
                $products = $add_consultation->getProductsBySubCategory2($sub['name']);
              if ($products && mysqli_num_rows($products) > 0) {
                $product = mysqli_fetch_assoc($products); // first product only
                  
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch">
                  <div class="card p-3" style="width: 100%; box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;">
                    <img src="images/upload/<?php echo htmlspecialchars($product['prdct_ctgry_name']); ?>/<?php echo htmlspecialchars($product['image']); ?>" 
                         class="card-img-top rounded" 
                         alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                      <div class="d-flex justify-content-center">
                        <a href="product_cart?id=<?php echo $product['id']; ?>" class="btn" style="background: #ff7300;">Go to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
          } else {
            // no subcategories → get product directly        
           $products2 = $add_consultation->getProductsByCategory2($category['name']);
            if ($products2 && mysqli_num_rows($products2) > 0) {
              $product = mysqli_fetch_assoc($products2);
              ?>
              <div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch">
                <div class="card p-3" style="width: 100%; box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;">
                  <img src="images/upload/<?php echo htmlspecialchars($product['prdct_ctgry_name']); ?>/<?php echo htmlspecialchars($product['image']); ?>" 
                       class="card-img-top rounded" 
                       alt="<?php echo htmlspecialchars($product['name']); ?>">
                  <div class="card-body text-center">
                    <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                    <div class="d-flex justify-content-center">
                      <a href="product_cart?id=<?php echo $product['id']; ?>" class="btn" style="background: #ff7300;">Go to cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          }
        }
      }
      ?>
      <div class="d-flex justify-content-center">
        <a class="btn btn-dark mt-3" href="product">See more products ...</a>
      </div>
    </div>
    </div>

  </div>
 </div>
</section>

        


        
<!=========================== Special part ================================> 
         
<section id="Special">
  <div id="fixedLeft"></div> <!-- background + text layer -->

  <div class="slider-wrapper">
    <div class="slider-viewport">
    <ul class="slider">
     <li class="slide2">
        <img src="images/Exterior2.jpg" alt="Exterior">
        <div class="content">
          <h2 class="title">Exterior</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/rooftop_gardening.jpg" alt="Rooftop Gardening">
        <div class="content">
          <h2 class="title">Rooftop Gardening</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/landscape3.jpeg" alt="Landscape">
        <div class="content">
          <h2 class="title">Landscape</h2>
        </div>
      </li>
       <li class="slide2">
        <img src="images/Damproof_Solution.png" alt="Damproof Solution">
        <div class="content">
          <h2 class="title">Damproof Solution</h2>
        </div>
      </li>
       <li class="slide2">
        <img src="images/Heatproof_Solutio.jpeg" alt="Heatproof Solution">
        <div class="content">
          <h2 class="title">Heatproof Solution</h2>
        </div>
      </li>
       <li class="slide2">
        <img src="images/fairface.jpg" alt="Fair-face Solution">
        <div class="content">
          <h2 class="title">Fair-face Solution</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/painting_solution.jpg" alt="Painting Solution">
        <div class="content">
          <h2 class="title">Painting Solution</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/epoxy_floor.jpeg" alt="Epoxy Flooring">
        <div class="content">
          <h2 class="title">Epoxy Flooring</h2>
        </div>
      </li>
       <li class="slide2">
        <img src="images/Tiles_work.jpg" alt="Tiles Work">
        <div class="content">
          <h2 class="title">Tiles Work</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/landshare1.jpg" alt="Land Share">
        <div class="content">
          <h2 class="title">Land Share</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/Construction.jpeg" alt="Building Construction">
        <div class="content">
          <h2 class="title">Building Construction</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/3D_Bim.png" alt="3D Modeling & Bim">
        <div class="content">
          <h2 class="title">3D Modeling & Bim</h2>
        </div>
      </li>
       <li class="slide2">
        <img src="images/Exhibition3.jpeg" alt="Exhibition Setup">
        <div class="content">
          <h2 class="title">Exhibition Setup</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/Duplex1.jpeg" alt="Duplex">
        <div class="content">
          <h2 class="title">Duplex</h2>
        </div>
      </li>
      <li class="slide2">
        <img src="images/Architecture.jpeg" alt="Architectural Drawing">
        <div class="content">
          <h2 class="title">Architectural Drawing</h2>
        </div>
      </li>
    </ul>
  </div>

  <nav class="nav" style="position: absolute; bottom: 0; left: 30px;">
    <div class="btn prev"><i class="fa-solid fa-arrow-left"></i></div>
    <div class="btn next"><i class="fa-solid fa-arrow-right-long"></i></div>
  </nav>
  </div>
</section>
        
        
        
      <!=========================== Banner2 part ================================> 
         
<section id="Banner2">
 <div class="row">
     <div class="col-12">
         <img src="images/Banner2.png" alt="Banner2">
     </div>
 </div>
</section>         
        



<!=========================== Map part ================================> 
         
 <section id="Map" class="py-0">
        <div class="row">
         <div class="col-lg-4 col-md-12 col-sm-12 px-0">
            <div class="map_welcome">
               <div class="map_video-container">
    <video autoplay muted loop width="100%">
      <source src="videos/map.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="map_overlay">
      <h1 style="font-family: Alice, serif; font-size: 40px;">Reach us</h1>
    </div>
  </div> 
            </div>
           </div>        
          <div class="col-lg-8 col-md-12 col-sm-12 px-0">
            <div id="map"></div>
          </div>
        </div>
      </section>
      
      
        <!=========================== Interior_drawing part ================================>
<section id="Interior_drawing" style="background: #DF6500;">
 <div class="video-container">
      <video autoplay muted loop width="100%">
      <source src="videos/curtain3.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="overlay">
<div class="container">
     <div class="row">
  <div class="col-lg-7 col-md-12 col-sm-12">
       <div class="tools" style="margin-top: 210px;">
  <button onclick="setTool('move')">Move Tool</button>
  <button onclick="setTool('resize')">Resize Tool</button>
  <button onclick="setTool('crop')">Crop Tool</button>
  <button onclick="setTool('transform')">3D Transform Tool</button>
</div>
    <canvas id="wallCanvas" class="mt-5"></canvas> 
       <form class="px-2 rounded rounded-4" enctype="multipart/form-data">
            <div class="mb-3">
    <label for="Image" class="form-label fw-bold" style="font-family: Mona Sans, sans-serif;">Upload Wall Image</label>
    <input type="file" class="form-control" id="Image">
  </div>

        </form>

  <div class="palette mb-5">
        <h3 style="font-family: Alice, serif; font-size: 40px;">Choose Wall Template</h3>
        <div class="palette mydesigns">
        <img src="images/design5_thumb.jpg" alt="Design 3" onclick="addItem('design5.jpg')">
        <img src="images/design6_thumb.jpg" alt="Design 3" onclick="addItem('design6.jpg')">
            <img src="images/design7_thumb.jpg" alt="Design 3" onclick="addItem('design7.jpg')" draggable="true">
            <img src="images/design9_thumb.jpg" alt="Design 3" onclick="addItem('design9.jpg')" draggable="true">
            <img src="images/design10_thumb.jpg" alt="Design 3" onclick="addItem('design10.jpg')" draggable="true">
            <img src="images/design11_thumb.jpg" alt="Design 3" onclick="addItem('design11.jpg')" draggable="true">
            <img src="images/design12_thumb.jpg" alt="Design 3" onclick="addItem('design12.jpg')" draggable="true">
            <img src="images/design13_thumb.jpg" alt="Design 3" onclick="addItem('design13.jpg')" draggable="true">
            <img src="images/design14_thumb.jpg" alt="Design 3" onclick="addItem('design14.jpg')" draggable="true">
            <img src="images/design16_thumb.jpg" alt="Design 3" onclick="addItem('design16.jpg')" draggable="true">
            <img src="images/design17_thumb.jpg" alt="Design 3" onclick="addItem('design17.jpg')" draggable="true">
            <img src="images/design18_thumb.jpg" alt="Design 3" onclick="addItem('design18.jpg')" draggable="true">
            <img src="images/design19_thumb.jpg" alt="Design 3" onclick="addItem('design19.jpg')" draggable="true">
            <img src="images/design20_thumb.jpg" alt="Design 3" onclick="addItem('design20.jpg')" draggable="true">
            <img src="images/design21_thumb.jpg" alt="Design 3" onclick="addItem('design21.jpg')" draggable="true">
            <img src="images/design22_thumb.jpg" alt="Design 3" onclick="addItem('design22.jpg')" draggable="true">
            <img src="images/design23_thumb.jpg" alt="Design 3" onclick="addItem('design23.jpg')" draggable="true">
            <img src="images/design24_thumb.jpg" alt="Design 3" onclick="addItem('design24.jpg')" draggable="true">
            <img src="images/design25_thumb.jpg" alt="Design 3" onclick="addItem('design25.jpg')" draggable="true">
            <img src="images/design26_thumb.jpg" alt="Design 3" onclick="addItem('design26.jpg')" draggable="true">
            <img src="images/design27_thumb.jpg" alt="Design 3" onclick="addItem('design27.jpg')" draggable="true">
            <img src="images/design28_thumb.jpg" alt="Design 3" onclick="addItem('design28.jpg')" draggable="true">
            <img src="images/design29_thumb.jpg" alt="Design 3" onclick="addItem('design29.jpg')" draggable="true">
            <img src="images/design30_thumb.jpg" alt="Design 3" onclick="addItem('design30.jpg')" draggable="true">
            <img src="images/design31_thumb.jpg" alt="Design 3" onclick="addItem('design31.jpg')" draggable="true">
            <img src="images/design32_thumb.jpg" alt="Design 3" onclick="addItem('design32.jpg')" draggable="true">
            <img src="images/design33_thumb.jpg" alt="Design 3" onclick="addItem('design33.jpg')" draggable="true">
            <img src="images/design34_thumb.jpg" alt="Design 3" onclick="addItem('design34.jpg')" draggable="true">
            <img src="images/design35_thumb.jpg" alt="Design 3" onclick="addItem('design35.jpg')" draggable="true">
            <img src="images/design36_thumb.jpg" alt="Design 3" onclick="addItem('design36.jpg')" draggable="true">
            <img src="images/design37_thumb.jpg" alt="Design 3" onclick="addItem('design37.jpg')" draggable="true">
            <img src="images/design38_thumb.jpg" alt="Design 3" onclick="addItem('design38.jpg')" draggable="true">
            <img src="images/design39_thumb.jpg" alt="Design 3" onclick="addItem('design39.jpg')" draggable="true">
            <img src="images/design40_thumb.jpg" alt="Design 3" onclick="addItem('design40.jpg')" draggable="true">
            <img src="images/design41_thumb.jpg" alt="Design 3" onclick="addItem('design41.jpg')" draggable="true">
            <img src="images/design42_thumb.jpg" alt="Design 3" onclick="addItem('design42.jpg')" draggable="true">
            <img src="images/design43_thumb.jpg" alt="Design 3" onclick="addItem('design43.jpg')" draggable="true">
            <img src="images/design44_thumb.jpg" alt="Design 3" onclick="addItem('design44.jpg')" draggable="true">
            <img src="images/design45_thumb.jpg" alt="Design 3" onclick="addItem('design45.jpg')" draggable="true">
            <img src="images/design46_thumb.jpg" alt="Design 3" onclick="addItem('design46.jpg')" draggable="true">
            <img src="images/design47_thumb.jpg" alt="Design 3" onclick="addItem('design47.jpg')" draggable="true">
            <img src="images/design48_thumb.jpg" alt="Design 3" onclick="addItem('design48.jpg')" draggable="true">
            <img src="images/design49_thumb.jpg" alt="Design 3" onclick="addItem('design49.jpg')" draggable="true">
            <img src="images/design50_thumb.jpg" alt="Design 3" onclick="addItem('design50.jpg')" draggable="true">
      </div>
         <div class="d-flex justify-content-end">
              <button class="prevBtn"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nextBtn"><i class="fa-solid fa-arrow-right"></i></button>
         </div>
      </div>
      
      
      
  <div class="palette mb-5">
        <h3 style="font-family: Alice, serif; font-size: 40px;">Choose Track Light</h3>
        <div class="palette mydesigns2">
        <img src="images/design51_thumb.png" alt="Design 3" onclick="addItem('design51.png')">
        <img src="images/design52_thumb.png" alt="Design 3" onclick="addItem('design52.png')">
            <img src="images/design53_thumb.png" alt="Design 3" onclick="addItem('design53.png')" draggable="true">
            <img src="images/design54_thumb.png" alt="Design 3" onclick="addItem('design54.png')" draggable="true">
             <img src="images/design55_thumb.png" alt="Design 3" onclick="addItem('design55.png')" draggable="true">
              <img src="images/design56_thumb.png" alt="Design 3" onclick="addItem('design56.png')" draggable="true">
               <img src="images/design57_thumb.png" alt="Design 3" onclick="addItem('design57.png')" draggable="true">
                <img src="images/design58_thumb.png" alt="Design 3" onclick="addItem('design58.png')" draggable="true">
                 <img src="images/design59_thumb.png" alt="Design 3" onclick="addItem('design59.png')" draggable="true">
                  <img src="images/design60_thumb.png" alt="Design 3" onclick="addItem('design60.png')" draggable="true">
                   <img src="images/design61_thumb.png" alt="Design 3" onclick="addItem('design61.png')" draggable="true">
                    <img src="images/design62_thumb.png" alt="Design 3" onclick="addItem('design62.png')" draggable="true">
                     <img src="images/design63_thumb.png" alt="Design 3" onclick="addItem('design63.png')" draggable="true">
                      <img src="images/design64_thumb.png" alt="Design 3" onclick="addItem('design64.png')" draggable="true">
                       <img src="images/design65_thumb.png" alt="Design 3" onclick="addItem('design65.png')" draggable="true">
                        <img src="images/design66_thumb.png" alt="Design 3" onclick="addItem('design66.png')" draggable="true">
                         <img src="images/design67_thumb.png" alt="Design 3" onclick="addItem('design67.png')" draggable="true">
                          <img src="images/design68_thumb.png" alt="Design 3" onclick="addItem('design68.png')" draggable="true">
                           <img src="images/design69_thumb.png" alt="Design 3" onclick="addItem('design69.png')" draggable="true">
                            <img src="images/design70_thumb.png" alt="Design 3" onclick="addItem('design70.png')" draggable="true">
      </div>
         <div class="d-flex justify-content-end">
              <button class="prevBtn2"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nextBtn2"><i class="fa-solid fa-arrow-right"></i></button>
         </div>
      </div>
      
      
      
      
      <div class="palette mb-5">
        <h3 style="font-family: Alice, serif; font-size: 40px;">Choose Curtain</h3>
        <div class="palette mydesigns3">
        <img src="images/design71_thumb.png" alt="Design 3" onclick="addItem('design71.png')">
        <img src="images/design72_thumb.png" alt="Design 3" onclick="addItem('design72.png')">
            <img src="images/design73_thumb.png" alt="Design 3" onclick="addItem('design73.png')" draggable="true">
            <img src="images/design74_thumb.png" alt="Design 3" onclick="addItem('design74.png')" draggable="true">
             <img src="images/design75_thumb.png" alt="Design 3" onclick="addItem('design75.png')" draggable="true">
              <img src="images/design76_thumb.png" alt="Design 3" onclick="addItem('design76.png')" draggable="true">
               <img src="images/design77_thumb.png" alt="Design 3" onclick="addItem('design77.png')" draggable="true">
                <img src="images/design78_thumb.png" alt="Design 3" onclick="addItem('design78.png')" draggable="true">
                 <img src="images/design79_thumb.png" alt="Design 3" onclick="addItem('design79.png')" draggable="true">
                  <img src="images/design80_thumb.png" alt="Design 3" onclick="addItem('design80.png')" draggable="true">
                   <img src="images/design81_thumb.png" alt="Design 3" onclick="addItem('design81.png')" draggable="true">
                    <img src="images/design82_thumb.png" alt="Design 3" onclick="addItem('design82.png')" draggable="true">
                     <img src="images/design83_thumb.png" alt="Design 3" onclick="addItem('design83.png')" draggable="true">
                      <img src="images/design84_thumb.png" alt="Design 3" onclick="addItem('design84.png')" draggable="true">
                       <img src="images/design85_thumb.png" alt="Design 3" onclick="addItem('design85.png')" draggable="true">
                        <img src="images/design86_thumb.png" alt="Design 3" onclick="addItem('design86.png')" draggable="true">
                         <img src="images/design87_thumb.png" alt="Design 3" onclick="addItem('design87.png')" draggable="true">
                          <img src="images/design88_thumb.png" alt="Design 3" onclick="addItem('design88.png')" draggable="true">
                           <img src="images/design89_thumb.png" alt="Design 3" onclick="addItem('design89.png')" draggable="true">
                            <img src="images/design90_thumb.png" alt="Design 3" onclick="addItem('design90.png')" draggable="true">
      </div>
         <div class="d-flex justify-content-end">
              <button class="prevBtn3"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nextBtn3"><i class="fa-solid fa-arrow-right"></i></button>
         </div>
      </div>
      
      
      
      
       <div class="palette mb-5">
        <h3 style="font-family: Alice, serif; font-size: 40px;">Choose Painting</h3>
        <div class="palette mydesigns4">
        <img src="images/design91_thumb.png" alt="Design 3" onclick="addItem('design91.png')">
        <img src="images/design92_thumb.jpg" alt="Design 3" onclick="addItem('design92.jpg')">
            <img src="images/design93_thumb.png" alt="Design 3" onclick="addItem('design93.png')" draggable="true">
            <img src="images/design94_thumb.png" alt="Design 3" onclick="addItem('design94.png')" draggable="true">
             <img src="images/design95_thumb.png" alt="Design 3" onclick="addItem('design95.png')" draggable="true">
              <img src="images/design96_thumb.png" alt="Design 3" onclick="addItem('design96.png')" draggable="true">
               <img src="images/design97_thumb.png" alt="Design 3" onclick="addItem('design97.png')" draggable="true">
                <img src="images/design98_thumb.png" alt="Design 3" onclick="addItem('design98.png')" draggable="true">
                 <img src="images/design99_thumb.png" alt="Design 3" onclick="addItem('design99.png')" draggable="true">
                  <img src="images/design100_thumb.png" alt="Design 3" onclick="addItem('design100.png')" draggable="true">
                   <img src="images/design101_thumb.png" alt="Design 3" onclick="addItem('design101.png')" draggable="true">
                    <img src="images/design102_thumb.png" alt="Design 3" onclick="addItem('design102.png')" draggable="true">
                     <img src="images/design103_thumb.png" alt="Design 3" onclick="addItem('design103.png')" draggable="true">
                      <img src="images/design104_thumb.png" alt="Design 3" onclick="addItem('design104.png')" draggable="true">
                       <img src="images/design105_thumb.png" alt="Design 3" onclick="addItem('design105.png')" draggable="true">
                        <img src="images/design106_thumb.png" alt="Design 3" onclick="addItem('design106.png')" draggable="true">
                         <img src="images/design107_thumb.png" alt="Design 3" onclick="addItem('design107.png')" draggable="true">
                          <img src="images/design108_thumb.png" alt="Design 3" onclick="addItem('design108.png')" draggable="true">
                           <img src="images/design109_thumb.png" alt="Design 3" onclick="addItem('design109.png')" draggable="true">
                            <img src="images/design110_thumb.png" alt="Design 3" onclick="addItem('design110.png')" draggable="true">
                             <img src="images/design111_thumb.png" alt="Design 3" onclick="addItem('design111.png')" draggable="true">
                              <img src="images/design112_thumb.png" alt="Design 3" onclick="addItem('design112.png')" draggable="true">
                               <img src="images/design113_thumb.png" alt="Design 3" onclick="addItem('design113.png')" draggable="true">
                                <img src="images/design114_thumb.png" alt="Design 3" onclick="addItem('design114.png')" draggable="true">
                                 <img src="images/design115_thumb.png" alt="Design 3" onclick="addItem('design115.png')" draggable="true">
                                  <img src="images/design116_thumb.png" alt="Design 3" onclick="addItem('design116.png')" draggable="true">
                                   <img src="images/design117_thumb.png" alt="Design 3" onclick="addItem('design117.png')" draggable="true">
                                    <img src="images/design118_thumb.png" alt="Design 3" onclick="addItem('design118.png')" draggable="true">
                                     <img src="images/design119_thumb.png" alt="Design 3" onclick="addItem('design119.png')" draggable="true">
                                      <img src="images/design120_thumb.png" alt="Design 3" onclick="addItem('design120.png')" draggable="true">
      </div>
         <div class="d-flex justify-content-end">
              <button class="prevBtn4"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nextBtn4"><i class="fa-solid fa-arrow-right"></i></button>
         </div>
      </div>
      
      
      
      
      
      
      <div class="palette mb-5">
        <h3 style="font-family: Alice, serif; font-size: 40px;">Choose AC</h3>
        <div class="palette mydesigns5">
        <img src="images/design121_thumb.png" alt="Design 3" onclick="addItem('design121.png')">
        <img src="images/design122_thumb.png" alt="Design 3" onclick="addItem('design122.png')">
            <img src="images/design123_thumb.png" alt="Design 3" onclick="addItem('design123.png')" draggable="true">
            <img src="images/design124_thumb.png" alt="Design 3" onclick="addItem('design124.png')" draggable="true">
             <img src="images/design125_thumb.png" alt="Design 3" onclick="addItem('design125.png')" draggable="true">
              <img src="images/design126_thumb.png" alt="Design 3" onclick="addItem('design126.png')" draggable="true">
               <img src="images/design127_thumb.png" alt="Design 3" onclick="addItem('design127.png')" draggable="true">
                <img src="images/design128_thumb.png" alt="Design 3" onclick="addItem('design128.png')" draggable="true">
                 <img src="images/design129_thumb.png" alt="Design 3" onclick="addItem('design129.png')" draggable="true">
                  <img src="images/design130_thumb.png" alt="Design 3" onclick="addItem('design130.png')" draggable="true">
                   <img src="images/design131_thumb.png" alt="Design 3" onclick="addItem('design131.png')" draggable="true">
                    <img src="images/design132_thumb.png" alt="Design 3" onclick="addItem('design132.png')" draggable="true">
                     <img src="images/design133_thumb.png" alt="Design 3" onclick="addItem('design133.png')" draggable="true">
                      <img src="images/design134_thumb.png" alt="Design 3" onclick="addItem('design134.png')" draggable="true">
                       <img src="images/design135_thumb.png" alt="Design 3" onclick="addItem('design135.png')" draggable="true">
                        <img src="images/design136_thumb.png" alt="Design 3" onclick="addItem('design136.png')" draggable="true">
                         <img src="images/design137_thumb.png" alt="Design 3" onclick="addItem('design137.png')" draggable="true">
                          <img src="images/design138_thumb.png" alt="Design 3" onclick="addItem('design138.png')" draggable="true">
                           <img src="images/design139_thumb.png" alt="Design 3" onclick="addItem('design139.png')" draggable="true">
                            <img src="images/design140_thumb.png" alt="Design 3" onclick="addItem('design140.png')" draggable="true">
      </div>
         <div class="d-flex justify-content-end">
              <button class="prevBtn5"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nextBtn5"><i class="fa-solid fa-arrow-right"></i></button>
         </div>
      </div>
  </div>
  <div class="col-lg-5 col-md-12 col-sm-12 text-center bg-white py-5">
       <div class="tools mb-5">
  <h3 style="font-family: Alice, serif; font-size: 40px;">Select Tool</h3>
  <button onclick="setTool('rectanglewand')">Rectangle Wand</button>
</div>
      

     <div class="colors">
    <h3 style="font-family: Alice, serif; font-size: 40px;">Choose Color</h3>
  <button style="background:#F8EBAB" onclick="setObjectColor('#F8EBAB')"></button>
  <button style="background:#e5d9d2" onclick="setObjectColor('#e5d9d2')"></button>
  <button style="background:#c5c2c7" onclick="setObjectColor('#c5c2c7')"></button>
  <button style="background:#c9b7b1" onclick="setObjectColor('#c9b7b1')"></button>
  <button style="background:#ccc6c0" onclick="setObjectColor('#ccc6c0')"></button>
  <button style="background:#b4b4b4" onclick="setObjectColor('#b4b4b4')"></button>
  <button style="background:#a9b7c0" onclick="setObjectColor('#a9b7c0')"></button> 
  <button style="background:#ccdcc1" onclick="setObjectColor('#ccdcc1')"></button>
  <button style="background:#D2C4B4" onclick="setObjectColor('#D2C4B4')"></button>                
  <button style="background:#CFECF3" onclick="setObjectColor('#CFECF3')"></button> 
  <button style="background:#9FA1FF" onclick="setObjectColor('#9FA1FF')"></button>
  <button style="background:#81A6C6" onclick="setObjectColor('#81A6C6')"></button>       
  <button style="background:#778aab" onclick="setObjectColor('#778aab')"></button>
  <button style="background:#4274D9" onclick="setObjectColor('#4274D9')"></button>          
  <button style="background:#5E7AC4" onclick="setObjectColor('#5E7AC4')"></button>
  <button style="background:#3852B4" onclick="setObjectColor('#3852B4')"></button>            
  <button style="background:#4647AE" onclick="setObjectColor('#4647AE')"></button>               
  <button style="background:#3D45AA" onclick="setObjectColor('#3D45AA')"></button> 
  <button style="background:#293681" onclick="setObjectColor('#293681')"></button> 
  <button style="background:#0D1A63" onclick="setObjectColor('#0D1A63')"></button> 
  <button style="background:#003049" onclick="setObjectColor('#003049')"></button>
  <button style="background:#303841" onclick="setObjectColor('#303841')"></button>       
  <button style="background:#0A2947" onclick="setObjectColor('#0A2947')"></button>       
  <button style="background:#659287" onclick="setObjectColor('#659287')"></button>       
  <button style="background:#9AD872" onclick="setObjectColor('#9AD872')"></button>
  <button style="background:#A5CF83" onclick="setObjectColor('#A5CF83')"></button>       
  <button style="background:#778979" onclick="setObjectColor('#778979')"></button>
  <button style="background:#467235" onclick="setObjectColor('#467235')"></button>  
  <button style="background:#283F24" onclick="setObjectColor('#283F24')"></button>
  <button style="background:#1F150C" onclick="setObjectColor('#1F150C')"></button>
  <button style="background:#F3E3D0" onclick="setObjectColor('#F3E3D0')"></button>
  <button style="background:#ddbb98" onclick="setObjectColor('#ddbb98')"></button>       
  <button style="background:#b89789" onclick="setObjectColor('#b89789')"></button>
  <button style="background:#FFCEE3" onclick="setObjectColor('#FFCEE3')"></button>       
  <button style="background:#FFB399" onclick="setObjectColor('#FFB399')"></button>
  <button style="background:#FF9A86" onclick="setObjectColor('#FF9A86')"></button>       
  <button style="background:#FF537B" onclick="setObjectColor('#FF537B')"></button>          
  <button style="background:#CA6180" onclick="setObjectColor('#CA6180')"></button>       
  <button style="background:#cc527a" onclick="setObjectColor('#cc527a')"></button>
  <button style="background:#AD5C71" onclick="setObjectColor('#AD5C71')"></button>
  <button style="background:#934761" onclick="setObjectColor('#934761')"></button>       
  <button style="background:#EB4C4C" onclick="setObjectColor('#EB4C4C')"></button>
  <button style="background:#E05454" onclick="setObjectColor('#E05454')"></button> 
  <button style="background:#C44545" onclick="setObjectColor('#C44545')"></button>       
  <button style="background:#BF4646" onclick="setObjectColor('#BF4646')"></button> 
  <button style="background:#DB1A1A" onclick="setObjectColor('#DB1A1A')"></button>         
  <button style="background:#BE1A1A" onclick="setObjectColor('#BE1A1A')"></button>
  <button style="background:#C00707" onclick="setObjectColor('#C00707')"></button>
  <button style="background:#A82323" onclick="setObjectColor('#A82323')"></button>      
  <button style="background:#FE7F2D" onclick="setObjectColor('#FE7F2D')"></button> 
  <button style="background:#FF5F00" onclick="setObjectColor('#FF5F00')"></button> 
  <button style="background:#FF653F" onclick="setObjectColor('#FF653F')"></button>
  <button style="background:#FFDA62" onclick="setObjectColor('#FFDA62')"></button>       
  <button style="background:#FFBF00" onclick="setObjectColor('#FFBF00')"></button>
  <button style="background:#FFD400" onclick="setObjectColor('#FFD400')"></button> 
  <button style="background:#FFC81E" onclick="setObjectColor('#FFC81E')"></button>  
  <button style="background:#FFC300" onclick="setObjectColor('#FFC300')"></button>
  <button style="background:#FFAA00" onclick="setObjectColor('#FFAA00')"></button>       
  <button style="background:#F7DD7D" onclick="setObjectColor('#F7DD7D')"></button>
  <button style="background:#F0FFC2" onclick="setObjectColor('#F0FFC2')"></button>
  <button style="background:#D8D365" onclick="setObjectColor('#D8D365')"></button>
  <button style="background:#E6F082" onclick="setObjectColor('#E6F082')"></button>
  <button style="background:#FCBF49" onclick="setObjectColor('#FCBF49')"></button>
  <button style="background:#F2D479" onclick="setObjectColor('#F2D479')"></button>
  <button style="background:#8C5A3C" onclick="setObjectColor('#8C5A3C')"></button>
  <button style="background:#412D15" onclick="setObjectColor('#412D15')"></button>         
 </div>
   
  </div>
 </div>
</div>
 </div>
</div>
</section>


 <a href="https://www.linkedin.com/company/360-engineeringandconsultancy" class="middle" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>

         <a href="https://wa.me/8801926126066" class="top" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a> 
        
        <a href="https://www.facebook.com/360engineeringNconsultancy" class="bottom" target="_blank" aria-label="Facbook"><i class="fa-brands fa-facebook-f"></i></a> 
       
           
        
    </main>
      
<?php
  include('footer.php');
?>