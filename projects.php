<?php
  include('header.php');
?>
      
    <main>
      <!=========================== Uttara project part ================================>
<?php
   if(mysqli_num_rows($get_projects)>0){
       while($get_project = mysqli_fetch_assoc($get_projects)){   
?>
<section class="Uttara_project odd" style="margin-top: 127px;">
  <video class="projectVideo" src="videos/upload/<?php echo $get_project['category_name']; ?>/<?php echo $get_project['video']; ?>" muted playsinline loop></video>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="interior">
        <div class="interior_img">
            <?php
$images = json_decode($get_project['image'], true);
if (!empty($images)) {
    $firstImg = $images[0]; // get the first element
    echo '<img src="images/project_image/'.$get_project['category_name'].'/'.$get_project['name'].'/'.$firstImg.'" style="height:100%; width:100%; object-fit:cover;" alt="'.$firstImg.'">';
}
?>

          <p class="play-btn"><i class="fa-solid fa-play"></i></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="interior_desc">
        <h2><?php echo $get_project['name']; ?></h2>
           <button class="btn btn-light" style="padding:10px 30px; font-family: Mona Sans, sans-serif;" data-bs-toggle="modal" data-bs-target="#exampleModal2_<?php echo $get_project['id'];?>">Project Details</button>
       
          
          
        

          
         
      </div>
    </div>
  </div>
</section>
           <div class="modal fade" id="exampleModal2_<?php echo $get_project['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="trnsctn_modal2 modal-content" style="background: #DF6501;">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel" style="font-family: Alice, serif; font-size: 40px;"><?php echo $get_project['name']; ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-close-bg: url(https://img.icons8.com/?size=100&id=79023&format=png&color=1A1A1A);  --bs-btn-close-opacity: 1; width: 30px; height: 30px; top: 0; right: 0;"></button>
      </div>
      <div class="modal-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <?php
    $images = json_decode($get_project['image'], true);
    if (!empty($images)) {
        foreach ($images as $index => $img) {
            // Add 'active' class only to the first item
            $activeClass = ($index === 0) ? ' active' : '';
            echo '<div class="carousel-item'.$activeClass.'">';
            echo '<img src="images/project_image/'.$get_project['category_name'].'/'.$get_project['name'].'/'.$img.'" class="d-block carousel-img" alt="'.$img.'">';
            echo '</div>';
        }
    }
    ?>
  </div>
</div>
          
      </div>
      <div class="modal-footer">
        
      </div>
   
</div>
        
        </div>
        </div>
<?php
       }
   }  
?>







          
             
        
    </main>
      
<?php
  include('footer.php');
?>