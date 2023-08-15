

<?php 
    #States
    $statesFile = "../php-project/details/states.txt";
    $states = file($statesFile, FILE_IGNORE_NEW_LINES);
  

    $optionsHtml = "";
    foreach ($states as $state) {
        $optionsHtml .= "<option value='$state'>$state</option>\n";
    }

    #districts
    $districtFile = "../php-project/details/district.txt";
    $districts = file($districtFile, FILE_IGNORE_NEW_LINES);

    $optionsHtmls = "";
    foreach ($districts as $district) {
        $optionsHtmls .= "<option value='$district'>$district</option>\n";
    }

    #Courses
    $courseFile = "../php-project/details/courses.txt";
    $courses = file($courseFile, FILE_IGNORE_NEW_LINES);

    $optionsCourses = "";
    foreach ($courses as $course) {
        $optionsCourses .= "<option value='$course'>$course</option>";
    }
   
    
?>