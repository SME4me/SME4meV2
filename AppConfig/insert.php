<?php

      if (isset($_POST['formname'])) {
        # code...
          switch ($_POST['formname']) {
            case 'excel_upload':
              # code...
                if(isset($_POST['save']) && $_FILES['upload']['size'] > 0){

                  if($_FILES['upload']['size'] > 0){

                      $filename = $_FILES['upload']['tmp_name'];
                      $file = fopen($filename, 'r');
                      $row = 1;
                      while(($update = fgetcsv($file, 10000, ",") !== FALSE)){
                          $title = $update[0];
                          $purpose = $update[1];
                          $elignation = $update[2];
                          $levelofstudy = $update[3];
                          $oppvalue = $update[4];
                          $valindols = $update[5];
                          $course = $update[6];
                          $countryofstudy = $update[7];
                          $deadline = $update[8];
                          $expdate = $update[9];
                          $weblink = $update[10];
                          $category = $update[11];
                          $datecreated = date('d/m/y');
                          $isexpired = 0;

                          $sql = "INSERT INTO opportunities (Title, Purpose, EligibleNationalities,
                                                              LevelOfStudy, OpportunityValue, ValueInDollars,
                                                              Course, CountryOfStudy, DeadLine,
                                                              WebLink, Category, DateCreated,
                                                              ExpiredDate, IsExpired)
                                  VALUES (:title, :purpose, :elignation,
                                          :levelofstudy, :oppvalue, :valindols,
                                          :course, :countryofstudy, :deadline,
                                          :weblink, :category, :datecreated,
                                           :isexpd)";
                          $values = array(':title' => $title, ':purpose' => $purpose, ':elignation' => $elignation,
                                          ':levelofstudy' => $levelofstudy, ':oppvalue' => $oppvalue, ':valindols' => $valindols,
                                          ':course' => $course, ':countryofstudy' => $countryofstudy, ':deadline' => $deadline,
                                          ':weblink' => $weblink, ':category' => $category, ':datecreated' => $datecreated,
                                          ':expdate' => $expdate, ':isexpd' => $isexpired);
                          $data = $sme4me->select_query($sql, $values);
                      }
                      if($row == 1){
                        $row++;
                        continue;
                      }
                      $num = count($filesop);
                      fclose($file);

                      if($data){
                          echo "<div class='alert alert-success  alert-dismissible text-center'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                    <strong>Well done!</strong> Opportunities upload was successful.
                                </div>";
                      }
                      else{
                          echo "<div class='alert alert-danger alert-dismissible text-center'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                    <strong>Oh Snap!</strong> Opportunities upload was successful.
                                </div>";
                      }
                  }
                }
                elseif(isset($_POST['save']) && !$_FILES['upload']['size'])
                {
                    echo "<div class='alert alert-danger  alert-dismissible col-md text-center'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                              <strong>Oh Snap!</strong> Select a .csv file to upload!
                          </div>";
                }
              break;

            default:
              # code...
              break;
          }
      }


?>
