<footer>
     <a href="#" class="upper_top" aria-label="Top"></a>
      <!=========================== Footer part ============================>
     <!=========================== Contact part ================================> 
         
<section id="Contact" class="pb-0" style="background: #ff7300;">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 py-5">
      <h1 class="contact_confirm mt-5" style="font-family: Alice, serif; font-size: 30px;">Wanna get service from us?</h1>
      <h2 class="contact_invite" style="font-family: Alice, serif; font-size: 30px;">Book your slot now</h2>
      
       <div class="d-flex justify-content-center px-5">
        <p class="fw-bold text-start mt-5 ms-5" style=" font-family: Alice, serif; font-size: 30px;">Our location</p>
      </div>
     
      <div class="d-flex justify-content-center px-5">
        <p class="phone_icon fs-1"><i class="fa-solid fa-map-location-dot"></i></p>
        <p class="text-dark mt-4 ms-2 fw-bold" style="font-family: Mona Sans, sans-serif;">102/1 West Agargaon<br> Darul Yusuf Tower (Level -7)<br> Dhaka 1207</p>
      </div>
      
      
    <div class="d-flex justify-content-center px-5">
        <p class="fw-bold text-start mt-5 ms-5" style=" font-family: Alice, serif; font-size: 30px;">Call us</p>
      </div>
     
      <div class="d-flex justify-content-center px-5">
        <p class="phone_icon fs-1"><i class="fa-solid fa-phone-volume"></i></p>
        <p class="text-dark mt-4 ms-2 fw-bold" style="font-family: Mona Sans, sans-serif;">01335-224360<br>01410-360247</p>
      </div>
        
       <div class="d-flex justify-content-center px-5">
        <p class="fw-bold text-start mt-5 ms-5" style="font-family: Alice, serif; font-size: 30px;">Mail us</p>
      </div> 
    
      <div class="d-flex justify-content-center px-5">
        <p class="mail_icon fs-1"><i class="fa-solid fa-envelope"></i></p>
        <a class="text-dark mt-4 ms-2 fw-bold" style="font-family: Mona Sans, sans-serif; line-break: anywhere; text-decoration: none;" href="mailto: info@360group.com.bd">info@360group.com.bd</a>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 py-5">
      <h3 class="contact_help text-center">Contact us<br>for free<br>consultation meeting</h3>
      <form id="Cosultaion_form" class="mt-5 bg-white py-5 px-3 rounded rounded-4" method="post">
  <div class="mb-3">
    <label for="Name" class="form-label" style="font-family: Mona Sans, sans-serif;">Name</label>
    <input type="text" id="Name" name="Name">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Name']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label" style="font-family: Mona Sans, sans-serif;">Email</label>
    <input type="email" id="Email" name="Email">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Email']??'' ?></p>
  </div>
 <div class="mb-3">
    <label for="Phone" class="form-label" style="font-family: Mona Sans, sans-serif;">Phone Number</label>
    <input type="tel" id="Phone" name="Phone">
   <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Phone']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="Date" class="form-label" style="font-family: Mona Sans, sans-serif;">Appointment Date</label>
    <input type="date" id="Date" name="Appoint_date">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Appoint_date']??'' ?></p>
  </div>
  <div class="mb-3">
    <label for="Time" class="form-label" style="font-family: Mona Sans, sans-serif;">Appointment Time</label>
    <input type="time" id="Time" name="Appoint_time">
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Appoint_time']??'' ?></p>
  </div>
  <div class="mb-3">
      <label for="form_sq_input" class="form-label" style="font-family: Mona Sans, sans-serif;">Property Area</label><br>
  <input id="form_sq_input" type="text" name="Square_ft">
  <span style="font-family: Mona Sans, sans-serif;">sqft</span>
    <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Square_ft']??'' ?></p>
</div>
   <div class="mb-3">
   <label for="Address" class="form-label">Address</label>
  <textarea id="Address" rows="5" name="Address"></textarea>
     <p class="fw-bold" style="font-size:15px; color: #FF9842; font-family: Mona Sans, sans-serif;"> <?php echo $errors['Address']??'' ?></p>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <button type="submit" class="btn" name="add_consultation" style="font-family: Mona Sans, sans-serif;">Submit</button>
  </div>
</form>
    </div>
  </div>
</section>


    <section id="Footer" class="py-0">
            <div class="row d-flex align-items-center text-center py-3 px-1">
                 <div class="col-lg-6 col-md-6 col-sm-12 order-2 order-md-1 mx-auto"><!-- Social icon 1 -->
                      <p class= "copyright mb-0">&copy 2026 <span>360 Engineering and Consultancy</span></p>
                 </div>
            </div>     
       </section>     
    </footer>
      
      
      <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Interior Design Showcase",
  "description": "A cinematic walkthrough of modern interior design.",
  "thumbnailUrl": "https://360group.com.bd/images/project_image/Interior design/Uttara interior/1779186171_DSC03927.jpg",
  "uploadDate": "2026-06-03",
  "contentUrl": "https://360group.com.bd/videos/UttoraShowreel.mp4",
  "embedUrl": "https://360group.com.bd/videos/uttora-showreel/"
}
</script>


 <! ============================ number comma js ======================>

<script>
function formatIndianNumber(x) {
  x = x.replace(/\D/g,''); // remove non-digits
  if (x === '') return '';
  let lastThree = x.substring(x.length-3);
  let otherNumbers = x.substring(0,x.length-3);
  if(otherNumbers !== '')
      lastThree = ',' + lastThree;
  return otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
}

document.getElementById("numInput").addEventListener("input", function() {
  let val = this.value;
  document.getElementById("formatted").innerText = formatIndianNumber(val);
});
</script>


     
      <! ============================ menu searchbar js ======================>   
    <script>
     function toggleItem() {
      document.getElementById("myItem").classList.toggle("active");
     }
     </script>
      
      
      
   <script src="js/jquery-1.12.4.min.js"></script> 
 <script src="js/gsap.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>     
      
      
      <script src="js/maplibre-gl.js"></script>

   <! ============================ offer section lock js ======================>   
    <script>
 gsap.registerPlugin(ScrollTrigger);

gsap.to("#Offer", {
  scrollTrigger: {
    trigger: "#Offer",
    start: "bottom bottom",   // when Offer bottom hits viewport bottom
    end: "+=155",             // lock for 300px scroll distance
    pin: true,                // keeps Offer fixed
    pinSpacing: true         // prevents extra spacing
  }
});


     </script>  


 <! ============================ offer2 section lock js ======================>   
    <script>
 gsap.registerPlugin(ScrollTrigger);

gsap.to("#Offer2", {
  scrollTrigger: {
    trigger: "#Offer2",
    start: "bottom bottom",   // when Offer bottom hits viewport bottom
    end: "+=104",             // lock for 300px scroll distance
    pin: true,                // keeps Offer fixed
    pinSpacing: true         // prevents extra spacing
  }
});


     </script>  
      



<! ===================== Service1 carousel bg layer js ===========================>
<script>
 document.addEventListener('DOMContentLoaded', function () {
  var mainCarousel = document.querySelector('#carouselExampleSlidesOnly');
  var bgImage = document.querySelector('#bgImage');

  mainCarousel.addEventListener('slide.bs.carousel', function (event) {
    // Get the next slide's image
    var nextImg = event.relatedTarget.querySelector('img').getAttribute('src');
    // Update background image
    bgImage.setAttribute('src', nextImg);
  });
});

</script>

      <! ============================ Map js ======================> 

 
<script>
    
const officeCoordinates = [90.3687967910083, 23.779409580450405];
 
const map = new maplibregl.Map({
  container: 'map',
  style: `https://api.maptiler.com/maps/streets/style.json?key=8umU07vREYLZehCrBKMH&language=en`,
  center: officeCoordinates,
  zoom: 15,
  pitch: 45,
  bearing: -17.6,
  pitchWithRotate: true
});

// Add a marker for your office
new maplibregl.Marker({ color: "#DF6501" })
  .setLngLat(officeCoordinates)
  .setPopup(new maplibregl.Popup().setText("360 Engineering & Consultancy"))
  .addTo(map);

// Add navigation controls (zoom, rotate, tilt)
map.addControl(new maplibregl.NavigationControl({
  visualizePitch: true
}));

// Add geolocation control (requires user permission)
const geolocate = new maplibregl.GeolocateControl({
  positionOptions: { enableHighAccuracy: true },
  trackUserLocation: true,
  showUserLocation: true
});
map.addControl(geolocate);

// Keep map centered on your office when resized
map.on('resize', () => {
  map.setCenter(officeCoordinates);
});


    </script>
      

      



      
      
   <! ============================ Slider  js ======================>   
      
<script>

const slider = document.querySelector(".slider");
const fixedLeft = document.getElementById("fixedLeft");

function syncFixedLeft() {
  const leftmostSlide = slider.firstElementChild;
  const img = leftmostSlide.querySelector("img");
  const title = leftmostSlide.querySelector(".title").textContent;
  const descElement = leftmostSlide.querySelector(".description");
  const desc = descElement ? descElement.textContent : "";

  fixedLeft.innerHTML = `
    <img src="${img.src}" style="width:100%;height:100%;object-fit:cover;" alt="Exterior">
    <div class="overlay-text text-center">
      <h1 class="text-white mt-5" style="font-family: Alice, serif; font-size: 40px;">Our Special Services</h1>
      <h2 style="font-family: Alice, serif; font-size: 40px;">${title}</h2>
    </div>
  `;
}

function nextSlide() {
  const slideWidth = slider.firstElementChild.offsetWidth + 20;
  const moveCount = 1;
  const distance = slideWidth * moveCount;

  slider.style.transform = `translateX(-${distance}px)`;

  slider.addEventListener("transitionend", function handler() {
    slider.style.transition = "none";
    slider.style.transform = "translateX(0)";

    for (let i = 0; i < moveCount; i++) {
      slider.appendChild(slider.firstElementChild);
    }

    setTimeout(() => {
      slider.style.transition = "transform 0.8s ease";
    });

    syncFixedLeft();
    slider.removeEventListener("transitionend", handler);
  });
}


function prevSlide() {
  const slideWidth = slider.firstElementChild.offsetWidth + 20;
  const moveCount = 3;
  const distance = slideWidth * moveCount;

  // Move 3 slides to front first
  for (let i = 0; i < moveCount; i++) {
    slider.insertBefore(slider.lastElementChild, slider.firstElementChild);
  }

  slider.style.transition = "none";
  slider.style.transform = `translateX(-${distance}px)`;

  setTimeout(() => {
    slider.style.transition = "transform 0.8s ease";
    slider.style.transform = "translateX(0)";
  });

  syncFixedLeft();
}

document.querySelector(".next").addEventListener("click", nextSlide);
document.querySelector(".prev").addEventListener("click", prevSlide);

syncFixedLeft();




</script>
      
     
      
      
    <script src="js/intlTelInput.min.js"></script>
    
    <! ============================ Automatic phone code js ======================> 
    <script>
      const input = document.querySelector("#Phone");
window.intlTelInput(input, {
  initialCountry: "auto",
  geoIpLookup: function(callback) {
    fetch("https://ipapi.co/json")
      .then(res => res.json())
      .then(data => callback(data.country_code))
      .catch(() => callback("bd")); // fallback to Bangladesh
  },
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
});
  
    </script>



  <!=========================== Typing effect ===================================>
<script>
function typeEffect(element, speed, callback) {
  const text = element.dataset.text;
  element.textContent = "";
  let i = 0;
  const timer = setInterval(() => {
    if (i < text.length) {
      element.textContent += text.charAt(i);
      i++;
    } else {
      clearInterval(timer);
      if (callback) callback();
    }
  }, speed);
}

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".Interior, .Interior2");

  // Save text into data-text and clear it
  sections.forEach(section => {
    section.querySelectorAll("h1, p").forEach(el => {
      el.dataset.text = el.textContent;
      el.textContent = "";
    });
  });

  // Observer to detect when section enters viewport
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const elements = entry.target.querySelectorAll("h1, p");
        let index = 0;
        function startNext() {
          if (index < elements.length) {
            const el = elements[index];
            const speed = el.tagName === "H1" ? 150 : 20;
            typeEffect(el, speed, () => {
              index++;
              startNext();
            });
          }
        }
        startNext();
        observer.unobserve(entry.target); // run once per section
      }
    });
  }, { threshold: 0.3 }); // trigger when 30% of section is visible

  sections.forEach(section => observer.observe(section));
});
</script>


<! ============================ Image slide js ======================>      


<script>
gsap.registerPlugin(ScrollTrigger);

document.querySelectorAll(".section").forEach(section => {
  const imgEl = section.querySelector(".clip-mask img");
  const textBlock = section.querySelector(".text-block");

  gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top top",
      end: "+=" + window.innerHeight * 2,
      scrub: 2,
      pin: true,
      anticipatePin: 1
    }
  })
// Step 1: fade in white background + text underneath
  .to(textBlock, {
    opacity: .9,
    ease: "power2.inOut",
    duration: 1
  }, 0)
    
  // Step 2: expand image inside clip-path
  .to(imgEl, {
    scale: 1.2,
    ease: "power2.inOut",
    duration: 2
  }, ">");
  
});


</script>
      



     <!=========================== play video js =================================>
      <script>
     document.querySelectorAll(".Uttara_project").forEach(section => {
  const playBtn = section.querySelector(".play-btn");
  const video = section.querySelector(".projectVideo");
  const desc = section.querySelector(".interior_desc");

  playBtn.addEventListener("click", () => {
    // reset states
    video.classList.remove("video-fade");
    desc.classList.remove("text-slide");

    // show video with delay
    setTimeout(() => {
      video.style.display = "block";
      video.classList.add("video-fade");
      video.play();
    }, 500); // half-second delay

    // show description with longer delay
    setTimeout(() => {
      desc.style.display = "block";
      desc.classList.add("text-slide");
    }, 1200); // 1.2s delay
  });
});

      </script>


<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>

<!=========================== interior wall animation js =================================>
<script>
const canvas = document.getElementById('wallCanvas');
canvas.width = canvas.offsetWidth;
canvas.height = 500;
const ctx = canvas.getContext('2d');

let uploadedImage = null;
let items = [];
let tool = 'move';
let startX, startY, isDragging = false, selectionRect = null;
let draggingItem = null;
let rotatingItem = null;
let tool = 'rectanglewand';
let startX, startY, isSelecting = false, currentRect = null;
let rectangles = [];
let isSelecting = false;
let currentRect = null;
let selectedPixels = new Set();



// Upload wall photo
document.getElementById('Image').addEventListener('change', function (e) {
  const file = e.target.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = function (event) {
    const img = new Image();
    img.src = event.target.result;
    img.onload = () => {
      uploadedImage = img;
      redraw();
    };
  };
  reader.readAsDataURL(file);
});

// Add design item
function addItem(file) {
  const img = new Image();
  img.src = "images/" + file;
  img.onload = () => {
    items.push({
      img, x: 50, y: 50, w: 150, h: 150,
      crop: null,
      rotationX: 0, rotationY: 0 // NEW for 3D tilt
    });
    redraw();
  };
}

// Switch tool
function setTool(name) {
  tool = name;
  selectionRect = null;
  draggingItem = null;
  rotatingItem = null;
  selectedPixels.clear();

  if (tool === 'move') canvas.style.cursor = 'grab';
  else if (tool === 'resize' || tool === 'crop') canvas.style.cursor = 'crosshair';
  else if (tool === 'rectanglewand') canvas.style.cursor = 'pointer';
 else if (tool === 'transform') canvas.style.cursor = 'alias';
  else canvas.style.cursor = 'default';

  redraw();
}

// Redraw canvas
function redraw() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  if (uploadedImage) ctx.drawImage(uploadedImage, 0, 0, canvas.width, canvas.height);

  items.forEach(item => {
    ctx.save();
    const cx = item.x + item.w/2;
    const cy = item.y + item.h/2;
    ctx.translate(cx, cy);

 // 3D transform simulation
    const scaleX = Math.cos(item.rotationY);
    const scaleY = Math.cos(item.rotationX);
    const skewX = Math.sin(item.rotationY) * 0.5;
    const skewY = Math.sin(item.rotationX) * 0.5;
    ctx.transform(scaleX, skewY, skewX, scaleY, 0, 0);

    if (item.crop) {
      ctx.drawImage(item.img,
        item.crop.sx, item.crop.sy, item.crop.sw, item.crop.sh,
        -item.crop.sw/2, -item.crop.sh/2, item.crop.sw, item.crop.sh
      );
    } else {
      ctx.drawImage(item.img, -item.w/2, -item.h/2, item.w, item.h);
    }
    ctx.restore();
  });



   drawRectangles();
  
  if (selectionRect) {
    ctx.strokeStyle = "red";
    ctx.lineWidth = 2;
    ctx.strokeRect(selectionRect.x, selectionRect.y, selectionRect.w, selectionRect.h);
  }
  
   
}

function drawRectangles() {
      rectangles.forEach(rect => {
        ctx.strokeStyle = "red";
        ctx.lineWidth = 2;
        ctx.strokeRect(rect.x, rect.y, rect.w, rect.h);
      });
    }



// Mouse events
canvas.addEventListener('mousedown', async (e) => {
  const mouseX = e.offsetX, mouseY = e.offsetY;
  if (tool === 'resize' || tool === 'crop') {
    startX = mouseX; startY = mouseY; isDragging = true;
  } else if (tool === 'move') {
    for (let i = items.length - 1; i >= 0; i--) {
      let item = items[i];
      if (mouseX >= item.x && mouseX <= item.x + item.w &&
          mouseY >= item.y && mouseY <= item.y + item.h) {
        draggingItem = item;
        startX = mouseX - item.x;
        startY = mouseY - item.y;
        break;
      }
    }
  } else if (tool === 'transform') {
    for (let i = items.length - 1; i >= 0; i--) {
      let item = items[i];
      if (mouseX >= item.x && mouseX <= item.x + item.w &&
          mouseY >= item.y && mouseY <= item.y + item.h) {
        transformingItem = item;
        item.startX = mouseX;
        item.startY = mouseY;
        break;
      }
    }
  } else  if (tool === 'rectanglewand') {
        isSelecting = true;
        startX = mouseX;
        startY = mouseY;
        currentRect = { x: startX, y: startY, w: 0, h: 0 };
      }
});

canvas.addEventListener('mousemove', (e) => {
  if ((tool === 'resize' || tool === 'crop') && isDragging) {
    selectionRect = {
      x: Math.min(startX, e.offsetX),
      y: Math.min(startY, e.offsetY),
      w: Math.abs(e.offsetX - startX),
      h: Math.abs(e.offsetY - startY)
    };
    redraw();
  } else if (tool === 'move' && draggingItem) {
    draggingItem.x = e.offsetX - startX;
    draggingItem.y = e.offsetY - startY;
    redraw();
  } else if (tool === 'transform' && transformingItem) {
    const dx = e.offsetX - transformingItem.startX;
    const dy = e.offsetY - transformingItem.startY;
    transformingItem.rotationY = dx * 0.02; // horizontal drag tilts Y
    transformingItem.rotationX = dy * 0.02; // vertical drag tilts X
    redraw();
  } else  if (tool === 'rectanglewand' && isSelecting) {
        currentRect.w = e.offsetX - startX;
        currentRect.h = e.offsetY - startY;
        redraw();
        ctx.strokeStyle = "red";
        ctx.lineWidth = 2;
        ctx.strokeRect(currentRect.x, currentRect.y, currentRect.w, currentRect.h);
      }
});

canvas.addEventListener('mouseup', () => {
  if (tool === 'resize') {
    isDragging = false;
    if (items.length > 0 && selectionRect) {
      let item = items[items.length - 1];
      item.x = selectionRect.x;
      item.y = selectionRect.y;
      item.w = selectionRect.w;
      item.h = selectionRect.h;
      selectionRect = null;
      redraw();
    }
  } else if (tool === 'crop') {
    isDragging = false;
    if (items.length > 0 && selectionRect) {
      let item = items[items.length - 1];
      item.crop = {
        sx: (selectionRect.x - item.x) * (item.img.width / item.w),
        sy: (selectionRect.y - item.y) * (item.img.height / item.h),
        sw: selectionRect.w * (item.img.width / item.w),
        sh: selectionRect.h * (item.img.height / item.h)
      };
      item.x = selectionRect.x;
      item.y = selectionRect.y;
      selectionRect = null;
      redraw();
    }
  } else if (tool === 'move') {
    draggingItem = null;
  } else if (tool === 'transform'){
      transformingItem = null;
  } else if (tool === 'rectanglewand' && currentRect) {
        isSelecting = false;
        rectangles.push(currentRect);
        currentRect = null;
        redraw();
      }
});


// Helper: convert finger coordinates to canvas coordinates
function getTouchPos(canvas, touch) {
  const rect = canvas.getBoundingClientRect();
  return {
    // scale finger position into canvas pixel space
    x: Math.round((touch.clientX - rect.left) * (canvas.width / rect.width)),
    y: Math.round((touch.clientY - rect.top) * (canvas.height / rect.height))
  };
}

// Touch start
canvas.addEventListener('touchstart', (e) => {
  e.preventDefault(); // stop page scroll
  const touch = e.touches[0];
  const pos = getTouchPos(canvas, touch);
  const mouseX = pos.x, mouseY = pos.y;

  if (tool === 'resize' || tool === 'crop' || tool === 'marqueeColor') {
    startX = mouseX;
    startY = mouseY;
    isDragging = true;
  } else if (tool === 'move') {
    for (let i = items.length - 1; i >= 0; i--) {
      let item = items[i];
      if (mouseX >= item.x && mouseX <= item.x + item.w &&
          mouseY >= item.y && mouseY <= item.y + item.h) {
        draggingItem = item;
        startX = mouseX - item.x;
        startY = mouseY - item.y;
        break;
      }
    }
  } else if (tool === 'wand') {
    // now wand works on tap
    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    selectedPixels = floodFillSelection(mouseX, mouseY, 30, imageData);
    highlightSelection(imageData);
  } else if (tool === 'transform') {
    for (let i = items.length - 1; i >= 0; i--) {
      let item = items[i];
      if (mouseX >= item.x && mouseX <= item.x + item.w &&
          mouseY >= item.y && mouseY <= item.y + item.h) {
        transformingItem = item;
        item.startX = mouseX;
        item.startY = mouseY;
        break;
      }
    }
  }
});



// Touch move
canvas.addEventListener('touchmove', (e) => {
  e.preventDefault();
  const touch = e.touches[0];
  const pos = getTouchPos(canvas, touch);
  const mouseX = pos.x, mouseY = pos.y;

  if ((tool === 'resize' || tool === 'crop' || tool === 'marqueeColor') && isDragging) {
    selectionRect = {
      x: Math.min(startX, mouseX),
      y: Math.min(startY, mouseY),
      w: Math.abs(mouseX - startX),
      h: Math.abs(mouseY - startY)
    };
    redraw();
  } else if (tool === 'move' && draggingItem) {
    draggingItem.x = mouseX - startX;
    draggingItem.y = mouseY - startY;
    redraw();
  } else if (tool === 'transform' && transformingItem) {
    const dx = mouseX - transformingItem.startX;
    const dy = mouseY - transformingItem.startY;
    transformingItem.rotationY = dx * 0.02; // horizontal drag tilts Y
    transformingItem.rotationX = dy * 0.02; // vertical drag tilts X
    redraw();
  }
});

// Touch end
canvas.addEventListener('touchend', (e) => {
  e.preventDefault();
  if (tool === 'resize') {
    isDragging = false;
    if (items.length > 0 && selectionRect) {
      let item = items[items.length - 1];
      item.x = selectionRect.x;
      item.y = selectionRect.y;
      item.w = selectionRect.w;
      item.h = selectionRect.h;
      selectionRect = null;
      redraw();
    }
  } else if (tool === 'crop') {
    isDragging = false;
    if (items.length > 0 && selectionRect) {
      let item = items[items.length - 1];
      item.crop = {
        sx: (selectionRect.x - item.x) * (item.img.width / item.w),
        sy: (selectionRect.y - item.y) * (item.img.height / item.h),
        sw: selectionRect.w * (item.img.width / item.w),
        sh: selectionRect.h * (item.img.height / item.h)
      };
      item.x = selectionRect.x;
      item.y = selectionRect.y;
      selectionRect = null;
      redraw();
    }
  } else if (tool === 'move') {
    draggingItem = null;
  } else if (tool === 'transform') transformingItem = null;
});


// Magic wand flood fill
function floodFillSelection(x, y, tolerance, imageData) {
  const data = imageData.data;
  const startIndex = (y * canvas.width + x) * 4;
  const startColor = [data[startIndex], data[startIndex+1], data[startIndex+2]];
  let pixels = new Set();

  function colorMatch(i) {
    const r = data[i], g = data[i+1], b = data[i+2];
    return Math.abs(r - startColor[0]) < tolerance &&
           Math.abs(g - startColor[1]) < tolerance &&
           Math.abs(b - startColor[2]) < tolerance;
  }

  for (let i = 0; i < data.length; i += 4) {
    if (colorMatch(i)) pixels.add(i/4);
  }
  return pixels;
}

function highlightSelection(imageData) {
  const data = imageData.data;
  selectedPixels.forEach(idx => {
    const i = idx * 4;
    data[i] = (data[i] + 255) / 2;
    data[i+1] = (data[i+1] + 255) / 2;
  });
  ctx.putImageData(imageData, 0, 0);
}

// Apply color from palette
function setObjectColor(hex) {
  const rgb = hexToRgb(hex);

 if (tool === 'rectanglewand' && rectangles.length > 0) {
        const rect = rectangles[rectangles.length - 1];
        recolorObjectInRect(rect, rgb, 40); // tolerance ~40
      } else if (tool === 'magicwand' && selectedPixels.size > 0) {
        const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
        const data = imageData.data;
        selectedPixels.forEach(idx => {
          const i = idx * 4;
          data[i]   = rgb.r;
          data[i+1] = rgb.g;
          data[i+2] = rgb.b;
        });
        ctx.putImageData(imageData, 0, 0);
        selectedPixels.clear();
      }

}




 function hexToRgb(hex) {
      const bigint = parseInt(hex.slice(1), 16);
      return { r: (bigint >> 16) & 255, g: (bigint >> 8) & 255, b: bigint & 255 };
    }

// Recolor only object pixels inside rectangle
    function recolorObjectInRect(rect, rgb, tolerance=30) {
      const imageData = ctx.getImageData(rect.x, rect.y, rect.w, rect.h);
      const data = imageData.data;

      // reference color: pixel at rectangle center
      const cx = Math.floor(rect.w/2), cy = Math.floor(rect.h/2);
      const refIndex = (cy * rect.w + cx) * 4;
      const refColor = [data[refIndex], data[refIndex+1], data[refIndex+2]];

      for (let i = 0; i < data.length; i += 4) {
        const r = data[i], g = data[i+1], b = data[i+2];
        if (Math.abs(r - refColor[0]) < tolerance &&
            Math.abs(g - refColor[1]) < tolerance &&
            Math.abs(b - refColor[2]) < tolerance) {
          data[i]   = rgb.r;
          data[i+1] = rgb.g;
          data[i+2] = rgb.b;
        }
      }
      ctx.putImageData(imageData, rect.x, rect.y);
    }

</script>





    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
<script src="js/slick.min.js"></script>  
    <script src="js/custom.js"></script>    
<script src="js/isotope.pkgd.js"></script>
  </body>
</html>


<?php
 ob_flush();
?>