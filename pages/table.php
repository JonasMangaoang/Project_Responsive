<?php // arrays
    include 'statements.php';
    $subject = "SUBJECT";
    $section = "Section";
    $instructor = "Instructor";
    $proctor = "Proctor";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
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
            height: 80px;
        }
        th .rooms_list {
            width: inherit;
            height: 30px;
        }
        th .sched_list {
            width: inherit;
            height: 80px;
        }
        @media print {
            .noprint{
                display: none;
            }
            .print{
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
            }
            .td_link {
                display:block;
                text-decoration:none;
            }    
        }
    </style>
</head>
<body>
<!-- 
<table cellspacing="0px" cellpadding="0px">
  <tr><td height='9px' bgcolor="#990000">Upper</td></tr>
  <tr><td height='100px' bgcolor="#990099"></td></tr>
</table>
 -->
<?php 

    $rows = r_sched_table_all();
    echo "<a href=\"admin.php\" class='noprint'>Cancel Print</a>";
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
                echo "<th class='sched_list'>";
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
                            echo "<td height='60px'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td class='available' height='60px'>";
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
                            echo "<td height='60px'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td class='available' height='60px'>";
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
                            echo "<td height='60px'>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td class='available' height='60px'>";
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
    }

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
                            echo "<td>";
                        }
                        else {
                            $subject = NULL;
                            $section = NULL;
                            $instructor = NULL;
                            $proctor = NULL;   
                            echo "<td align='center' class='available'>";
                        }
                        echo "<a class='td_link' href='cell.php?";
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

</body>
</html>