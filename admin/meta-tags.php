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
                        <a href="dashboard.php">Dashboards</a>
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
                          <h4 class="card-title">All Meta Tags</h4>
                        </div>
                        
                    </div>
                    <div class="card-body">
                      
                        <div class="table-responsive border rounded">
                          <table id="datatable" class="table " data-toggle="data-table">
                              <thead>
                                <tr>
                                    <th>Title</th>
                                    <th> Description</th>
                                    <th>Keywords </th>
                                  
                                    <th>Viewport</th>
                                    <th > Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                    $crud = new crud();
                                    $result = $crud->selectallquery("SELECT
                                    * from meta_tags
                                    ORDER BY id DESC;");
                                    while ($item = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $item['meta_title']; ?></td>
                                    <td><?php echo $item['meta_description']; ?></td>
                                    <td><?php echo $item['meta_keywords']; ?></td>
                                  
                                    <td><?php echo $item['meta_viewport']; ?></td>

                                       
                                    
                                    <td>
                                                          
                                        <a href="edit-meta-tags.php?id=<?php echo $item['id']; ?>">
                                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M16.6643 21.9897H7.33488C5.88835 22.0796 4.46781 21.5781 3.3989 20.6011C2.4219 19.5312 1.92041 18.1107 2.01032 16.6652V7.33482C1.92041 5.88932 2.4209 4.46878 3.3979 3.39889C4.46781 2.42189 5.88835 1.92041 7.33488 2.01032H16.6643C18.1089 1.92041 19.5284 2.4209 20.5973 3.39789C21.5733 4.46878 22.0758 5.88832 21.9899 7.33482V16.6652C22.0788 18.1107 21.5783 19.5312 20.6013 20.6011C19.5314 21.5781 18.1109 22.0796 16.6643 21.9897Z" fill="currentColor"></path>
                                                <path d="M17.0545 10.3976L10.5018 16.9829C10.161 17.3146 9.7131 17.5 9.24574 17.5H6.95762C6.83105 17.5 6.71421 17.4512 6.62658 17.3634C6.53895 17.2756 6.5 17.1585 6.5 17.0317L6.55842 14.7195C6.56816 14.261 6.75315 13.8317 7.07446 13.5098L11.7189 8.8561C11.7967 8.77805 11.9331 8.77805 12.011 8.8561L13.6399 10.4785C13.747 10.5849 13.9028 10.6541 14.0683 10.6541C14.4286 10.6541 14.7109 10.3615 14.7109 10.0102C14.7109 9.83463 14.6428 9.67854 14.5357 9.56146C14.5065 9.52244 12.9554 7.97805 12.9554 7.97805C12.858 7.88049 12.858 7.71463 12.9554 7.61707L13.6078 6.95366C14.2114 6.34878 15.1851 6.34878 15.7888 6.95366L17.0545 8.22195C17.6485 8.81707 17.6485 9.79268 17.0545 10.3976Z" fill="currentColor"></path>
                                            </svg>
                                    
                                        </a>

                                   
                                                        
                                                                          
                                    </td>
                                </tr>

                                <?php
                                                                }
                                                                ?>  
                              </tbody>
                            
                          </table>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- container-fluid -->
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
