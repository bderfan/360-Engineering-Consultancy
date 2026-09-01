<?php
  include('header.php');

   $old = $_POST;

   
?>
      
    <main>
     


        
    <!=========================== Materials part ================================>        
<section id="Materials" style="background: #ff7300;">
    <div class="row">
         <div class="col-3">
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
                          echo '<a href="products?name='.$product['name'].'&sub_category='.$product['prdct_sub_ctgry_name'].'" 
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
         <div class="col-9">
            <div class="container">
        <div class="row gy-5">
            <?php
                  if(mysqli_num_rows($products)>0){
                      while($product = mysqli_fetch_assoc($products)){
               ?>
<div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                <div class="card p-3" style="width: 100%; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                       <img src="images/upload/<?php echo $product['prdct_ctgry_name']?>/<?php echo $product['image']?>" class="card-img-top rounded" alt="<?php echo $product['name']?>" style="height: 175px;">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $product['name']?></h5>
                      <div class="d-flex justify-content-center">
                          <a href="#" class="btn" style="background: #ff7300;">Go somewhere</a>
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