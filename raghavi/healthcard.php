<?php include_once('includes/header.php'); ?>

<!-- <section id="page-heading" class=" p-4" >
    <div class="container ">
        <h3>Create Your Own Health Card</h3>
    </div>
</section> -->

    <!-- page content -->
<div class="container-fluid">
    <div class="container mt-3">
        <div class="row text-center">
            <div class="col-12">
                <div class="Top-Heading">
                    <h3 class="Gradient-text-1 text-center">Introducing</h3>
                    <h2 class="Gradient-text-2 text-center">Health Plus Card</h2>
                    <p class="text-center fs-4 text-center" style="color: rgb(70, 21, 70);">Fill in the following details to get your Health Card Today!</p>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="container-fluid" style="background-color: rgba(218, 218, 218, 0.247);">
    <div class="container d-flex flex-row justify-content-center">
        <div class="row">
            <form action="" class=" ">
            
                    <div class="form-group mt-5  col-12 col-sm-12 col-md-10 col-lg-10 mt-4">
                        <label for="name" class="Health_Card_Holder_Name mb-1">Card Number<span class="Health_Card_number_span">*</span></label>
                        <input type="name" class="form-control  rounded-0" id="email">
                      </div>
                
                     
                        <div class="row  ">
                            <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5 mt-2">
                                <label class="Health_Card_Holder_Name" for="pwd">Health Card Holder Name<span class="Health_Card_number_span">*</span></label>
                                <input type="name" class="form-control rounded-0 mt-1" id="pwd" placeholder="First Name">
                            </div>
                            <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5 mt-2">
                                <label for="pwd"></label>
                                  <input type="password" class="form-control rounded-0 mt-1" id="pwd" placeholder="Last Name">
                             </div>
                        </div>
                   
    
                <div class="row">
                    <div class="form-group  col-6 col-sm-6 col-md-5 col-lg-5 mt-2">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Age <span class="Health_Card_number_span">*</span></label>
                        <input type="date" class="form-control rounded-0" id="pwd">
                    </div>
                    <div class="checkbox d-flex flex-column col-6 col-sm-6 col-md-5 col-lg-5 mt-2">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Marital Status <span class="Health_Card_number_span">*</span></label>
                        <label class="CheckBoxs"><input type="checkbox" class="rounded-0"> Married</label>
                        <label class="CheckBoxs"><input type="checkbox" class="rounded-0"> Single</label>
                      </div>
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="name" class="Health_Card_Holder_Name mb-1">Father Name <span class="Health_Card_number_span">*</span></label>
                    <input type="name" class="form-control rounded-0" id="email">
                  </div>
    
                  <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="date" class="Health_Card_Holder_Name mb-1">Mother Age <span class="Health_Card_number_span">*</span></label>
                    <input type="date" class="form-control rounded-0" id="email">
                  </div>
    
                <div class="row mt-3">
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5 mt-2">
                        <label for="date" class="Health_Card_Holder_Name mb-1">Mother Age <span class="Health_Card_number_span">*</span></label>
                        <input type="password" class="form-control rounded-0" id="pwd">
                        <label for="pwd">First</label>
    
                    </div>
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5 mt-2">
                        <label></label>
                          <input type="password" class="form-control rounded-0" id="pwd">
                          <label for="pwd">Last</label>
    
                    </div>
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="" class="Health_Card_Holder_Name mb-1">Family Members/ Dependents <span class="Health_Card_number_span">*</span></label>
                    <input type="name" class="form-control rounded-0" id="email">
                </div>
    
                <div class="row mt-3">
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Mobile No <span class="Health_Card_number_span">*</span></label>
                        <input type="" class="form-control rounded-0" id="pwd">
    
                    </div>
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Email Id <span class="Health_Card_number_span">*</span></label>
                        <input type="email" class="form-control rounded-0" id="pwd">
                    </div>
                </div>
    
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="formFile" class="form-label Health_Card_Holder_Name mb-1">Aadhar Card <span class="Health_Card_number_span">*</span></label>
                    <input class="form-control rounded-0" type="file" id="formFile">
                </div>
    
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="formFile" class="form-label Health_Card_Holder_Name mb-1">Pan Card <span class="Health_Card_number_span">*</span></label>
                    <input class="form-control rounded-0" type="file" id="formFile">
                </div>
    
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="formFile" class="form-label Health_Card_Holder_Name mb-1">Insurance Card If Any </label>
                    <input class="form-control rounded-0" type="file" id="formFile">
                </div>
    
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="formFile" class="form-label Health_Card_Holder_Name mb-1">Pre existing Disease if any</label>
                    <input class="form-control rounded-0" type="text" id="">
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="" class="Health_Card_Holder_Name mb-1'">Company Name <span class="Health_Card_number_span">*</span></label>
                    <input type="name" class="form-control rounded-0" id="email">
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="" class="Health_Card_Holder_Name mb-1">Occupation <span class="Health_Card_number_span">*</span></label>
                    <input type="name" class="form-control rounded-0" id="email">
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="" class="Health_Card_Holder_Name mb-1">Buddy Name <span class="Health_Card_number_span">*</span></label>
                    <input type="name" class="form-control rounded-0" id="email">
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-2">
                    <label for="" class="Health_Card_Holder_Name mb-1">Company Address <span class="Health_Card_number_span">*</span></label>
                    <input type="text" class="form-control rounded-0" id="email">
                    <label for="" class="Health_Card_Holder_Name mb-1 mt-2">Address Lane 1</label>
                    <input type="text" class="form-control rounded-0" id="email">
                    <label for="" class="Health_Card_Holder_Name mb-1 mt-2">Address Lane 2</label>
                </div>
    
                <div class="row mt-3">
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="city" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">city</label>
                    </div>
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="state" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">State / Province / Region</label>
                    </div>
                </div>
    
                <div class="row mt-3">
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="code" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Postel Code</label>
                    </div>
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="Country" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Country</label>
                    </div>
                </div>
    
                <div class="form-group col-12 col-sm-12 col-md-10 col-lg-10 mt-3">
                    <label for="" class="Health_Card_Holder_Name mb-3">Residential Address <span class="Health_Card_number_span">*</span></label>
                    <input type="text" class="form-control rounded-0" id="email">
                    <label for="" class="Health_Card_Holder_Name mb-1 mt-2">Address Lane 1</label>
                    <input type="text" class="form-control rounded-0" id="email">
                    <label for="" class="Health_Card_Holder_Name mb-1 mt-2">Address Lane 2</label>
                </div>
    
                <div class="row mt-3">
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="city" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">city</label>
                    </div>
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="state" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">State / Province / Region</label>
                    </div>
                </div>
    
                <div class="row mt-3">
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="code" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Postel Code</label>
                    </div>
                    <div class="form-group col-6 col-sm-6 col-md-5 col-lg-5">
                        <input type="Country" class="form-control rounded-0" id="pwd">
                        <label for="pwd" class="Health_Card_Holder_Name mb-1">Country</label>
                    </div>
                </div>
    
                <div class="mt-3 mb-3 ">
                    <a type="submit" class=" btn btn-primary btn-lg  rounded-0">Submit</a>
                </div>
    
    
              </form>
        </div>

    </div>
    </section>





<?php include_once('includes/footer.php'); ?>
