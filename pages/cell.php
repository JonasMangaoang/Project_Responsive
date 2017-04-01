<?php // arrays
    include 'statements.php';
    //$value = null;
    // $value = "220 8 69 69";
    //$value = "-1 -1 -1 -1";
    //$value = NULL;
    //u_sched_table_room_value_where_id($room,$value,$id);
    // if (is_null($value)) {
    //     u_sched_table_rm211(null,2);
    // }
    // header('Location: table.php?message=update_complete');
    // die();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['save'])) {
        extract($_POST);
        if (!empty($subject)&&!empty($section)&&!empty($instructor)&&!empty($proctor)) {
            $value = "$subject $section $instructor $proctor";
            u_sched_table_room_value_where_id($room,$value,$id);
            header('Location: table.php?message=update_complete');
        }
        else {
            u_sched_table_room_value_where_id($room,null,$id);
            header('Location: table.php?message=null_value_detected_schedule_is_discarded');   
        }
    }
}
else if (!empty($_GET)) {
    if ((!empty($_GET['id']))&&(!empty($_GET['day']))&&(!empty($_GET['time']))&&(!empty($_GET['room']))) {
        extract($_GET);
    }
    else {
        header('Location: table.php?message=incomplete_parameters');
    }
}
else {
    header('Location: table.php?message=nocell');
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 <a href="table.php">link back</a>
 <?php
     echo "<div class='form'>";
     echo "<form method='post'>";
     echo "<h2>".r_time_table_slot_only($time)."</h2>";
     echo "<h3>".strtoupper($room)."</h3>";
     echo "<p>Day $day</p>";

     $row_input = r_sched_table($id);
     $row_input_col = $row_input[$room];

     if (!is_null($row_input_col)) {
         $index = explode(" ", $row_input_col);
         $subject = r_subject_table((int)$index[0]);
         $section = r_section_table((int)$index[1]);
         $instructor = r_instructor_table((int)$index[2]);
         $proctor = r_instructor_table((int)$index[3]);   
     }
     else {
         $subject = array('id' => null, 'code' => "Subject");
         $section = array('id' => null, 'section' => "Section");
         $instructor = array('id' => null, 'instructor' => "Instructor");
         $proctor = array('id' => null, 'instructor' => "Proctor");
     }

     $rows = r_sched_table_all();
     $subjects = r_subject_table_all();
     $sections = r_section_table_all();
     $instructors = r_instructor_table_all();
     $proctors = $instructors;

    echo "<br><fieldset>";
        echo "<input type='text' name='id' value='$id' hidden='true'>";
        echo "<input type='text' name='day' value='$day' hidden='true'>";
        echo "<input type='text' name='time' value='$time' hidden='true'>";
        echo "<input type='text' name='room' value='$room' hidden='true'>";
        echo "<select name='subject'>";
            echo "<option value=".$subject['id'].">".$subject['code']."</option>";
            foreach ($subjects as $key => $subject) {
                echo "<option value=".$subject['id'].">".$subject['code']."</option>";            
            }
        echo "</select><br><br>";
        echo "<select name='section'>";
            echo "<option value=".$section['id'].">".$section['section']."</option>";
            foreach ($sections as $key => $section) {
                echo "<option value=".$section['id'].">".$section['section']."</option>";            
            }
        echo "</select><br><br>";
        echo "<select name='instructor'>";
            echo "<option value=".$instructor['id'].">".$instructor['instructor']."</option>";
            foreach ($instructors as $key => $instructor) {
                echo "<option value=".$instructor['id'].">".$instructor['instructor']."</option>";            
            }
        echo "</select><br><br>";
        echo "<select name='proctor'>";
            echo "<option value=".$proctor['id'].">".$proctor['instructor']."</option>";
            foreach ($proctors as $key => $proctor) {
                echo "<option value=".$proctor['id'].">".$proctor['instructor']."</option>";            
            }
        echo "</select><br><br>";
        echo "<button type='submit' name='save' value='save'>Save</button><br><br>";
    echo "</fieldset>";
    echo "</form>";
    echo "</div>";
  ?>

 </body>
 </html>