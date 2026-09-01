  <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="font-family: Mona Sans, sans-serif;">&copy; 2026 <span>360 Engineering & Consultancy</span></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../js/vendor/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/vendor/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../js/vendor/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/vendor/chart-area-demo.js"></script>
    <script src="../js/vendor/chart-pie-demo.js"></script>



      <script src="../js/ckeditor.js"></script>

  <! ============================ image count js ======================>   
<script>
function renderImageInputs(count) {
  const container = document.getElementById('imageInputs');
  container.innerHTML = ''; // clear old inputs

  for (let i = 0; i < count; i++) {
    const div = document.createElement('div');
    div.className = 'mb-3';
    div.innerHTML = `
      <label class="form-label fw-bold" for="Image${i}">Upload Image ${i+1}</label>
      <input type="file" class="form-control" id="Image${i}" name="Image[]" accept="image/*" multiple>
      <p id="ImageError${i}" class="fw-bold" style="font-size:15px; color:#FF9842;"></p>
    `;
    container.appendChild(div);

    // 🔹 If PHP passed an error for this index, show it
    if (typeof imageErrors !== "undefined" && imageErrors[i]) {
      div.querySelector(`#ImageError${i}`).textContent = imageErrors[i];
    }
  }
}

// Run once on page load
document.addEventListener('DOMContentLoaded', function() {
  const initialCount = parseInt(document.getElementById('imageCount').value) || 0;
  renderImageInputs(initialCount);
});

// Update dynamically when user changes the number
document.getElementById('imageCount').addEventListener('input', function() {
  const count = parseInt(this.value) || 0;
  renderImageInputs(count);
});

</script>

<script>
function renderImageInputs2(count) {
  const container = document.getElementById('imageInputs2');
  container.innerHTML = ''; // clear old inputs

  for (let i = 0; i < count; i++) {
    const div = document.createElement('div');
    div.className = 'mb-3';
    div.innerHTML = `
      <label class="form-label fw-bold" for="Image2_${i}">Upload Image ${i+1}</label>
      <input type="file" class="form-control" id="Image2_${i}" name="Image2[]" accept="image/*">
      <p id="ImageError2_${i}" class="fw-bold" style="font-size:15px; color:#FF9842;"></p>
    `;
    container.appendChild(div);

    // 🔹 If PHP passed an error for this index, show it
    if (typeof imageErrors2 !== "undefined" && imageErrors2[i]) {
      div.querySelector(`#ImageError2_${i}`).textContent = imageErrors2[i];
    }
  }
}

// Run once on page load
document.addEventListener('DOMContentLoaded', function() {
  const initialCount = parseInt(document.getElementById('imageCount2').value) || 0;
  renderImageInputs2(initialCount);
});

// Update dynamically when user changes the number
document.getElementById('imageCount2').addEventListener('input', function() {
  const count = parseInt(this.value) || 0;
  renderImageInputs2(count);
});

</script>

  <! ============================ ckeditor js ======================>   
<script>
    ClassicEditor
        .create( document.querySelector( '#Description' ) )
        .then( editor => {
             editor.ui.view.editable.element.style.height = '500px';
         } )
        .catch( error => {
            console.error( error );
        } );
</script>

  <! ============================ password toggle js ======================>   
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

  <! ============================ delete js ======================>   
<script>

  function deleteCategory(x){
      document.querySelector('#DeletedID').value = x;
      document.querySelector('#Deletedform').submit();
  }
    
    
 function deleteProject(x){
      document.querySelector('#DeletedprjectID').value = x;
      document.querySelector('#Deletedprtctform').submit();
  }
  
  
    function deletePrdctcategory(x){
      document.querySelector('#DeletedprdctctgryID').value = x;
      document.querySelector('#Deletedprdctctgryform').submit();
  }
  
  
      function deletePrdctsubcategory(x){
      document.querySelector('#DeletedprdctsubctgryID').value = x;
      document.querySelector('#Deletedprtctsubctgryform').submit();
  }
  
  
  
   function deleteProduct(x){
      document.querySelector('#DeletedprdctID').value = x;
      document.querySelector('#Deletedprdctform').submit();
  }

</script>


   <! ============================ menu searchbar js ======================>   
 <script>
function toggleSearch() {
  document.getElementById("searchItem").classList.toggle("active");
}
</script>


</body>

</html>





<?php
  ob_flush();
?>