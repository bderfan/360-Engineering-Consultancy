<?php
  include('header.php');
?>
    <main>
        
   <!=========================== Project2 part ================================>
<?php
   if(mysqli_num_rows($get_category)>0){
       while($get_categoris = mysqli_fetch_assoc($get_category)){   
?>
    <section class="section" id="Project2">
  <div class="left-img">
    <div class="clip-mask">
      <img src="images/category_image/<?php echo $get_categoris['image']; ?>" alt="interior1">
    </div>
  </div>
  <div class="text-block">
    <div class="text-block-text">
       <h1 style="font-family: Alice, serif; font-size: 40px;"><?php echo $get_categoris['name']; ?></h1>
       <a href="projects?name=<?php echo $get_categoris['name'] ;?>" class="btn rounded-pill px-4 py-2" style="font-family: Mona Sans, sans-serif;">See projects</a>
    </div>
  </div>
</section>    
<?php
       }
   }  
?>


<!-- Repeat for Project4, Project5, etc. -->









        
    </main>
      
<?php
  include('footer.php');
?>