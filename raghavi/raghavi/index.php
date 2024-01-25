<?php include_once('includes/header.php'); ?>

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
<!--Main Navigation Bar Ends-->
<!-- sub nevigation starts -->
<!-- sub navigation ends -->
<!--Banner Section Starts -->
<!-- NEW CAROUSEL DESIGN -->

<div id="carouselExampleCaptions" class="carousel slide CarouselMain" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
    <div class="carousel-item CarouselItem">
      <img src="<?=BASE_URL;?>/assets/images/1920X500_home page.png"  class="d-block w-100 Image  img-responsive" alt="..." style="object-fit:fill;">
              <div class="carousel-caption d-none d-md-block" style="margin-top: -170px; overflow: hidden; z-index: 3000;" >
                <h4 class="Banner-Title" > We Care For YOU</span></span></h4>
                <h5 class="card-title-banner">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
    </div>
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
<section class="mt-5">
    <div class="card mb-3 border-0" style="max-width: 100%;">
      <h3 class="fs-1 text-center heading"><u>About Us</u></h3>
      <div class="row">
        <div class="col-md-5 p-5">
          <img src="<?=BASE_URL;?>/assets/images/old-woman-with-sickness-getting-consultation-from-nurse-doctor.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title fs-1">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
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
         
                  <div class="center-row Specialities col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/24-7 diagnostics.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">24/7 Diagnostic</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/anesthesiology.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">anesthesiology</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/diabetology.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">diabetology</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/ENT surgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">ENT surgery</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/gen medicine.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">gen medicine</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/general surgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">general surgery</p>
                          </div>
                      </div>
                  </div>    

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/gynaec & obstetrics.svg" height="190px" class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text  text-center">gynaec & obstetrics</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/laparoscopic surgery.svg"   class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">laparoscopic surgery</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/neurosurgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">neurosurgery</p>
                          </div>
                      </div>
                  </div>     

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/obstetrics.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">obstetrics</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/orthopaedics.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">orthopaedics</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                      <div class="card " style="width: 12rem;">
                          <img src="<?=BASE_URL;?>/assets/images/ri/pediatric surgery.svg"  class="card-img-top" alt="...">
                          <div class="card-body">
                          <p class="card-text text-center">pediatric surgery</p>
                          </div>
                      </div>
                  </div>

                  <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/pediatrics.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">pediatrics</p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/pharmacy.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">pharmacy</p>
                        </div>
                    </div>
                </div>  


                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/physiotherapy.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">physiotherapy</p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/plastic surgery.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">plastic surgery</p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/pulmonology.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">pulmonology</p>
                        </div>
                    </div>
                </div>  
                      
                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/spine surgery.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">spine surgery</p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/urology.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">urology</p>
                        </div>
                    </div>
                </div>

                <div class="center-row col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card " style="width: 12rem;">
                        <img src="<?=BASE_URL;?>/assets/images/ri/vascular.svg"  class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text text-center">vascular.</p>
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





<!-- LASER TREATMENT STARTS-->
<section class="container-fluid  " style="margin-top: 100px;">
    <div class="container-fluid">
        <div class="card rounded-0 border-0 text-bg-dark Laser-Treatment  center-col position-relative" id="heat-bit-sec">
            <img src="<?=BASE_URL;?>/assets/images/1920X500_home page 3.png"class="card-img " id="Appointment-img" alt="...">
            <div class="card-img-overlay  position-absolute top-50 " >
              <div class="text-center">
                <!-- <img src="<?=BASE_URL;?>/assets/images/Video_1.gif" height="200px" width="500px" alt="" id="heart-bit"> -->
              </div>
              <h5 class="card-title text-center fs-1" >BOOK YOUR APPOINTMENT</h5>
              <p class="card-text text-center " >"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                "s to have it, simply because it is pain..."</p>
            </div>
          </div>
    </div>
</section>
<!-- LASER TREATMENT ENDS-->



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
                  <img src="<?=BASE_URL;?>/assets/images/archieve.jpg" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Lorem Ipsum </p>
                  </div>
                </div>
          </div>

          <div class="center-row  col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/neuro3.jpg" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Lorem Ipsum</p>
                  </div>
                </div>
          </div>

          <div class="center-row   col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/neuro3.jpg" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Lorem Ipsum</p>
                  </div>
                </div>
          </div>


          <div class=" center-row mt-5  col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card team_item" style="width: 22rem;">
                  <img src="<?=BASE_URL;?>/assets/images/neuro3.jpg" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text text-center">Lorem Ipsum </p>
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
              <div class="wecare center-row" style="width:305px; height:305px;">
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
        <div class="text-center mt-3 mb-3 d-flex justify-content-center" id="google" itemid="g-img">
          <img src="<?=BASE_URL;?>/assets/images/google1.png"  alt="">
        </div>
        <div class="text-muted">
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
          <p class="text-center">We visited Dr Bhargavi Arun for my 2 yr old daughter. The doctor was so friendly with the kid and provided the required medication.
            Dr was very helpful in addressing the treatment over the phone and my daughter is doing well. 
            Dr Bhargavi Arun understands the pain of parents in such situations. My gratitude for helping us at the right time.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Raghunadh</h5>
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
          <p class="text-center">We visited Dr Bhargavi Arun for my 2 yr old daughter. The doctor was so friendly with the kid and provided the required medication.
            Dr was very helpful in addressing the treatment over the phone and my daughter is doing well. 
            Dr Bhargavi Arun understands the pain of parents in such situations. My gratitude for helping us at the right time.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Raghunadh</h5>
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
          <p class="text-center">We visited Dr Bhargavi Arun for my 2 yr old daughter. The doctor was so friendly with the kid and provided the required medication.
            Dr was very helpful in addressing the treatment over the phone and my daughter is doing well. 
            Dr Bhargavi Arun understands the pain of parents in such situations. My gratitude for helping us at the right time.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Raghunadh</h5>
          <h6 class="mt-5 testimonial-star  text-center" >Source:&nbsp; <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
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
            Q: How can I take appointments for doctors in Milestones Children's Clinic?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What do doctors who practice in Milestones Children's Clinic specialise in?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            What are the Milestones Children's Clinic timings?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> Currently around 1 doctor practice in Milestones Children's Clinic who specialises as pediatrician.</div>
        </div>
      </div>

      

      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
            Q: How can I take appointments for doctors in Milestones Children's Clinic?
          </button>
        </h2>
        <div id="flush-collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> You can take appointments for doctors who practice in Milestones Children's Clinic online on Practo.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo1">
            What do doctors who practice in Milestones Children's Clinic specialise in?
          </button>
        </h2>
        <div id="flush-collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> Currently around 1 doctor practice in Milestones Children's Clinic who specialises as pediatrician.</div>
        </div>
      </div>
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1" aria-expanded="false" aria-controls="flush-collapseThree1">
            What are the Milestones Children's Clinic timings?
          </button>
        </h2>
        <div id="flush-collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Clinic is usually open during MON - SAT 11:00 - 13:30, 18:45 - 20:45. You can contact the clinic through Practo.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS  ENDS-->
<?php include_once('includes/footer.php'); ?>