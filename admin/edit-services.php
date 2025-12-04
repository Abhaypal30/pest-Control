<?php
include 'session.php';
include 'include/header.php';
include 'include/menu.php';
include_once('dbOperation/crude.php');

if (isset($_GET['id']))
{
    $crud = new crud();
    $data = $crud->selectbyid('services', $_GET['id']);
}else
{
    
}

if (!isset($_SESSION['login_email']) ) {
    echo'<script>window.location.href="./index.php";</script>';
    exit();
  }
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
                  <h4 class="mb-sm-0">Service</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Master</a>
                      </li>
                      <li class="breadcrumb-item active">Service</li>
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
                                <h4 class="card-title">Edit Service</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="dbOperation/manage-services.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                                <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputText1"   value="<?php echo $data['name']; ?>">
                                            </div>
                                
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1"> Price</label>
                                                <input type="text" name="price" class="form-control" value="<?php echo $data['price']; ?>"id="exampleInputText1"  placeholder="Enter Price">
                                            </div>
                                
                                        </div>
                                        <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label class="form-label " for="exampleInputPassword3"> Payment Mode</label>
                                                    
                                                    <input type="text" name="payment_mode"  class="form-control" id="exampleInputEmail3" placeholder="Payment Mode" value="<?php echo $data['payment_mode']; ?>">
                                                </div>
                                    
                                        </div>
                                        <div class="col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Type</label>
                                                    
                                                        <select  name="type" id="SelectType"class="form-select " data-trigger>
                                                        <option value=""> Select Type</option>
                                                        <option value="pest-control" 
                                                        <?php 
                                                        if ($data['type'] == "pest-control") { 
                                                            echo 'selected'; } ?>>Pest Control</option>

                                                        <option value="home-cleaning" <?php if ($data['type'] == "home-cleaning") { echo 'selected'; } ?>>Home Cleaning</option>
                                                    
                                                            
                                                        </select>
                                                    </div>
                                        </div>
                                        <?php
                                        if ($data['type'] == "pest-control") { 
                                        ?>
                                        <div class="col-md-4" id="pestControl">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Pest Control</label>
                                                
                                                <select name="pest_control"  class="form-select mb-3 shadow-none">
                                                  
                                                <option >Select Pest Control</option>
                                                        <option value="cockroach-control"<?php 
                                                        if ($data['pest_control'] == "cockroach-control") { 
                                                            echo 'selected'; } ?>>Cockroach Control</option>
                                                        <option value="mosquito-control" <?php 
                                                        if ($data['pest_control'] == "mosquito-control") { 
                                                            echo 'selected'; } ?>>Mosquito Control</option>  
                                                        <option value="rodent-control"<?php 
                                                        if ($data['pest_control'] == "rodent-control") { 
                                                            echo 'selected'; } ?>>Rodent Control</option>
                                                        <option value="termite-control"<?php 
                                                        if ($data['pest_control'] == "termite-control") { 
                                                            echo 'selected'; } ?>>Termite Control</option>
                                                        <option value="wood-borer-control"<?php 
                                                        if ($data['pest_control'] == "wood-borer-control") { 
                                                            echo 'selected'; } ?>>Wood Borer Control</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="pestControlBHK" >
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select BHK</label>
                                                
                                                <select name="bhk"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="">Select BHK</option>
                                                        <option value="1-bhk" <?php if ($data['bhk'] == "1-bhk") { echo 'selected'; } ?>>1 BHK</option>
                                                        <option value="2-bhk" <?php if ($data['bhk'] == "2-bhk") { echo 'selected'; } ?>>2 BHK</option>  
                                                        <option value="3-bhk" <?php if ($data['bhk'] == "3-bhk") { echo 'selected'; } ?>>3 BHK</option>
                                                        <option value="4-bhk" <?php if ($data['bhk'] == "4-bhk") { echo 'selected'; } ?>>4 BHK</option>  
                                                        <option value="5-bhk" <?php if ($data['bhk'] == "5-bhk") { echo 'selected'; } ?>>5 BHK</option>
                                                        <option value="6-bhk" <?php if ($data['bhk'] == "6-bhk") { echo 'selected'; } ?>>6 BHK</option>  
                                                        <option value="7-bhk" <?php if ($data['bhk'] == "7-bhk") { echo 'selected'; } ?>>7 BHK</option>
                                                        <option value="8-bhk" <?php if ($data['bhk'] == "8-bhk") { echo 'selected'; } ?>>8 BHK</option>  
                                                        <option value="9-bhk" <?php if ($data['bhk'] == "9-bhk") { echo 'selected'; } ?>>9 BHK</option>
                                                        <option value="10-bhk" <?php if ($data['bhk'] == "10-bhk") { echo 'selected'; } ?>>10 BHK</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="pestControlService" >
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Service</label>
                                                
                                                <select name="service_type"  class="form-select mb-3 shadow-none">
                                                  
                                                <option >Select Service</option>
                                                        <option value="single-service"<?php if ($data['service_type'] == "single-service") { echo 'selected'; } ?>>Single Service</option>
                                                        <option value="3-services-1-year" <?php if ($data['service_type'] == "3-services-1-year") { echo 'selected'; } ?>>3 Services 1 Year </option>
                                                        <option value="6-services-2-year" <?php if ($data['service_type'] == "6-services-2-year") { echo 'selected'; } ?>>6 Services 2 Year </option>  
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        }
                                        ?>
                                        
                                        <?php
                                        if ($data['type'] == "home-cleaning"){
                                        ?>
                                        <div class="col-md-4" id="homeCleaning" >
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Home Cleaning</label>
                                                
                                                <select name="home_cleaning"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="">Select Home Cleaning</option>
                                                  <option value="full-home-cleaning" <?php if ($data['home_cleaning'] == "full-home-cleaning") { echo 'selected'; } ?> selected=""> Full Home Cleaning</option>
                                                  <option value="bathroom-cleaning" <?php if ($data['home_cleaning'] == "bathroom-cleaning") { echo 'selected'; } ?>> Bathroom Cleaning</option>
                                                  <option value="kitchen-cleaning" <?php if ($data['home_cleaning'] == "kitchen-cleaning") { echo 'selected'; } ?>> Kitchen Cleaning</option>
                                                  <option value="sofa-cleaning" <?php if ($data['home_cleaning'] == "sofa-cleaning") { echo 'selected'; } ?>> Sofa Cleaning</option>
                                                  <option value="combo-services" <?php if ($data['home_cleaning'] == "combo-services") { echo 'selected'; } ?>> Combo Services</option>
                                                  <option value="chair-and-carpet-cleaning" <?php if ($data['home_cleaning'] == "chair-and-carpet-cleaning") { echo 'selected'; } ?>> Chair and Carpet Cleaning</option>
                                                  <option value="steam-sanitzation-services" <?php if ($data['home_cleaning'] == "steam-sanitzation-services") { echo 'selected'; } ?>> Steam Sanitization Services</option>
                                                  <option value="car-cleaning-services" <?php if ($data['home_cleaning'] == "car-cleaning-services") { echo 'selected'; } ?>> Car Cleaning Services</option>
                                                  <option value="fridge-cleaning" <?php if ($data['home_cleaning'] == "fridge-cleaning") { echo 'selected'; } ?>> Fridge Cleaning</option>
                                                </select>
                                               
                                            </div>
                                        </div>

                                        <div class="col-md-4"  id="homeCleaningBHK" >
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select BHK</label>
                                                
                                                <select name="bhk"  class="form-select mb-3 shadow-none">
                                                  
                                                
                                                <option value="">Select BHKs</option>
                                                  <option value="1RK(upto-400-sqft)" <?php if ($data['bhk'] == "1RK(upto-400-sqft)") { echo 'selected'; } ?>>1RK (upto 400 sq ft)</option>
                                                  <option value="1BHK(401-600-sqft)" <?php if ($data['bhk'] == "1BHK(401-600-sqft)") { echo 'selected'; } ?>>1BHK (401 - 600 sq ft)</option>
                                                  <option value="2BHK-(601–1000-sqft)" <?php if ($data['bhk'] == "2BHK-(601–1000-sqft)") { echo 'selected'; } ?>>2BHK (601 – 1000 sq ft)</option>
                                                  <option value="3BHK-(1001–1500-sqft)" <?php if ($data['bhk'] == "3BHK-(1001–1500-sqft)") { echo 'selected'; } ?>>3BHK (1001 – 1500 sq ft)</option>
                                                  <option value="4-BHK-Regular-(1501-2100-Sqft)" <?php if ($data['bhk'] == "4-BHK-Regular-(1501-2100-Sqft)") { echo 'selected'; } ?>>4 BHK Regular (1501 -2100 Sqft)</option>
                                                  <option value="4-BHK-Lar-(2101-2500-Sqft)" <?php if ($data['bhk'] == "4-BHK-Lar-(2101-2500-Sqft)") { echo 'selected'; } ?>>4 BHK Lar (2101 - 2500 Sqft)</option>
                                                  <option value="5BHK-(2500-3000-sqft)" <?php if ($data['bhk'] == "5BHK-(2500-3000-sqft)") { echo 'selected'; } ?>>5BHK (2500 - 3000 sq ft)</option>
                                                  <option value="less-than-1200-Sqft" <?php if ($data['bhk'] == "less-than-1200-Sqft") { echo 'selected'; } ?>>less than 1200 Sq ft</option>
                                                  <option value="1200-2000 Sq ft" <?php if ($data['bhk'] == "1200-2000 Sq ft") { echo 'selected'; } ?>>1200-2000 Sq ft</option>
                                                  <option value="2001-3000-Sqft" <?php if ($data['bhk'] == "2001-3000-Sqft") { echo 'selected'; } ?>>2001 -3000 Sq ft</option>
                                                  <option value="3001-4000-Sqft" <?php if ($data['bhk'] == "3001-4000-Sqft") { echo 'selected'; } ?>>3001 - 4000 Sq ft</option>
                                                  <option value="4001-5000-Sqft" <?php if ($data['bhk'] == "4001-5000-Sqft") { echo 'selected'; } ?>>4001-5000 Sq ft</option>
                                                  <option value="5001-6000-Sqft" <?php if ($data['bhk'] == "5001-6000-Sqft") { echo 'selected'; } ?>>5001- 6000 Sq ft</option>
                                                </select>
                                               
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="homeCleaningService" >
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Select Service</label>
                                                
                                                <select name="service_type"  class="form-select mb-3 shadow-none">
                                                  
                                                <option >Select Service</option>
                                                        <option value="single-service" <?php if ($data['service_type'] == "single-service") { echo 'selected'; } ?>>Single Service</option>
                                                        <option value="3-services-1-year-contract" <?php if ($data['service_type'] == "3-services-1-year-contract") { echo 'selected'; } ?>>3 Services 1 Year Contract</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        }
                                        ?>
                                       
                                       
                                      
                                      
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputPassword3"> Last Booking Date</label>
                                                
                                                <input type="datetime-local" name="last_booking_date"   value="<?php echo $data['last_booking_date']; ?>"class="form-control" id="exampleInputEmail3" >
                                            </div>
                                
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputEmail3">Description</label>
                                               
                                                <!-- <input type="hidden" name="description_html" id="descriptionHtmlInput"> -->
                                                <!-- Summernote textarea -->
                                                <textarea name="description" class="form-control" id="DescrptionSumeernote"><?php echo $data['description']; ?></textarea>
     
                                            </div>
                                        </div>
                                  
                                        
                                
                                  
                                  
                                 
                             
                                </div>
                                <button type="submit" name="EditServices" class="btn btn-primary">Submit</button>
                              
                            </form>
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
