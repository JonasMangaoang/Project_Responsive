<?php 
    include 'statements.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['save'])) {
            extract($_POST);
            if (!empty($subject)&&!empty($section)&&!empty($instructor)&&!empty($proctor)) {
                $value = "$subject $section $instructor $proctor";
                u_sched_table_room_value_where_id($room,$value,$id);
                header('Location: admin.php?message=update_complete');
            }
            else {
                u_sched_table_room_value_where_id($room,null,$id);
                header('Location: admin.php?message=null_value_detected_schedule_is_discarded');   
            }
        }
    }
    else if (isset($_GET['delete'])) {
      if ($_GET['delete']=='y') {
      u_sched_table_room_value_where_id($_GET['room'],null,$_GET['id']);
      header('Location: admin.php?message=delete_complete');
      }
    }
    else if (!empty($_GET)) {
        if ((!empty($_GET['id']))&&(!empty($_GET['day']))&&(!empty($_GET['time']))&&(!empty($_GET['room']))) {
            extract($_GET);
        }
        else {
            header('Location: admin.php?message=incomplete_parameters');
        }
    }
    else {
        header('Location: admin.php?message=nocell');
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="http://localhost/Project_Responsive/images/faith.png">
  <link rel="stylesheet" type="text/css" href="http://localhost/Project_Responsive/cssfiles/edit.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
    <center>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      </center>
      <p class="navbar-brand">Exam Schedule Portal</p>
    </div>
    <div align="center" class="collapse navbar-collapse" id="myNavbar">
      <form action="http://localhost/Project_Responsive/include/logout.php" method="POST">
        <ul class="nav navbar-nav navbar-right">
          <li><input id="log" type="submit" name="logout" value="Logout"></li>
          <!-- <li><a href="#">WHERE</a></li> -->
        </ul>
      </form>
    </div>
  </div>
<!-- </nav> -->

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
 <?php
     echo "<div class='form'>";
     echo "<form method='post'>";
     echo "<br><fieldset>";
     echo "<h2 style='color:white;'>".r_time_table_slot_only($time)."</h2>";
     echo "<h3 style='color:white;'>".strtoupper($room)."</h3>";
     echo "<p style='color:white;'>Day $day</p>";

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
        echo "<input type='submit' name='save' value='Save'><br>";
        echo "<a href=\"admin.php\">Cancel</a>";
        echo "<span style='color:white;'>||</span>";
        echo "<a href=\"edit.php?delete=y&room=$room&id=$id\">Delete</a><br>";
      echo "</fieldset>";
      echo "</form>";
      echo "</div>";
  ?>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
<p id="school">First Asia Institute of Technology and Humanities</p>
<hr>
  <p id="power">Powered by © BSCPE 2017</p> 
</footer>


</body>
</html>