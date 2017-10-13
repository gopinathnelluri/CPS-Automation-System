<?php

include "jsonFormat.php";
include "Helpers/electiveDepartment.php";

if( isset($_POST["timestamp"]) && isset($_POST["category"]) && isset($_POST["sid"]) ){
  //echo json_encode(electiveSub($_POST["term"],$_POST["dept"],$_POST["min"],$_POST["max"]), JSON_PRETTY_PRINT);
  echo json_encode(electiveDepartmentWithSid($_POST["category"],$_POST["sid"]), JSON_PRETTY_PRINT);
}else if( isset($_POST["timestamp"]) && isset($_POST["category"]) ){
  //echo json_encode(electiveSub($_POST["term"],$_POST["dept"],$_POST["min"],$_POST["max"]), JSON_PRETTY_PRINT);
  echo json_encode(electiveDepartment($_POST["category"]), JSON_PRETTY_PRINT);
}

?>
