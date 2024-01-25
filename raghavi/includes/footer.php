
<!-- Footer section -->
<section class="container-fluid  Footer_Section ">
  <div class="container">


  <div class="row content-area justify-content-evenly pt-5">

    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 "> 
      <div>
        <h4 class="mb-3">Our Location</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, blanditiis nam tempora mollitia dicta expedita error vero nihil debitis quod architecto ea deleniti ipsa corrupti laborum saepe consequatur voluptate ducimus.</p>
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.4079169380348!2d78.43838607594786!3d17.440179501280713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91a83514a64f%3A0x99a270998c3a9d6e!2sVega%20Web%20Solutions!5e0!3m2!1sen!2sin!4v1691142595338!5m2!1sen!2sin" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
       </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
      <h4 class="brand mb-3">Centres of Excellence</h4>
              <li class="nav-link mb-2">Pediatrics and Newborn</li>
              <li  class="nav-link mb-2">Pediatric Surgery</li>
              <li class="nav-link mb-2">Neuro and Spinal Surgery</li>
              <li  class="nav-link mb-2">Plastic Surgery and Cosmetology</li>
              <li  class="nav-link">Gynocology and Obstetrics</li>
              <li class="nav-link mb-2">Radiology</li>
              <li  class="nav-link mb-2">Anaesthesiology</li>
              <li class="nav-link mb-2">Vascular Surgery</li>
              <li  class="nav-link mb-2">Laser Surgery</li>
              <li  class="nav-link">ENT Surgery</li>
              <li class="nav-link mb-2">General Surgery</li>
              <li  class="nav-link mb-2">General Medicine</li>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  d-flex">
       <div>
        <h4 class="brand mb-3  ms-3">TRH</h4>
       
          <li class="nav-link mb-2">About Us</li>
          <li  class="nav-link mb-2">Company</li>
          <li class="nav-link mb-2">Our Gallery</li>
          <li  class="nav-link mb-2">Privacy Police</li>
          <li  class="nav-link">Faq</li>
       
       </div>
       <div>
        <h4 class="mb-3">News & Media</h4>
        <ul>
          <li class="nav-link mb-2">Testimonials</li>
          <li  class="nav-link">News and Articles</li>
        </ul>
       </div>
    </div>
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
      <div>
        <h4 class="brand mb-3">Important Health Information</h4>
        
          <li class="nav-link mb-2">About Us</li>
          <li  class="nav-link mb-2">Company</li>
          <li class="nav-link mb-2">Our Gallery</li>
          <li  class="nav-link mb-2">Privacy Police</li>
          <li  class="nav-link">Faq</li>
       </div>
    </div>
  </div>

  </div>
</section>
<section class="Footer_Copyright_section">
  <div class="center-col pt-3">
    <p class="text-center">Copyright © 2023 All Rights Reserved</p>
  </div>
</section>
<!-- Footer section ends-->
<!-- AppointMent Form Off Canvas ends -->
<!-- CAROUSEL JQUERY AND SLICK CDN START -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?=BASE_URL;?>/assets/js/index_carl.js"></script>
<script src="<?=BASE_URL;?>/assets/js/testimonials.js"></script>
<!-- CAROUSEL JQUERY AND SLICK CDN ENDS -->
<!-- BOOTSTRAP SCRIPT CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="<?=BASE_URL;?>/assets/js/scrolling_nav.js"></script>
<script>
currLoc = $(location).attr('href');
var split = currLoc.split('#');
$(document).ready(function(){
    activaTab(split[1]);
});

function activaTab(tab){
    $('#'+tab).addClass('active show');
    $('#'+ tab +'-tab').addClass('active');
                         
};




// let elements = document.querySelector(".dropdown-item");
// console.log(elements);

</script>
</body>
</html>