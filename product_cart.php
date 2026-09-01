<?php
  include('header.php');

   $old = $_POST;

    require_once('class_libs/HOMECLASS.php');

   $home = new HOMECLASS;
   
    if(isset($_POST['cart'])){
      
      $cart = $home->Cart($_POST);
      $old = $_POST;         
      #print_r($old);
      if($cart['status'] == 'error'){
         $errors = $cart['message'];
     }
     
      
  }
  
  
?>
      
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
        
        
         <div class="col-lg-9 col-md-12 col-sm-12 mx-auto pt-5">
            <div class="container">
        <div class="row gy-5">
            <?php
             $cart_products = $home->get_cart_product($_GET['id']);
  
                  if($cart_products && mysqli_num_rows($cart_products)>0){
                      while($cart_product = mysqli_fetch_assoc($cart_products)){
                         

               ?>
<div class="col-lg-6 col-md-12 col-sm-12 mx-auto">
 
           
                <div class="p-3" style="width: 100%;">
                      <div class="d-flex justify-content-center">
                           <img src="images/upload/<?php echo $cart_product['prdct_ctgry_name']?>/<?php echo $cart_product['image']?>" class="card-img-top rounded" alt="<?php echo $cart_product['name']?>" style="height: 275px;">
                      </div>
                      <h3 class="mt-5 text-center"><span class="fw-bold">Name:</span> <?php echo $cart_product['name']?></h3>
                      <h4 class="text-center mt-2"><span class="fw-bold">Brand/Company:</span> <?php echo $cart_product['brand']?></h4>
                      <h4 class="text-center mt-3"><span class="fw-bold">Price:</span> <?php echo $cart_product['price']?></h4>
                      <div class="d-flex justify-content-center">
                           <form class="mt-5" method="post">
                       <label for="quantity" class="text-white d-flex justify-content-center">Quantity</label>
                         <input type="hidden" name="prdct_id" id="prdct_id" value="<?php echo $cart_product['id']?>">
                          <input type="number" class="form-control" name="quantity" id="quantity" value="<?php echo $old['quantity']; ?>" style="width:300px;">
                          <p class="mt-2 text-light fw-bold" style="font-size:15px;"> <?php echo $errors['quantity']??'' ?></p> 
                       <div class="d-flex justify-content-center">
                          <button type="submit" name="cart" class="btn btn-danger mt-4">Cart</button>
                          
                       </div>
                      
                   </form>
                           
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