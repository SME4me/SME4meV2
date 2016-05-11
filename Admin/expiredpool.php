<?php
$page_title = 'SME4me Expired Pool';
$page_name = 'Opportunities';

include 'header.php';
include '../DBConfig/dbInit.php';

?>
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Posted Opportunities</h4>
                    <p class="text-muted page-title-alt">Welcome to admin panel !</p>
                </div>
            </div>


            <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <h4 class="m-t-0 header-title"><b>Active Opportunities</b></h4>
                                <p class="text-muted font-13 m-b-30">

                                </p>
                                <div class="">
                                  <form action="" method="post" enctype="multipart/form-data" target="_self">
                                    <?php include '../include/upload.php'; ?>
                                    <div class="fileupload btn btn-primary waves-effect waves-light">
                                        <span>Upload</span>
                                        <input type="file" name="upload" class="upload">
                                    </div>

                                    &nbsp; <button name='submit'class='btn btn-success waves-effect waves-light'>Save</button>
                                          <input type="hidden" name="formname" value="excel_upload">
                                  </form>
                                  <div style='float:right;' class=''>
                                    <button name='edit' class='btn btn-primary waves-effect waves-light'>Expired</button>&nbsp;<button name='edit' class='btn btn-danger waves-effect waves-light'>Delete</button>
                                  </div>
                                </div>

                                &nbsp;
                                <div>
                                  <p class="text-muted font-13 m-b-30"></p>
                                </div>
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style='table-layout:fixed' cellspacing="0" width="100%">


                                    <thead>
                                        <tr>
                                            <th style='overflow:hidden; width:10px;'><input type='checkbox' name='checkbox'></th>
                                            <th>Title</th>
                                            <th>Eligibility</th>
                                            <th style='width:50px;'>Level Of Study</th>
                                            <th>Course</th>
                                            <th>Category</th>
                                            <th>WebLink</th>
                                            <th>Date Created</th>
                                            <th>Expiry Date</th>
                                            <th style='width:200px;'>Action</th>
                                        </tr>
                                    </thead>
                              <?php
                                    $sql = "SELECT * FROM opportunities WHERE IsExpired = 0";
                                    $data = $sme4me->select($sql);
                                    if ($data) {
                                      # code...
                                      foreach ($data as $values) {
                                        # code...
                                          echo    "<tbody>";
                                          echo        "<tr>";
                                          echo            "<td style='width:10px;'><input type='checkbox' name='checkbox'></td>";
                                          echo            "<td>".$values['Title']."</td>";
                                          echo            "<td>".$values['EligibleNationalities']."</td>";
                                          echo            "<td>".$values['LevelOfStudy']."</td>";
                                          echo            "<td>".$values['Course']."</td>";
                                          echo            "<td>".$values['Category']."</td>";
                                          echo            "<td style='word-wrap:break-word'>".$values['WebLink']."</td>";
                                          echo            "<td>".$values['DateCreated']."</td>";
                                          echo            "<td>".$values['ExpiryDate']."</td>";
                                          echo            "<td><form action='opportunities.php' method='post'>
                                                            <button name='edit' class='btn btn-warning waves-effect waves-light'>Edit</button>
                                                            &nbsp;<button name='edit' class='btn btn-primary waves-effect waves-light'>Expired</button>
                                                            &nbsp;<button name='edit' class='btn btn-danger waves-effect waves-light'>Delete</button>
                                                            <input type='hidden' name='id' value='".$values['Id']."'>
                                                            </form>";
                                          echo        "</tr>";
                                          echo    "</tbody>";
                                      }
                                    }

                            ?>
                                </table>
                            </div>
                        </div>
                    </div>

        </div> <!-- container -->

    </div> <!-- content -->
<?php
include 'footer.php';
?>
