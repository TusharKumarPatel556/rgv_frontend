<?php include_once('includes/header.php'); ?>

<!--Banner Section Starts -->
<!-- NEW CAROUSEL DESIGN -->

<div id="carouselExampleCaptions" class="carousel slide CarouselMain" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
  </div>
  <div class="carousel-inner CarouselInner" >
    <div class="carousel-item active CarouselItem">
      <img src="<?=BASE_URL;?>/assets/images/1920X500_home page 1.png"  class="d-block w-100 Image img-responsive" alt="..." style="object-fit:fill;">
              <div class="carousel-caption d-none d-md-block" style="margin-top: -170px; overflow: hidden; z-index: 3000;" >
                <h4 class="Banner-Title"> We Care For YOU</span></span></h4>      
                <h5 class="card-title-banner">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
           
    </div>
    <div class="carousel-item CarouselItem">
      <img src="<?=BASE_URL;?>/assets/images/1920X500_home page 2.png"   class="d-block w-100 Image  img-responsive" alt="..." style="object-fit:fill;">
              <div class="carousel-caption d-none d-md-block" style="margin-top: -170px; overflow: hidden; z-index: 3000;" >
                <h4 class="Banner-Title" > We Care For YOU</span></span></h4>
                <h5 class="card-title-banner">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
    </div>
    <!-- <div class="carousel-item CarouselItem">
      <img src="<?=BASE_URL;?>/assets/images/1920X500_home page.png"  class="d-block w-100 Image  img-responsive" alt="..." style="object-fit:fill;">
              <div class="carousel-caption d-none d-md-block" style="margin-top: -170px; overflow: hidden; z-index: 3000;" >
                <h4 class="Banner-Title" > We Care For YOU</span></span></h4>
                <h5 class="card-title-banner">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Banner Section Ends -->


<!-- About section start -->

<section class="mt-5 p-4">
    <div class="card mb-3 border-0" style="max-width: 100%;">
      <h3 class="fs-1 text-center heading"><u>About Us</u></h3>
      <div class="row">
        <div class="col-md-5 p-5">
          <img src="<?=BASE_URL;?>/assets/images/hospitalimg.webp" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title fs-1">About Raghavi Hospital</h5>
            <p class="card-text">Ragavi Hospital is a multi-specialty hospital in Vivekananda Nagar, with a house Pediatrician, General physician, and Gynecologist. A complete Surgical center for all types of Uro, Neuro, Ortho, ENT, and Laparoscopic surgeries. The clinic was founded by the carried out medical expert, Dr. Arunendra, who holds degrees in MBBS, DA, and DNB, and has dedicated his life to the betterment of present-day healthcare.</p>
            <p class="card-text">Ragavi Multi-Speciality Health Facility is devoted to turning in complete healthcare services with a focus on patient-centric care. Dr. Arunendra's task is to provide the network with get right of entry to to world-magnificence medical remedy, the use of today's improvements in healthcare technology, and a group latest notably skilled specialists.</p>
             
             <a href="<?=BASE_URL;?>/about.php" class="btn btn-primary btn-lg rounded-0 mt-5">Read more</a>

          </div>
        </div>
      </div>
    </div>
</section>

<!-- About section Ends -->

<!-- OUR LASER TREATMENTS STARTS -->
<section class="container-fluid">
  <div class="container">
    <div ><h3 class="text-center heading" id="our-specialities" ><u>Our</u> Services</h3></div>

            <div class="row d-flex Specialities  justify-content-start">
         
                  <div class="center-row Specialities col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/24-7 diagnostics.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile5">24/7 diagnostics</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/anesthesiology.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages3">anaesthesiology</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/diabetology.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile4">diabetology</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/ENT surgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile2">ent surgery</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/gen medicine.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home1">gen medicine</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/general surgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings1">general surgery</a></p>
                          </div>
                      </div>
                  </div>    
                
                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/gynaec & obstetrics.svg" height="190px" class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text  text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages1">gynocology and obstetrics</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3"  >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/laparoscopic surgery.svg"   class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings3">laproscopic surgery</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/neurosurgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages2">neuro and apinal surgery</a></p>
                          </div>
                      </div>
                  </div>     

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3">
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/obstetrics.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages4">obstetrics</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/orthopaedics.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home4">orthopaedics</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/pediatric surgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home2">pediatric surgery</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/pediatrics.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile1">pediatrics and newborn</a></p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/pharmacy.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings5">pharmacy</a></p>
                        </div>
                    </div>
                </div>  


                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/physiotherapy.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-messages5">physiotherapy</a></p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/plastic surgery.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings2">plastic surgery</a></p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/pulmonology.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home5">pulmonology</a></p>
                        </div>
                    </div>
                </div>  
                      
                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3 ">
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/spine surgery.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-home3">spine surgery</a></p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/urology.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-settings4">urology</a></p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12  mb-3" >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/vascular.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center"><a class="dropdown-item nav-font" href="<?=BASE_URL;?>/services.php#v-pills-profile3">vascular surgery</a></p>
                        </div>
                    </div>
                </div>
        </div>
     </div>
  </div>
</section>
<!-- OUR LASER TREATMENTS ENDS -->




<!-- CAROUSEL ONE STARTS -->
<section class="container-fluid SpecialProc mt-3">
  
  <h4 class="fs-2 text-center heading"><u> Special</u> Procedures</h4>
  <div class="Slick-Slide  centercol">
      <div class="p-5"> 
          <div class="card center-col " style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
    
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
 
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>


      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="p-5"> 
          <div class="card center-col" style="width:100%">
          <img src="<?=BASE_URL;?>/assets/images/doc_img.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- CAROUSEL ONE ENDS -->     





<!-- BOOK YOUR APPOINTMENT-->

<section class="container">
    <div class="book-appointment">
        <div class="card text-bg-dark border-0 rounded-0">
          <img src="<?=BASE_URL;?>/assets/images/whychsus.webp" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title text-center fs-1 heading">BOOK YOUR APPOINTMENT</h5>
          </div>
        </div>
    </div>
</section>

<!-- BOOK YOUR APPOINTMENT-->
<!-- MISSION and Vision SECTION -->
<!--  What Have We Achived starts-->
<!-- Why to choose us page -->
<section class="container-fluid mt-5 Why-Weare-container">
  <div>
      <h3 class="text-center  mb-5 heading" style="font-size: 40px;">Why We Are The Best  ?</h3>
  </div>
  <div class="container ">
      <div class="row Why-Weare  Team-Container">

          <div class=" center-row   col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/specialities1.webp" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Exemplary Medical Team</p>
                  </div>
                </div>
          </div>

          <div class="center-row  col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/specialities2.webp" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Patient-Centric Focus </p>
                  </div>
                </div>
          </div>

          <div class="center-row   col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/specialities3.webp" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Cutting-Edge Technology</p>
                  </div>
                </div>
          </div>


          <div class=" center-row mt-5  col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/ambulance.webp" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">24/7 Emergency Services </p>
                  </div>
                </div>
          </div>

          <div class="center-row mt-5  col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/neuro3.jpg" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Lorem Ipsum</p>
                  </div>
                </div>
          </div>

          <div class="center-row mt-5  col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/neuro3.jpg" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Lorem Ipsum</p>
                  </div>
                </div>
          </div>

      </div>
</section>



<section class="container-fluid Why-Us-Section p-3  mb-5" style="margin-top: 150px;">
  <div class="WhyUs center  d-flex justify-content-center p-5">
    <h3 style="font-size: 56px; color: rgb(255, 255, 255);" class="heading">What Have We Achived ?</h3>
  </div>
  <div class="Achivements Item container-fluid">
    <div class="row   justify-content-evenly">
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  center-col">
        <div class="card" >
          <div class="card-body center-col">
            <h5 class="card-title fs-4" style="color: white;"><span max-num=10 class="Ach-Num">10</span ><span class="sub">+</span></h5>
            <p class="card-text Ach-text">years Of Experience</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 center-col">
        <div class="card" >
          <div class="card-body center-col">
            <h5 class="card-title fs-4" style="color: white;"><span max-num=10 class="Ach-Num">10</span ><span class="sub">K+</span></h5>
            <p class="card-text Ach-text">Leaser Surgeries</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 center-col">
        <div class="card" >
          <div class="card-body center-col">
            <h5 class="card-title fs-4" style="color: white;"><span max-num=10 class="Ach-Num">98</span ><span class="sub">%</span></h5>
            <p class="card-text Ach-text">Success Rate</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="container-fluid mt-5" style="background-color: rgb(245, 245, 245);">
  <div class="">
      <h4 class="text-center fs-1 text-dark heading">WHY CHOOSE US ?</h4>
      <h5 class="text-center fs-3 text-dark">You Will Love the Way We Care For You</h5>
      <p class="text-center fs-5 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima et soluta praesentium sed est nisi cumque obcaecati earum dolorem tempore!</p>
  </div>
  <div class="container">
         <div class="row">
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 center-col">
              <div class="wecare rounded-0 center-row" style="width:305px; height:305px;">
                  <div class="wecare-child">
                      <img  src="<?=BASE_URL;?>/assets/images/whychsus1.webp" class="rounded-0" width="300px"  height="300px"  alt="">
                  </div>
              </div>
              <div>
                  <h3 class="fs-3 text-center text-light">Lorem Ipsum</h3>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 center-col">
              <div class="wecare center-row" style="width: 305px; height:305px;">
                  <div class="wecare-child">
                      <img  src="<?=BASE_URL;?>/assets/images/wecare1.jpg" width="300px"  height="300px"  alt="">
                  </div>
              </div>
              <div>
                  <h3 class="fs-3 text-center text-light">Lorem Ipsum</h3>
              </div>
          </div> 
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 center-col">
              <div class="wecare center-row" style="width: 305px; height:305px;">
                  <div class="wecare-child">
                      <img  src="<?=BASE_URL;?>/assets/images/wecare1.jpg" width="300px"  height="300px"  alt="">
                  </div>
              </div>
              <div>
                  <h3 class="fs-3 text-center text-light">Lorem Ipsum</h3>
              </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 center-col">
              <div class="wecare center-row" style="width: 305px; height: 305px;">
                  <div class="wecare-child">
                      <img  src="<?=BASE_URL;?>/assets/images/wecare1.jpg" width="300px"  height="300px"  alt="">
                  </div>
              </div>
              <div>
                  <h3 class="fs-3 text-center text-light">Lorem Ipsum</h3>
              </div>
          </div>
         </div>
  </div>
</section>



<!--  What Have We Achived ends-->
<!-- REVIEWS  START-->


<section class="container-fluid mt-5">
  
  <h4 class="text-center fs-2 mt-5 heading"> 
           Testimonials
  </h4>

<div class="container ">
<div class="testimonials">
  <div class="p-5">






    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center mt-3 mb-3 center-row" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted  patient-review">
          <p class="text-center">We visited Dr Bhargavi Arun for my 2 yr old daughter. The doctor was so friendly with the kid and provided the required medication.
            Dr was very helpful in addressing the treatment over the phone and my daughter is doing well. 
            Dr Bhargavi Arun understands the pain of parents in such situations. My gratitude for helping us at the right time.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Raghunadh</h5>
          <h6 class="mt-5 testimonial-star text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>


  <div class="p-5"> 
    <div class="card center-col" style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">Dr.Bhargavi Arun is very friendly, listens each and every issue very patiently & explains the root cause with relevant treatment.

We have been consulting her since past one year whenever we need any advice related to child growth& all pediatric problems

I strongly recommend Dr.Bhargavi Arun for all pediatric needs.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">D S Sankar Palakollu</h5>
          <h6 class="mt-5 testimonial-star  text-center" >Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>

  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">Talking about Dr. Bhargavi Arun, she listens to all problems very patiently. Also guides by clearing all doubts. Especially, what kind of food should be given to children, when should medicines be used, everything is explained in a way that makes sense. Thank you for taking such great care of my daughter.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Murali</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>

  <div class="p-5"> 
    <div class="card center-col" style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">She provides not only medication during visits but offline also on WhatsApp. Available during any time of the day beyond consulting hours.

She guided about diet plan for my child, giving tips on nutrition to be added and fruits to be introduced for 6 th month old kid.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">SivaPriya</h5>
          <h6 class="mt-5 testimonial-star  text-center" >Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>


  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">she is available 24/7 on the phone as well. I've been taking my new born for treatment to her clinic since my baby is 1 month old, & till now all her treatments have been really good. I would highly recommend Dr. Bhargavi to all the parents out there . For any kind of treatment to their children. 
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Nikita Oliva</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>



  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">She has so much patience in clearing our doubts and giving tips. Very much satisfied and happy with her treatment. She always stay in contact with parents when ever needed, and recommended very less medicine as well.I sincerely suggest her for your kids. 
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Seetha Rami Reddy N</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>



  
  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">We are very happy by the way Dr.Bargavi treated our child.I will highly recommend her.She listens very well all our concerns,very friendly with kids.She has lots of patience to deal with toddlers.She also treats with less medicines.More over waiting period is less than 10mins and clinic is very neat and hygiene.Thankyou so much Doctor .
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">SRuthi</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>





  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">She is very friendly...She treats her patients very nicely.. My son always gives her a big smile...Being a parent and seeing a smile on your kid's face is more than enough I think...She is a sweetheart...Would like to recommend to others also...Please visit her guys..Her friendly behaviour took me to her for the second time also...
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Deepti</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>



  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">Doctor Bhargavi Arun is truly a very fantastic person with great patience. She treated my little boy who was suffering from cough and high fever now that he is healthy. She gives adequate time for each patient without rushing and responds to parents as and when needed over telephone which is highly appreciative. I strongly recommend her to your child's health issues.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Krishna Chaitanya Bezawada</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>






  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">We consulted Dr. Bhargavi for my daughter who experienced sudden weight loss and other diabetic symptoms. Based on the reports, she was diagnosed with “Diabetic Ketoacidosis” and we had to admit her in hospital as her condition was critical. During the hospital stay, Dr Bhargavi continuously monitored the situation and engaged the duty doctor and nursing stuff throughout day and night until my daughter is out of critical condition. Dr Bhargavi explained us methodically about the situation giving us hope on how to face her lifelong situation. Her expertise, commitment and patience is commendable. 
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Patient</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>




  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">Doctors patience towards listening the problem and explanation of cause and treatment was awesome. Minimal medication was suggested.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Shiva</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>






  <div class="p-5"> 
    <div class="card center-col " style="width:100%">
      <div class="card testimonial-card"  style="width: 22rem;">
        <div class="text-center  mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
          <p class="text-center">Doctor spent much to listen all our concerns.
          Explained the problem clearly and given proper suggestions. No hurry or rush for next consultation. Over all had good and satisfying experience
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Srinivas</h5>
          <h6 class="mt-5 testimonial-star  text-center">Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
        </div>
      </div>
    </div>
  </div>









</div>

</div>

</section>


<!-- REVIEWS END -->


<!-- FREQUENTLY ASKED QUESTIONS  STARTS-->

<section class="Faq container-fluid mb-5 p-5">
  <h4 class="FAQ text-center fs-1 heading"><u> Faq</u></h4>

  <div class="container">



    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Q: What offerings does Ragavi Multi-Speciality Hospital offer?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Ragavi Multi-Speciality Medical Institution offers a huge range of modern-day scientific services, including general medicine, specialized surgical procedures, obstetrics and gynecology, pediatrics, cardiology, orthopedics, ophthalmology, dermatology, and more.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Q: who's the founder of Ragavi Multi-Speciality Hospital?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The sanatorium was based on Dr. Arunendra, an especially certified medical expert with levels in MBBS, DA, and DNB.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Q: Is the clinic equipped with an advanced scientific era?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">sure, Ragavi Multi-Speciality Health Center is ready with the clinical era and centers to make certain correct diagnoses and powerful remedies.</div>
        </div>
      </div>

      

      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
            Q: How can I make an appointment at Ragavi Multi-Speciality Hospital?
          </button>
        </h2>
        <div id="flush-collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">you may make an appointment by way of calling our clinic's reception or by means of the use of our online appointment reserving machine on our internet site.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo1">
          Q: what's the health center's method of patient care?
          </button>
        </h2>
        <div id="flush-collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The health facility follows a patient-centric approach, making sure that each patient gets individualized care and attention from a devoted crew of trendy clinical professionals.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1" aria-expanded="false" aria-controls="flush-collapseThree1">
          Q: Does the Ragavi Hospital provide emergency offerings?
          </button>
        </h2>
        <div id="flush-collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">yes, Ragavi Multi-Speciality Hospital affords 24/7 emergency scientific services to address pressing healthcare needs.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS  ENDS-->
<?php include_once('includes/footer.php'); ?>