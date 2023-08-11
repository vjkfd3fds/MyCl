

<?php 

    $statesFile = "../php-project/details/states.txt";
    $states = file($statesFile, FILE_IGNORE_NEW_LINES);
  

    $optionsHtml = "";
    foreach ($states as $state) {
        $optionsHtml .= "<option value='$state'>$state</option>\n";
    }

    
    $districtFile = "../php-project/details/district.txt";
    $districts = file($districtFile, FILE_IGNORE_NEW_LINES);

    $optionsHtmls = "";
    foreach ($districts as $district) {
        $optionsHtmls .= "<option value='$district'>$district</option>\n";
    }
    
   
    
?>