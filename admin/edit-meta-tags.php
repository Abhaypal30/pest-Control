<?php
include 'session.php';
include 'include/header.php';
include 'include/menu.php';
include_once('dbOperation/crude.php');

if (isset($_GET['id']))
{
    $crud = new crud();
    $data = $crud->selectbyid('meta_tags', $_GET['id']);
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
                      <li class="breadcrumb-item active">Meta Tags</li>
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
                                <h4 class="card-title">Edit Meta Tags</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="dbOperation/manage-services.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                                <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Meta Title</label>
                                                <input type="text" name="meta_title" class="form-control" id="exampleInputText1"   value="<?php echo $data['meta_title']; ?>">
                                            </div>
                                
                                        </div>
                                        <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label class="form-label " for="exampleInputPassword3"> Meta Keywords</label>
                                                    
                                                    <input type="text" name="meta_keywords"  class="form-control" id="exampleInputEmail3" placeholder="Keywords" value="<?php echo $data['meta_keywords']; ?>">
                                                </div>
                                    
                                        </div>
                                        <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label class="form-label " for="exampleInputPassword3"> Meta Author</label>
                                                    
                                                    <input type="text" name="meta_author"  class="form-control" id="exampleInputEmail3" placeholder="Author" value="<?php echo $data['meta_author']; ?>">
                                                </div>
                                    
                                        </div>
                                        <div class="col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label mt-new-10">Meta Viewport</label>
                                                    
                                                        <input type="text" name="meta_viewport"  class="form-control" id="exampleInputEmail3" placeholder="Viewport" value="<?php echo $data['meta_viewport']; ?>">
                                                    </div>
                                        </div>
                                        <div class="col-md-4"  >
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputphone">Meta Charset</label>
                                                
                                                <select name="meta_charset"  class="form-select mb-3 shadow-none">
                                                  
                                                <option value="">Select Meta Charset</option>
                                                <?php
    $charsets = array(
        "UTF-8",
        "ISO-8859-1",
        "ISO-8859-2",
        "ISO-8859-3",
        "ISO-8859-4",
        "ISO-8859-5",
        "ISO-8859-6",
        "ISO-8859-7",
        "ISO-8859-8",
        "ISO-8859-9",
        "ISO-8859-10",
        "ISO-8859-11",
        "ISO-8859-13",
        "ISO-8859-14",
        "ISO-8859-15",
        "windows-1250",
        "windows-1251",
        "windows-1252",
        "windows-1253",
        "windows-1254",
        "windows-1255",
        "windows-1256",
        "windows-1257",
        "windows-1258"
        // Add more options as needed
    );

    // Check if $data['charset'] is set to prevent "undefined" value
    $selected_charset = isset($data['meta_charset']) ? $data['meta_charset'] : "";

    foreach ($charsets as $charset) {
        echo '<option value="' . $charset . '"';
        if ($selected_charset == $charset) {
            echo ' selected';
        }
        echo '>' . $charset . '</option>';
    }
    ?>
                                                </select>
                                            </div>
                                        </div>
                                     
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label mt-new-10" for="exampleInputText1"> Meta Description</label>
                                                <input type="text" name="meta_description" class="form-control" value="<?php echo $data['meta_description']; ?>"id="exampleInputText1"  placeholder="Enter Description">
                                            </div>
                                
                                        </div>
                                      
                                      
                                        
                                      
                                       
                                       
                                      
                                   
                                  
                                        
                                
                                  
                                  
                                 
                             
                                </div>
                                <button type="submit" name="EditMetaTags" class=" mt-new-10 btn btn-primary">Submit</button>
                              
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
