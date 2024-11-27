<?php

    $d = mysqli_connect('localhost', 'root', '','task_2_website');
    if(!$d){
        die (mysqli_connect_error());
    }
// $result = mysqli_query($d, "INSERT INTO reg_for_exam (`St_Name`, `St_Group_numb`,
//  `St_Course`, `St_Faculty`, `Selected_less`, `ProfessorName`, `Data_Exam`, 
// `Time_Exam`, `Form_Exam`)
//  VALUES ('$st_fio', '$numb_group', '$st_course', '$st_faculty', '$selected_less', 
// '$ProfessorName', '$data_ex', '$time_ex', '$form_ex')");


// mysqli_close($d);

?>