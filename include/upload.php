<?php

  if(isset($_POST['submit'])){
      switch ($_POST['formname']) {
        case 'excel_upload':
          # code...
            if(isset($_POST['submit'])){
              $file = $_FILES['upload']['tmp_name'];
              $handle = fopen($file, 'r');
              // $c = 0
              while(($fileop = fgetcsv($handle, 1000,",")) !== false){
                $title = $fileop[0];
                $purpose = $fileop[1];
                $eligibility = $fileop[2];
                $level = $fileop[3];
                $oppvalue = $fileop[4];
                $valueindolls = $fileop[5];
                $course = $fileop[6];
                $countryofstudy = $fileop[7];
                $deadline = $fileop[8];
                $weblink = $fileop[9];
                $category = $fileop[10];
                $datecreated = $fileop[11];
                $expirydate = $fileop[12];
                $isexpired = $fileop[13];

                $sql = "INSERT INTO opportunities (Title, Purpose, EligibleNationalities, LevelOfStudy, ValueInDollars, OppotunityValue, Course, CountryOfStudy, DeadLine, WebLink, Category, DateCreated, ExpiryDate, IsExpired)
                        VALUES (:title, :purpose, :eligibility, :level, :oppvalue, :valindols, :course, :countryofstudy, :deadline, :weblink, :category, :datecreated, :expdate, :isexped)";
                $values = array(
                                  ':title' => $title,
                                  ':purpose' => $purpose,
                                  ':eligibility' => $eligibility,
                                  ':level' => $level,
                                  ':oppvalue' => $oppvalue,
                                  ':valindols' => $valueindolls,
                                  ':course' => $course,
                                  ':countryofstudy' => $countryofstudy,
                                  ':deadline' => $deadline,
                                  ':weblink' => $weblink,
                                  ':category' => $category,
                                  ':datecreated' => $datecreated,
                                  ':expdate' => $expirydate,
                                  ':isexped' => $isexpired );
                $data = $sme4me->insert_query($sql, $values);
                if ($data) {
                  # code...
                  echo "successfully imported";
                }
              }
            }
          break;

        default:
          # code...
          break;
      }
}
?>
