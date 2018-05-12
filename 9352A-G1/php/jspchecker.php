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

            $data = file_get_contents('../json/jspquiz.json');
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

            $sql = "UPDATE users SET quiz4 = $score WHERE username = '".$_SESSION['username']."'";

            if ($mysqli->query($sql) === TRUE) {
                echo "<p  class='ml-5'>";
                echo "Record updated successfully";
                echo "</p>";
            }

            $mysqli->close();
        ?>
    </body>
</html>