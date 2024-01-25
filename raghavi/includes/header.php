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
 

    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/about.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/ourexperts.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/healthcard.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/global.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/testimonialpage.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/index.css"> 
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/servicesmain.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <!-- Aos CSS -->
    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

     <!-- BOOTSTRAP ICONS  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     
  
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
            <div class="container-fluid d-flex justify-content-center">   
              <section class="">
                <div class="collapse navbar-collapse  center-row" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto  mb-lg-0">
                      <li class="nav-item">
                        <a class=" active nav-font" aria-current="page" href="<?=BASE_URL;?>">Home</a>
                      </li>

                      <li class="nav-item dropdown Gallery ">
                        <a class=" dropdown-toggle nav-font " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          About
                        </a>
                        <ul id="gallery-options" class="dropdown-menu  rounded-0 ">
                          <li><hr class="dropdown-divider"></li> 
                           <li>  <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/about.php">About Us</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li> <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/founders.php">Our Founders</a></li>
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
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages3">ANAESTHESIOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings1"> GENERAL SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home4">ORTHOPAEDICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile2">ENT SURGERY</a></li>    
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">     
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings3">LAPROSCOPIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages2">NEURO AND SPINAL SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home3">SPINE SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li> 
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings4">UROLOGY</a></li> 
                                <li><hr class="dropdown-divider"></li>    
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                              <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings2">PLASTIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home2">PEDIATRIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages1">GYNOCOLOGY AND OBSTETRICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile3">VASCULAR SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>    
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                              <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile1">PEDIATRICS AND NEWBORN</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home1">GEN MEDICINE</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile4">DIABETOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages4">OBSTETRICS</a></li>
                                <li><hr class="dropdown-divider"></li>    
                              </div>
          
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                              <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home5">PULMONOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages5">24/7 DIAGNOSTICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings5">PHARMACY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile5">PHYSIOTHERAPY</a></li>
                              </div>

                        </ul>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                     <!-- <ul id="Services-menu" class="dropdown-menu  rounded-0">
                          <div class="container">
                            <div class="row">

                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                              <li><hr class="dropdown-divider"></li> 
                              <button class="nav-lin  center-row"  id="v-pills-home1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home1" type="button" role="tab" aria-controls="v-pills-home1" aria-selected="true"><span class="btn-name">GENERAL MEDICINE</span></button>
                              <button class="nav-lin  center-row" id="v-pills-profile1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile1" type="button" role="tab" aria-controls="v-pills-profile1" aria-selected="false"><span class="btn-name">PEDIATRICS AND NEWBORM</span></button>
                              <button class="nav-lin center-row"  id="v-pills-messages1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages1" type="button" role="tab" aria-controls="v-pills-messages1" aria-selected="false"><span class="btn-name">GYNOCOLOGY AND OBSTETRICS</span></button>
                              <button class="nav-lin  center-row" id="v-pills-settings1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings1" type="button" role="tab" aria-controls="v-pills-settings1" aria-selected="false"><span class="btn-name">GENERAL SURGERY</span></button>
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">     
                              <button class="nav-lin  center-row" id="v-pills-home2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home2" type="button" role="tab" aria-controls="v-pills-home2" aria-selected="true"><span class="btn-name">PEDIATRIC SURGERY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-profile2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile2" type="button" role="tab" aria-controls="v-pills-profile2" aria-selected="false"><span class="btn-name">ENT SURGERY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-messages2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages2" type="button" role="tab" aria-controls="v-pills-messages2" aria-selected="false"><span class="btn-name">NEURO AND SPINAL SURGERY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-settings2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings2" type="button" role="tab" aria-controls="v-pills-settings2" aria-selected="false"><span class="btn-name">PLASTIC SURGERY </span></button>
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                              <button class="nav-lin  center-row" id="v-pills-home3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home3" type="button" role="tab" aria-controls="v-pills-home3" aria-selected="true"><span id="btn-name">SPINE SURGERY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-profile3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile3" type="button" role="tab" aria-controls="v-pills-profile3" aria-selected="false"><span id="btn-name">VASCULAR SURGERY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-messages3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages3" type="button" role="tab" aria-controls="v-pills-messages3" aria-selected="false"><span class="btn-name">ANAESTHESIOLOGY</span></button>
                               <button class="nav-lin  center-row" id="v-pills-settings3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings3" type="button" role="tab" aria-controls="v-pills-settings3" aria-selected="false"><span class="btn-name">LAPAROSCOPIC</span></button>
                              </div>
            
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                              <button class="nav-lin  center-row" id="v-pills-home4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home4" type="button" role="tab" aria-controls="v-pills-home4" aria-selected="true"><span class="btn-name">ORTHOPAEDICS</span></button>
                              <button class="nav-lin  center-row" id="v-pills-profile4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile4" type="button" role="tab" aria-controls="v-pills-profile4" aria-selected="false"><span class="btn-name">DIABETOLOGY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-messages4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages4" type="button" role="tab" aria-controls="v-pills-messages4" aria-selected="false"><span class="btn-name">OBSTETRICS</span></button>
                              <button class="nav-lin  center-row" id="v-pills-settings4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings4" type="button" role="tab" aria-controls="v-pills-settings4" aria-selected="false"><span class="btn-name">UROLOGY</span></button>
                              </div>
          
                              <div class="col-12 col-lg-4 col-md-12 col-sm-12">  
                              <button class="nav-lin  center-row" id="v-pills-home5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home5" type="button" role="tab" aria-controls="v-pills-home5" aria-selected="true"><span class="btn-name">PULMONOLOGY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-profile5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile5" type="button" role="tab" aria-controls="v-pills-profile5" aria-selected="false"><span class="btn-name">24/7 DIAGNOSTICS </span></button>
                              <button class="nav-lin  center-row" id="v-pills-messages5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages5" type="button" role="tab" aria-controls="v-pills-messages5" aria-selected="false"><span class="btn-name"> PHYSIOTHERAPY</span></button>
                              <button class="nav-lin  center-row" id="v-pills-settings5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings5" type="button" role="tab" aria-controls="v-pills-settings5" aria-selected="false"><span class="btn-name">PHARMACY</span></button>
                              </div>

                        </ul>--> 

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
                              <li>  <a class="dropdown-item nav-font"href="<?=BASE_URL;?>/facilities.php">OUTPATIENT SERVICES</a></li>
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

                        </div>
                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class=" nav-font" aria-disabled="true" href="<?=BASE_URL;?>/ourexperts.php">Our Experts</a>
                      </li>


              
                      <li class="nav-item dropdown Gallery ">
                        <a class=" dropdown-toggle nav-font " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Gallery
                        </a>
                        <ul id="gallery-options" class="dropdown-menu  rounded-0 ">
                          <li><hr class="dropdown-divider"></li> 
                           <li>  <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/testimonials.php">TESTIMONIALS</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li> <a class="dropdown-item nav-font " href="#">AWARDS</a></li>
                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class="nav-font"  href="<?=BASE_URL;?>/blogs.php">Blogs</a>
                      </li>
                
                      <li class="nav-item">
                        <a class="nav-font"  href="<?=BASE_URL;?>/contact.php">Contact Us</a>
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
      <ul class="dropdown-menu" style="box-shadow:1px 1px 10px rgb(92, 92, 92);z-index:17000;">
                                <li><hr class="dropdown-divider"></li> 
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages3">ANAESTHESIOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings1"> GENERAL SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home4">ORTHOPAEDICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile2">ENT SURGERY</a></li>    
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings3">LAPROSCOPIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages2">NEURO AND SPINAL SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home3">SPINE SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li> 
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings4">UROLOGY</a></li> 
                                <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings2">PLASTIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home2">PEDIATRIC SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages1">GYNOCOLOGY AND OBSTETRICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile3">VASCULAR SURGERY</a></li>
                                <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile1">PEDIATRICS AND NEWBORN</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home1">GEN MEDICINE</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile4">DIABETOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages4">OBSTETRICS</a></li>
                                <li><hr class="dropdown-divider"></li>    
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home5">PULMONOLOGY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages5">24/7 DIAGNOSTICS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings5">PHARMACY</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile5">PHYSIOTHERAPY</a></li>
                              </ul>
    </li>
    <li class="nav-item dropdown mb-3">
      <a  class=" dropdown-toggle nav-font fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <li class="nav-item dropdown mb-3">
      <a class=" dropdown-toggle nav-font fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Gallery
      </a>
      <ul class="dropdown-menu" style="box-shadow: 1px 1px 10px rgb(92, 92, 92);" >
      
        <li><hr class="dropdown-divider"></li> 
         <li>  <a class="dropdown-item nav-font " href="<?=BASE_URL;?>/testimonials.php">TESTIMONIALS</a></li>
         <li><hr class="dropdown-divider"></li>
         <li> <a class="dropdown-item nav-font " href="#">AWARDS</a></li>
      </ul>
    </li>
    <li class="nav-item mb-3">
      <a class="nav-font fs-4"  href="<?=BASE_URL;?>/blogs.php">Blogs</a>
    </li>

    <li class="nav-item mb-3">
      <a class="nav-font fs-4"  href="<?=BASE_URL;?>/contact.php">Contact Us</a>
    </li>

    <li class="nav-item">
      <a class="nav-font fs-4" href=""  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Book Appointment</a>
    </li>
</div>
</div>














<!-- AppointMent Form Off Canvas starts -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="z-index: 12000;height: 550px;margin-top: 150px;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title fs-4" id="offcanvasRightLabel">Shedule your Checkup Here </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
        
    <form class="">
      <div class="row">
          <div class="col-12 mb-3">
              <input type="name" class="form-control rounded-0 mb-4 h-75" id="pwd" placeholder="Your Name *">    
          </div>
          <div class="col-12 mb-3">
              <input type="mobilenumber" class="form-control mb-4 rounded-0 h-75" id="pwd" placeholder="Mobile Number *">
          </div>
          <div class="col-12 mb-3">
              <input type="email" class="form-control mb-4 rounded-0 h-75" id="pwd" placeholder="Your Email">    
          </div>
          <div class="col-12 mb-3">
              <input type="date" class="form-control mb-4 rounded-0 h-75" id="pwd" >
          </div>

          <div class="col-12 mb-3">
              <input type="textarea" class="form-control mb-4 Share_Your_Problem rounded-0 h-75" id="pwd" placeholder="Share Your Problem *">
          </div>

          <div class="">
              <input type="submit" value="SEND MESSAGE" class="Enquiry_section_button  rounded-0 btn btn-primary">
          </div>
        </div>
      </form>

  </div>
</div>