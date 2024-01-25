<?php 
CONST BASE_URL = '/raghavi'; // project folder name here
$page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0" />
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- css file link -->
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/index.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/global.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/about.css">
    <!-- <link rel="stylesheet" href="<?=BASE_URL;?>/css/testimonial.css"> -->
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <!-- Aos CSS -->
    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

     <!-- BOOTSTRAP ICONS  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     
      <!-- FONT AWESOME CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<section  class="container-fluid Header" id="Header" style="z-index: 10000;">
    <section  class="container ">
        <nav id="navbar" class="navbar navbar-expand-xxl">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="<?=BASE_URL;?>/assets/images/1.png" id="logo"  height="80px"  alt="" ></a>
              <!-- <button class="navbar-toggler ms-auto navbar-expand-xxl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> -->
              <button class="navbar-toggler navbar-expand-xxl" type="button" data-bs-toggle="" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <a class=" " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span  class="navbar-toggler-icon "></span> </a>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ">
                    </ul> -->

                    <section class="container-fluid">
                        <div class="row">
                               <div class="col-lg-4  p-3  d-flex Contact-Info">
                                <div class="d-flex center-row">
                                    <i class="bi bi-telephone-fill fs-2"></i>
                                </div>
                                    <div class="ms-3 ">
                                        <h5 class="fs-6 ">Book Appointment</h5>
                                        <h6 class="fs-5  text-dark">+91&nbsp;8400284009</h6>

                                    </div>
                               </div>
                              
                                <!-- <i class="bi bi-envelope-at-fill"></i>&nbsp;&nbsp;info@RagaviHospital.com -->


                                <div class="col-lg-4 p-3  d-flex Contact-Info">
                                
                                    <div class="d-flex center-row">
                                        <i class="bi bi-envelope-at fs-2"></i>
                                    </div>
                                        <div class="ms-3">
                                            <h5 class="fs-6">24&nbsp;X&nbsp;7 online support</h5>
                                            <h5 class="fs-6  text-dark">info@RagaviHospital.com</h5>
                                        </div>
                                </div>


                               <div class="col-lg-4 p-3  d-flex Contact-Info ">
                                
                                <div class="d-flex center-row">
                                    <i class="bi bi-telephone-fill fs-2"></i>
                                </div>
                                    <div class="ms-3">
                                        <h5 class="fs-6">Book Appointment</h5>
                                        <h6 class="fs-5 text-dark">+91&nbsp;8400284009</h6>
                                    </div>
                               </div>
                        </div>
                    </section>
                  </div>
            </div>
          </nav>

            <nav class="navbar navbar-expand-xxl  Nav-Options-Bar">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> -->
              
              <section class="">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-lg-0">
                      <li class="nav-item">
                        <a class=" active nav-font" aria-current="page" href="<?=BASE_URL;?>/>Home</a>
                      </li>

                      <li class="nav-item dropdown Gallery ">
                        <a class=" dropdown-toggle nav-font " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          About
                        </a>
                        <ul id="gallery-options" class="dropdown-menu  rounded-0 ">
                          <li><hr class="dropdown-divider"></li> 
                           <li>  <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/about.php">About Us</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li> <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/founders.html">Our Founders</a></li>
                        </ul>
                      </li>
                        
                

                      <li class="nav-item dropdown Services">
                        <a  class=" dropdown-toggle nav-font " id="nav-bt" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <ul id="Services-menu" class="dropdown-menu  rounded-0">
                          <div class="container">
                            <div class="row">
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                <li><hr class="dropdown-divider"></li> 
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_main3.html">ANAESTHESIOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li> <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_pediatrics_and_newborn.html"> GENERAL SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li> <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_gynocology_and_obstetrics.html">ORTHOPAEDICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>  <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_goneral_surgery.html">ENT SURGERY</a></li>    
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">     
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_pediatric_surgery.html">LAPROSCOPIC SURGERY</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_ent_surgery.html">NEURO SURGERY</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_neuro_and_spinal_surgery.html">SPINE SURGERY</a></li>
                                    <li><hr class="dropdown-divider"></li> 
                                    <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_plastic_surgery.html">UROLOGY</a></li>
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                                <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_laser_surgery.html">PLASTIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_vascular_surgery.html">PEDIATRIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_anasthesiology.html">GYNAEC AND OBSTETRICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_radiology.html">VASCULAR SURGERY</a></li>
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                                <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_pediatrics.html">PEDIATRICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_genMedicine.html">GEN MEDICINE</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_anasthesiology.html">DIABETOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_radiology.html">OBSTETRICS</a></li>
                              </div>

                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                                <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_laser_surgery.html">PULMONOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_vascular_surgery.html">24/7 DIAGNOSTICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_anasthesiology.html">PHARMACY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_radiology.html">PHYSIOTHERAPY</a></li>
                              </div>
                        </ul>
                      </li>

                      <li class="nav-item dropdown Facilities">
                        <a class=" dropdown-toggle nav-font " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Facilities
                        </a>
                        <ul class="dropdown-menu   rounded-0 " id="Facilities-menu"  >
                        <div class="container">
                          <div class="row">
                            <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                              <li><hr class="dropdown-divider"></li> 
                              <li>  <a class="dropdown-item nav-font"href="<?=BASE_URL;?>/facilities_outpatient_services.html">OUTPATIENT SERVICES</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li> <a class="dropdown-item nav-font"href="<?=BASE_URL;?>/facilities_casuality.html">CASUALITY</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li> <a class="dropdown-item nav-font"href="<?=BASE_URL;?>/facilities_day_care_treatment.html">DAY CARE TREATMENT </a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li>  <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_day_case_surgeries.html">DAY CASE SURGERIES</a></li>
                              <li><hr class="dropdown-divider"></li>
                          </div>
            
                          <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_ot_major_minor.html">OT MAJOR AND MINOR</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_level_inw.html">LEVEL INW</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_miw.html">MIW</a></li>
                            <li><hr class="dropdown-divider"></li> 
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_siw.html">SIW</a></li>
                            <li><hr class="dropdown-divider"></li>    
                          </div>
            
                          <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_deluxe_room.html">DELUXE ROOM</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_xray.html">Xray</a></li>                
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_ultrasound.html">ULTRASOUND</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_lob.html">LOB</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_pharmacy.html">PHARMACY</a></li>
                          </div>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class=" nav-font" aria-disabled="true" href="<?=BASE_URL;?>/our_experts.html">Our Experts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-font"  href="<?=BASE_URL;?>/health_card.html">Health Card</a>
                      </li>
              
                      <li class="nav-item dropdown Gallery ">
                        <a class=" dropdown-toggle nav-font " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Gallery
                        </a>
                        <ul id="gallery-options" class="dropdown-menu  rounded-0 ">
                          <li><hr class="dropdown-divider"></li> 
                           <li>  <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/testimonials.html">TESTIMONIALS</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li> <a class="dropdown-item nav-font " href="#">AWARDS</a></li>
                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class="nav-font"  href="<?=BASE_URL;?>/Blogs.html">Blogs</a>
                      </li>
                
                      <li class="nav-item">
                        <a class="nav-font"  href="<?=BASE_URL;?>/contact_us.html">Contact Us</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-font" href=""  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Book Appointment</a>
                      </li>
                     

                    </ul>
                  </div>
              </section>
            </div>
          </nav>
    </section>
</section>

<!-- off canvas  -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"  style="z-index: 12000;">
<div class="offcanvas-header">
  <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> -->
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
    <li class="nav-item mb-3">
      <a class="nav-font active fs-4" aria-current="page"  id="nav-btn" href="#">Home</a>
    </li>
    <li class="nav-item mb-3 fs-4">
      <a class="nav-font active fs-4" aria-current="page"  id="nav-btn" href="<?=BASE_URL;?>/About.html">About</a>
    </li>
    <li class="nav-item mb-3 fs-4">
      <a class="nav-font fs-4"  id="nav-btn" href="<?=BASE_URL;?>/our_experts.html">Our Experts</a>
    </li>
    <li class="nav-item dropdown mb-3">
      <a class=" dropdown-toggle nav-font fs-4" id="nav-btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Services
      </a>
      <ul class="dropdown-menu" style="box-shadow: 1px 1px 10px rgb(92, 92, 92);">
            <li><hr class="dropdown-divider"></li> 
            <li>  <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_main3.html">GENERAL MEDICINE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li> <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_pediatrics_and_newborn.html">PEDIATRICS AND NEWBORM</a></li>
           <li><hr class="dropdown-divider"></li>
           <li> <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_gynocology_and_obstetrics.html">GYNOCOLOGY AND OBSTETRICS</a></li>
           <li><hr class="dropdown-divider"></li>
           <li>  <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_goneral_surgery.html">GONERAL SURGERY</a></li>
           <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_pediatric_surgery.html">PEDIATRIC SURGERY</a></li>
           <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_ent_surgery.html">ENT SURGERY</a></li>
           <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_neuro_and_spinal_surgery.html">NEURO AND SPINAL SURGERY</a></li>
            <li><hr class="dropdown-divider"></li> 
            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_plastic_surgery.html">PLASTIC SURGERY AND COSMETOLOGY</a></li>
                     

              <li><hr class="dropdown-divider"></li>    
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_laser_surgery.html">LASER SURGERY</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_vascular_surgery.html">VASCULAR SURGERY</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_anasthesiology.html">ANAESTHESIOLOGY</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services_radiology.html">RADIOLOGY</a></li>
           
      </ul>
    </li>
    <li class="nav-item dropdown mb-3">
      <a class=" dropdown-toggle nav-font fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Facilities
      </a>
      <ul class="dropdown-menu" style="box-shadow: 1px 1px 10px rgb(92, 92, 92);" >        
        <li><hr class="dropdown-divider"></li> 
         <li>  <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_outpatient_services.html">OUTPATIENT SERVICES</a></li>
         <li><hr class="dropdown-divider"></li>
         <li> <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_casuality.html">CASUALITY</a></li>
        <li><hr class="dropdown-divider"></li>
        <li> <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_day_care_treatment.html">DAY CARE TREATMENT </a></li>
        <li><hr class="dropdown-divider"></li>
        <li>  <a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_day_case_surgeries.html">DAY CASE SURGERIES</a></li>
        <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_ot_major_minor.html">OT MAJOR AND MINOR</a></li>
          <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_level_inw.html">LEVEL INW</a></li>
            <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_miw.html">MIW</a></li>
              <li><hr class="dropdown-divider"></li> 
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_siw.html">SIW</a></li>
              <li><hr class="dropdown-divider"></li>    
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_deluxe_room.html">DELUXE ROOM</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_xray.html">Xray</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_ultrasound.html">ULTRASOUND</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_lob.html">LOB</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/facilities_pharmacy.html">PHARMACY</a></li>
      </ul>
    </li>
    <li class="nav-item mb-3">
      <a class="nav-font fs-4"  href="<?=BASE_URL;?>/health_card.html">Health Card</a>
    </li>

    <li class="nav-item dropdown mb-3">
      <a class=" dropdown-toggle nav-font fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Gallery
      </a>
      <ul class="dropdown-menu" style="box-shadow: 1px 1px 10px rgb(92, 92, 92);" >
      
        <li><hr class="dropdown-divider"></li> 
         <li>  <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/testimonials.html">TESTIMONIALS</a></li>
         <li><hr class="dropdown-divider"></li>
         <li> <a class="dropdown-item nav-font " href="#">AWARDS</a></li>
      </ul>
    </li>
    <li class="nav-item mb-3">
      <a class="nav-font fs-4"  href="<?=BASE_URL;?>/Blogs.html">Blogs</a>
    </li>

    <li class="nav-item mb-3">
      <a class="nav-font fs-4"  href="<?=BASE_URL;?>/contact_us.html">Contact Us</a>
    </li>

    <li class="nav-item">
      <a class="nav-font fs-4" href=""  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Book Appointment</a>
    </li>
</div>
</div>
