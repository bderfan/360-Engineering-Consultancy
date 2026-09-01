<footer>
    
    </footer>
 
     <script>
document.getElementById("togglePassword").addEventListener("click", function() {
  const passwordField = document.getElementById("Password");
  const icon = this.querySelector("i");

  if (passwordField.type === "password") {
    passwordField.type = "text";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  } else {
    passwordField.type = "password";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  }
});
</script> 
      
   <script src="../js/jquery-1.12.4.min.js"></script> 
 <script src="../js/gsap.min.js"></script>
<script src="../js/ScrollTrigger.min.js"></script>     
      
      
      <script src="../js/maplibre-gl.js"></script>
   
     
      
      
    <script src="../js/intlTelInput.min.js"></script>

  

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/custom.js"></script>    
  </body>
</html>


<?php
 ob_flush();
?>