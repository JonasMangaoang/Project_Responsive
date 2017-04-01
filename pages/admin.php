<?php // arrays
  include 'statements.php';
  session_start();
  $_SESSION['PASS1'] = '0';
  $_SESSION['PASS2'] = '0';
  if(!isset($_SESSION['username'])){
    die();
  }
  $rooms = array("210", "211", "212", "213", "214", 
   "215", "216", "301", "302", "303", 
   "304", "305", "306", "307", "308", 
   "309", "310", "311", "312", "313", 
   "314", "315", "316", "317", "318", 
   "401", "406", "409", "410", 
   "cw1", "cw2", "cw3");
  $time_slot = array("07:30AM - 09:00 AM"
    , "09:00AM - 10:30 AM"
    , "10:30AM - 12:00 AM"
    , "12:00NN - 01:30 PM"
    , "01:30PM - 03:00 PM"
    , "03:00PM - 04:30 PM"
    , "04:30PM - 06:00 PM"
    , "06:00PM - 07:30 PM"
    , "07:30PM - 09:00 PM");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="http://localhost/Project_Responsive/images/faith.png">
  <link rel="stylesheet" type="text/css" href="http://localhost/Project_Responsive/cssfiles/adminpage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
        .available {
            background-color: #f2f2f2;
        }
        table {
            table-layout: fixed;
            height: 0px;
            width: 0px;
        }
        th, td{
            width: 130px;
            white-space: pre;
        }
        th {
            font-size: 14px;
        }
        td {
            font-size: 12px;
            width: inherit;
            height: 90px;
        }
        th .rooms_list {
            width: inherit;
            height: 30px;
        }
        .sched_list {
            width: inherit;
            height: 90px;
            line-height: 1.5;
        }
        @media print {
            .noprint{
                display: none;
            }
            .print{
                line-height: 1.2;
                margin-bottom: 1000px;
            }
            table, th , td  {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
                vertical-align: middle;
                word-wrap: break-word;
            }
        }
        @media screen {
            .print{
                display: none;
            }
            table, th , td  {
                border: 1px solid grey;
                text-align: center;
                background-color: white;
            }
            .td_link {
                overflow: hidden;
                color: black;
                display:block;
                text-decoration:none;
            }    
        }
    </style>
</head>

<body>

<?php
    $rows = r_sched_table_all();
    for ($i=0; $i < 3; $i++) { // for printing
        echo "<div class=\"print\">";
            echo "Day ".($i+1)."\n";
            echo "<table cellspacing=\"0px\" cellpadding=\"0px\">\n";
            echo "<tr>"; //print rooms as header
                echo "<th classs='rooms_list'>ROOM\\TIME</th>";
                $assoc_array=$rows[0];
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="rm303" || $key=="rm302" || $key=="rm301" || $key=="rm216" || $key=="rm215" || $key=="rm214" || $key=="rm213" || $key=="rm212" || $key=="rm211" || $key=="rm210"){
                        echo "<th>";
                        echo substr($key, 2);
                        echo "</th>";
                    }
                    else {
                        // don't print
                    }
                }
            echo "</tr>\n";
            for ($row=9*$i; $row < 9*($i+1); $row++) { 
                $assoc_array=$rows[$row];
                echo "<tr>";
                echo "<th>";
                echo r_time_table_slot_only($assoc_array['time']);
                echo "\nSubject";
                echo "\nSection";
                echo "\nInstructor";
                echo "\nProctor";
                echo "</th>";
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="rm303" || $key=="rm302" || $key=="rm301" || $key=="rm216" || $key=="rm215" || $key=="rm214" || $key=="rm213" || $key=="rm212" || $key=="rm211" || $key=="rm210") {
                        if (!is_null($value)) {
                            $id = explode(" ", $value);
                            $subject = r_subject_table_code_only((int)$id[0]);
                            $section = r_section_table_section_only((int)$id[1]);
                            $instructor = formatstr(r_instructor_table_instructor_only((int)$id[2]));
                            $proctor = formatstr(r_instructor_table_instructor_only((int)$id[3]));
                            echo "<td height='90px' class='sched_list'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td height='90px' class='sched_list available'>";
                        }
                        echo "$subject\n";
                        echo "$section\n";
                        echo "$instructor\n";
                        echo "$proctor";
                        echo "</td>";
                    }
                    else {
                        #don't print
                    }
                }
                echo "</tr>\n";
            }
            echo"</table></div> \n";   
        echo "<div class=\"print\">";
            echo "Day ".($i+1)."\n";
            echo "<table cellspacing=\"0px\" cellpadding=\"0px\">\n";
            echo "<tr>"; //print rooms as header
                $assoc_array=$rows[0];
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="rm314" ||$key=="rm313" || $key=="rm312" || $key=="rm311" || $key=="rm310" || $key=="rm309" || $key=="rm308" || $key=="rm307" || $key=="rm306" || $key=="rm305" || $key=="rm304"){
                        echo "<th>";
                        echo substr($key, 2);
                        echo "</th>";
                    }
                    else {
                        // don't print
                    }
                }
            echo "</tr>\n";
            for ($row=9*$i; $row < 9*($i+1); $row++) { 
                $assoc_array=$rows[$row];
                echo "<tr>";
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="rm314" ||$key=="rm313" || $key=="rm312" || $key=="rm311" || $key=="rm310" || $key=="rm309" || $key=="rm308" || $key=="rm307" || $key=="rm306" || $key=="rm305" || $key=="rm304") {
                        if (!is_null($value)) {
                            $id = explode(" ", $value);
                            $subject = r_subject_table_code_only((int)$id[0]);
                            $section = r_section_table_section_only((int)$id[1]);
                            $instructor = formatstr(r_instructor_table_instructor_only((int)$id[2]));
                            $proctor = formatstr(r_instructor_table_instructor_only((int)$id[3]));
                            echo "<td class='sched_list'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td class='sched_list available'>";
                        }
                        echo "$subject\n";
                        echo "$section\n";
                        echo "$instructor\n";
                        echo "$proctor";
                        echo "</td>";
                    }
                    else {
                        #don't print
                    }
                }
                echo "</tr>\n";
            }
            echo"</table></div> \n";
        echo "<div class=\"print\">";
            echo "Day ".($i+1)."\n";
            echo "<table cellspacing=\"0px\" cellpadding=\"0px\">\n";
            echo "<tr>"; //print rooms as header
                $assoc_array=$rows[0];
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="rm410" || $key=="rm409" || $key=="rm406" || $key=="rm401" || $key=="rm318" || $key=="rm317" || $key=="rm316" || $key=="rm315"){
                        echo "<th>";
                        echo substr($key, 2);
                        echo "</th>";
                    }
                    else if($key=="cw3" ||$key=="cw2" || $key=="cw1"){
                        echo "<th>";
                        echo $key;
                        echo "</th>";
                    }
                    else {
                        // don't print
                    }
                }
            echo "</tr>\n";
            for ($row=9*$i; $row < 9*($i+1); $row++) { 
                $assoc_array=$rows[$row];
                echo "<tr>";
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="cw3" ||$key=="cw2" || $key=="cw1" || $key=="rm410" || $key=="rm409" || $key=="rm406" || $key=="rm401" || $key=="rm318" || $key=="rm317" || $key=="rm316" || $key=="rm315") {
                        if (!is_null($value)) {
                            $id = explode(" ", $value);
                            $subject = r_subject_table_code_only((int)$id[0]);
                            $section = r_section_table_section_only((int)$id[1]);
                            $instructor = formatstr(r_instructor_table_instructor_only((int)$id[2]));
                            $proctor = formatstr(r_instructor_table_instructor_only((int)$id[3]));
                            echo "<td class='sched_list'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td class='sched_list available'>";
                        }
                        echo "$subject\n";
                        echo "$section\n";
                        echo "$instructor\n";
                        echo "$proctor";
                        echo "</td>";
                    }
                    else {
                        #don't print
                    }
                }
                echo "</tr>\n";
            }
            echo"</table></div> \n";
    } ?>


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
<div class="container-fluid bg-1 text-center" style="overflow-x: scroll; max-height: 500px; overflow-y: scroll;">
  <!-- <h3 class="margin">Who Am I?</h3> -->
<?php 

    $rows = r_sched_table_all();
    echo "<a href=\"table.php\">Print</a>";
    for ($i=0; $i < 3; $i++) { // for computer display
        echo "<div class=\"noprint\">";
            echo "<h3>Day ".($i+1)."</h3>\n";
            echo "<table cellspacing=\"0px\" cellpadding=\"0px\">\n";
            echo "<tr>"; //print rooms as header
                echo "<th classs='rooms_list'>TIME\ROOM</th>";
                $assoc_array=$rows[0];
                foreach ($assoc_array as $key => $value) {
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as headers
                    }
                    else if($key=="cw1"||$key=="cw2"||$key=="cw3"){
                        echo "<th>$key</th>";
                    }
                    else{
                        echo "<th>".substr($key, 2)."</th>";
                    }
                }
            echo "</tr>\n";
            for ($row=9*$i; $row < 9*($i+1); $row++) { //print schedule rows
                $assoc_array=$rows[$row];
                echo "<tr>";
                echo "<th class='sched_list'>";
                echo r_time_table_slot_only($assoc_array['time']);
                echo "\nSubject";
                echo "\nSection";
                echo "\nInstructor";
                echo "\nProctor";
                echo "</th>"; //column headers
                foreach ($assoc_array as $key => $value) { //table cells
                    if ($key=="id"||$key=="day"||$key=="time"||$key=="status") {
                        // don't print these as cells
                    }
                    else {
                        if (!is_null($value)) {
                            $id = explode(" ", $value);
                            $subject = r_subject_table_code_only((int)$id[0]);
                            $section = r_section_table_section_only((int)$id[1]);
                            $instructor = formatstr(r_instructor_table_instructor_only((int)$id[2]));
                            $proctor = formatstr(r_instructor_table_instructor_only((int)$id[3]));
                            echo "<td align='center'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td align='center' class='available'>";
                        }
                        echo "<a class='td_link' href='edit.php?";
                        echo "id=".$assoc_array["id"]."&";
                        echo "day=".$assoc_array["day"]."&";
                        echo "time=".$assoc_array["time"]."&";
                        echo "room=".$key;
                        echo "'>";
                        echo "$subject\n";
                        echo "$section\n";
                        echo "$instructor\n";
                        echo "$proctor";
                        echo "</a>";
                        echo "</td>";
                    }
                }
                echo "</tr>\n";
            }
            echo"</table></div> \n";   
    }

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