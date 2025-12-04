<?php
include 'session.php';
include 'include/header.php';
include 'include/menu.php';
include_once('dbOperation/crude.php');


?>

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0">Dashboard</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Dashboards</a>
                      </li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Add Services</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form  action="dbOperation/manage-services.php" method="POST" enctype="multipart/form-data">
                            
                                    <input type="hidden" name="addservice"  />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1"> Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputText1"  placeholder="Enter Name">
                                            </div>
                                
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1"> Price</label>
                                                <input type="text" name="price" class="form-control" id="exampleInputText1"  placeholder="Enter Price">
                                            </div>
                                
                                        </div>
                                       
                                  
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label class="form-label " for="exampleInputPassword3"> Payment Mode</label>
                                                
                                                <input type="text" name="payment_mode"  class="form-control" id="exampleInputEmail3" placeholder="Payment Mode">
                                            </div>
                                
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Type</label>
                                                
                                                <select name="type" id="SelectType" class="form-select mb-3 shadow-none">
                                                  
                                                <option >Select Type</option>
                                                        <option value="pest-control">Pest Control</option>
                                                        <option value="home-cleaning">Home Cleaning</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="pestControl" style="display:none">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Pest Control</label>
                                                
                                                <select name="pest_control"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="" >Select Pest Control</option>
                                                        <option value="cockroach-control">Cockroach Control</option>
                                                        <option value="mosquito-control">Mosquito Control</option>  
                                                        <option value="rodent-control">Rodent Control</option>
                                                        <option value="termite-control">Termite Control</option>
                                                        <option value="wood-borer-control">Wood Borer Control</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="homeCleaning" style="display:none">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Home Cleaning</label>
                                                
                                                <select name="home_cleaning"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="">Select Home Cleaning</option>
                                                  <option value="full-home-cleaning" selected=""> Full Home Cleaning</option>
                                                  <option value="bathroom-cleaning"> Bathroom Cleaning</option>
                                                  <option value="kitchen-cleaning"> Kitchen Cleaning</option>
                                                  <option value="sofa-cleaning"> Sofa Cleaning</option>
                                                  <option value="combo-services"> Combo Services</option>
                                                  <option value="chair-and-carpet-cleaning"> Chair and Carpet Cleaning</option>
                                                  <option value="steam-sanitzation-services"> Steam Sanitization Services</option>
                                                  <option value="car-cleaning-services"> Car Cleaning Services</option>
                                                  <option value="fridge-cleaning"> Fridge Cleaning</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="pestControlBHK" style="display:none">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select BHK</label>
                                                
                                                <select name="bhk"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="">Select BHK</option>
                                                        <option value="1-bhk">1 BHK</option>
                                                        <option value="2-bhk">2 BHK</option>  
                                                        <option value="3-bhk">3 BHK</option>
                                                        <option value="4-bhk">4 BHK</option>  
                                                        <option value="5-bhk">5 BHK</option>
                                                        <option value="6-bhk">6 BHK</option>  
                                                        <option value="7-bhk">7 BHK</option>
                                                        <option value="8-bhk">8 BHK</option>  
                                                        <option value="9-bhk">9 BHK</option>
                                                        <option value="10-bhk">10 BHK</option>  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4"  id="homeCleaningBHK" style="display:none">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select BHK</label>
                                                
                                                <select name="bhk"  class="form-select mb-3 shadow-none">
                                                  
                                                
                                                <option value="">Select BHKs</option>
                                                  <option value="1RK(upto-400-sqft)">1RK (upto 400 sq ft)</option>
                                                  <option value="1BHK(401-600-sqft)">1BHK (401 - 600 sq ft)</option>
                                                  <option value="2BHK-(601–1000-sqft)">2BHK (601 – 1000 sq ft)</option>
                                                  <option value="3BHK-(1001–1500-sqft)">3BHK (1001 – 1500 sq ft)</option>
                                                  <option value="4-BHK-Regular-(1501-2100-Sqft)">4 BHK Regular (1501 -2100 Sqft)</option>
                                                  <option value="4-BHK-Lar-(2101-2500-Sqft)">4 BHK Lar (2101 - 2500 Sqft)</option>
                                                  <option value="5BHK-(2500-3000-sqft)">5BHK (2500 - 3000 sq ft)</option>
                                                  <option value="less-than-1200-Sqft">less than 1200 Sq ft</option>
                                                  <option value="1200-2000-Sqft">1200-2000 Sq ft</option>
                                                  <option value="2001-3000-Sqft">2001 -3000 Sq ft</option>
                                                  <option value="3001-4000-Sqft">3001 - 4000 Sq ft</option>
                                                  <option value="4001-5000-Sqft">4001-5000 Sq ft</option>
                                                  <option value="5001-6000-Sqft">5001- 6000 Sq ft</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="pestControlService" style="display:none">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Service</label>
                                                
                                                <select name="service_type"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="" >Select Service</option>
                                                        <option value="single-service">Single Service</option>
                                                        <option value="3-services-1-year">3 Services 1 Year </option>
                                                        <option value="6-services-2-year">6 Services 2 Year </option>  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="homeCleaningService" style="display:none">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Service</label>
                                                
                                                <select name="service_type"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="" >Select Service</option>
                                                        <option value="single-service">Single Service</option>
                                                        <option value="3-services-1-year-contract">3 Services 1 Year Contract</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputPassword3"> Last Booking Date</label>
                                                
                                                <input type="datetime-local" name="last_booking_date"  class="form-control" id="exampleInputEmail3" placeholder="Payment Mode">
                                            </div>
                                
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputEmail3">Description</label>
                                                <textarea name="description" class="form-control" id="DescrptionSumeernote"></textarea>
                                            </div>
                                        </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary mt-new-10">Submit</button>
                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          
          
        </div>
        <!-- End Page-content -->

        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                © Civic Pest Control.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                  Design & Develop by 3SP Techmind
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end main content-->
      
      <?php
include 'include/footer.php';
?>
