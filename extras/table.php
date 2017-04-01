<?php // arrays

    $rooms = array("210", "211", "212", "213", "214", 
        "215", "216", "301", "302", "303", 
        "304", "305", "306", "307", "308", 
        "309", "310", "311", "312", "313", 
        "314", "315", "316", "317", "318", 
        "401", "406", "409", "410", 
        "cw1", "cw2", "cw3");
    $time_slot = array("07:30 - 09:00 AM"
                        , "09:00 - 10:30 AM"
                        , "10:30 - 12:00 AM"
                        , "12:00 - 01:30 PM"
                        , "01:30 - 03:00 PM"
                        , "03:00 - 04:30 PM"
                        , "04:30 - 06:00 PM"
                        , "06:00 - 07:30 PM"
                        , "07:30 - 09:00 PM");

 ?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        @media print {
            .noprint{
                display: none;
            }
        }
        @media screen {
            .print{
                display: none;
            }
        }
        table, th , td  {
            border: 1px solid grey;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table tr:nth-child(odd) {
            background-color: #f1f1f1;
        }
        table tr:nth-child(even) {
            background-color: #ffffff;
        }
        .rooms{
            height: 50px;
        }
        .time_slot{
            height: 100px;
        }
    </style>
    <title>admin page table</title>
</head>
<body>
<?php 
    for ($day = 1; $day <= 3 ; $day++) { 
        echo "<div class=\"noprint\">";
        echo "<h1>Day $day</h1>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Time\Room</th>";
                for ($room = 0; $room < 32 ; $room++) { 
                    echo "<th class=\"rooms\">$rooms[$room]</th>";
                }
            echo "</tr>";
            for ($time = 0; $time < 9 ; $time++) {
                echo "<tr>"; 
                echo "<th class=\"time_slot\">$time_slot[$time]</th>";
                for ($schedule = 1; $schedule <= 32 ; $schedule++) { 
                    echo "<td>schedule $day.".$schedule."</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
        echo "</div>";
    }
 ?>
</body>
</html>