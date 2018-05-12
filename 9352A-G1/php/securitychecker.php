<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Results </title>
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php
            session_start();
            include_once '../php/db-inc.php';

            error_reporting(0);
            echo "<h1 class='jumbotron'>";
            echo "RESULTS:";
            echo "</h1>";

            $data = file_get_contents('../json/securityquiz.json');
            $array = json_decode($data, true);

            $score = 0;

            $lengthMC = count($array['mc']); 
            for ($i=0; $i < $lengthMC; $i++) { 
                
                $nameMC = $array['mc'][$i]['name']; //name with value from json file @ mc
                $correctAns = $array['mc'][$i]['correctAnswer'];

                $answer = $_POST[$nameMC];

                if (isset($answer) && $answer == $correctAns) {
                    $score++;
                }
            }

            $lengthTF = count($array['tf']);
            for ($i=0; $i < $lengthTF; $i++) { 
                
                $nameTF = $array['tf'][$i]['name']; //name with value from json file @ tf
                $correctAns = $array['tf'][$i]['correctAnswer'];

                $answer = $_POST[$nameTF];

                if (isset($answer) && $answer == $correctAns) {
                    $score++;
                }
            }

            $lengthIden = count($array['iden']);
            for ($i=0; $i < $lengthIden; $i++) { 
                
                $nameIden = $array['iden'][$i]['name']; //name with value from json file @ iden
                $correctAns = $array['iden'][$i]['correctAnswer'];

                $answer = $_POST[$nameIden];

                if ((strcasecmp($answer, $correctAns) == 0) && isset($answer)){
                    $score++;
                }
            }
        
            echo "<h2 class='ml-4'>";
            echo "Your score is: ";
            echo $score;
            echo "/";
            echo $lengthMC+$lengthTF+$lengthIden;
            echo "</h2>";

            $sql = "UPDATE users SET quiz5 = $score WHERE username = '".$_SESSION['username']."'";

            if ($mysqli->query($sql) === TRUE) {
                echo "<p  class='ml-5'>";
                echo "Record updated successfully";
                echo "</p>";
            }

            $sql = "SELECT username, quiz5 FROM users ORDER BY quiz5 DESC LIMIT 10";
            $con = mysqli_connect($dbServerName,$dbUserName ,$dbPassword ,$dbName );

            $ctr = 1;

            if ($result=mysqli_query($con,$sql)) {
                echo "<h2 class='text-center pb-3'>";
                echo "Leaderboards";
                echo "</h2>";
                echo "<table class = 'table-striped'>";
                echo "<tr>";
                echo "<th>";
                echo "Rank";
                echo "</th>";
                echo "<th>";
                echo "Username";
                echo "</th>";
                echo "<th>";
                echo "Score";
                echo "</th>";
                echo "</tr>";
                
                while ($row=mysqli_fetch_row($result)) {
                    // printf ("%s (%s)\n",$row[0],$row[1]);
                    echo "<tr>";
                    echo "<td>";
                    echo $ctr;
                    echo "</td>";
                    echo "<td>";
                    echo $row[0];
                    echo "</td>";
                    echo "<td>";
                    echo $row[1];
                    echo "</td>";
                    echo "</tr>";

                    $ctr++;
                }

                echo "</table>";
                echo "</table>";
                echo "<p class='text-left ml-10'>";
                echo "&larr; Back to ";
                echo "<a href='../html/self-assessment.php'>";
                echo "Self-Assessment";
                echo "</a>";
                echo "</p>";
                
                // mysqli_free_result($result);
            }
            else {
                echo "not working";
            }


            $mysqli->close();
        ?>
    </body>
</html>