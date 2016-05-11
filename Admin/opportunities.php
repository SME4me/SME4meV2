<?php

include '../DBConfig/dbInit.php';
$page_title = 'SME4me Expired Pool';
$page_name = 'Opportunities';

include 'header.php';
include 'sidenav.php';

?>


<!-- Page-Title -->
              <?php include '../AppConfig/insert.php'; ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <form action="" method="post" enctype="multipart/form-data" target="_self">
                              <div class="fileupload btn btn-primary waves-effect waves-light">
                                  <span>Excel File</span>
                                  <input type="file" name="upload" class="upload">
                              </div>
                              &nbsp; <button name='save' class='btn btn-default waves-effect waves-light'>Upload</button>
                                    <input type="hidden" name="formname" value="excel_upload">
                            </form>
                        </div>

                        <h4 class="page-title">Datatable</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Ubold</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li class="active">
                                Datatable
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- Page-Title -->








                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <h4 class="m-t-0 header-title"><b>Opportunities</b></h4>
                                <p class="text-muted font-13 m-b-30">
                                </p>

                                &nbsp;
                                <div>
                                  <p class="text-muted font-13 m-b-30"></p>
                                </div>
                                <!-- style='table-layout:fixed' -->
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"  cellspacing="0" width="103%">

                                    <thead>
                                        <tr>
                                            <th style='overflow:hidden; width:10px;'><input type='checkbox' name='checkbox'></th>
                                            <th>Title</th>
                                            <th style='text-align:center; width:200px;'>Eligibility</th>
                                            <th style='width:100px;'>Level Of Study</th>
                                            <th >Course</th>
                                            <th>Category</th>
                                            <th style='text-align:center'>WebLink</th>
                                            <th>Date Created</th>
                                            <th>End Date</th>
                                            <th style='width:300px;'>Action</th>
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
                                          echo            "<td>".$values['DeadLine']."</td>";
                                          echo            "<td>
                                                          <div class='col-sm'>
                                                            <div class='col-sm-3'>
                                                              <form action='editentry.php' method='post'>
                                                                <button name='edit' class='btn btn-warning waves-effect waves-light'>Edit</button>
                                                                <input type='hidden' name='id' value='".$values['Id']."'>
                                                              </form>
                                                            </div>
                                                            <div class='col-sm-4'>
                                                              <form action='opportunities.php' method='post'>
                                                                <button name='edit' class='btn btn-primary waves-effect waves-light'>Expired</button>
                                                                <input type='hidden' name='id' value='".$values['Id']."'>
                                                              </form>
                                                            </div>
                                                            <div class='col-sm-4'>
                                                              <form action='editentry.php' method='post'>
                                                                <button name='edit' class='btn btn-danger waves-effect waves-light'>Delete</button>
                                                                <input type='hidden' name='id' value='".$values['Id']."'>
                                                              </form>
                                                            </div>
                                                        </div>";
                                          echo        "</tr>";
                                          echo    "</tbody>";
                                      }
                                    }

                            ?>
                                </table>
                            </div>
                        </div>
                    </div>


<?php include 'footer.php'; ?>
