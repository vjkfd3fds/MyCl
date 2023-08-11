<?php 


    $statesFile = "../php-project/details/states.txt";
    $states = file($statesFile, FILE_IGNORE_NEW_LINES);
  

    $optionsHtml = "";
    foreach ($states as $state) {
        $optionsHtml .= "<option value='$state'>$state</option>\n";
    }
    
   
    
?>