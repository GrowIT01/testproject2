<?php

$con = mysqli_connect('localhost', 'root', '', 'import_csv');

if (isset($_POST["Import"])) {

  $filename = $_FILES["file"]["tmp_name"];
  $err_data = array();
  $col_data = array();
  $count_err= 0;
  if ($_FILES["file"]["size"] > 0) {
    $file = fopen($filename, "r");
    $count = 0;
    $flag = true;
    $err = [];
    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
      if ($flag) {
        $flag = false;
        continue;
      }
      $f_name = (strlen($getData[0])>0) ? $getData[0] : $err['fname'] = 'firstname empty';
      $l_name = (strlen($getData[1])>0) ? $getData[1] : $err['lname'] = 'last name empty';
      if (count($err) == 0) {
        $sql = "INSERT into users (f_name,l_name) 
                   values ('$f_name','$l_name')";
        $result = mysqli_query($con, $sql);
      } else {
        $col_data = array($f_name, $l_name);
        array_push($err_data, $col_data);
        $count_err++;
        
      }














//      if (!isset($result)) {
//        echo "<script type=\"text/javascript\">
//							alert(\"Invalid File:Please Upload CSV File.\");
//							window.location = \"index.php\"
//						  </script>";
//      } else {
//        echo "<script type=\"text/javascript\">
//						alert(\"CSV File has been successfully Imported.\");
//						window.location = \"index.php\"
//					</script>";
//      }
    }
    echo "erroe found".$count_err;
echo "<table><thead><th>fname</th><th>lastname</th></thead><tbody>";
    for ($row = 0; $row < count($err_data); $row++) {     
      echo "<tr>";
      for ($col = 0; $col < count($col_data); $col++) {
        echo "<td>" . $err_data[$row][$col] . "</td>";
      }
       echo '</tr>';
     
    }
   
     echo "</tbody></table>";

    fclose($file);
  }
}	 

