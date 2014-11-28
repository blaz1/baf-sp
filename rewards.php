<?php
// getCityState.php 
//  Gets the form value from the "zip" widget, looks up the 
//  city and state for that zip code, and prints it for the
//  form
      
  $rewards = array ("1" => "cokolada",
                    "2" => "kava",
                    "3" => "sok",
                    "4" => "10e",
                    "5" => "20e",
                    "6" => "terme Catez"
                    );

echo json_encode($rewards);
  //$zip = $_GET["reward"];
  //echo "janez";
  /*if (array_key_exists($zip, $cityState))
    print $cityState[$zip];
  else
    print " , ";*/
?>