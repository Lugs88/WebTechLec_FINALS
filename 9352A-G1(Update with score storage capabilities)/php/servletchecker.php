<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Try </title>
    </head>
    <body>
        <?php
            session_start();
            include_once 'db-inc.php';

            error_reporting(0);

            $data = file_get_contents('../json/servletquiz.json');
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
            $curr_username = $_SESSION['username'];
            $sql = "UPDATE users SET quiz1=$score WHERE username= '$curr_username';";
            $mysqli->query($sql);

            $over = $lengthMC+$lengthTF+$lengthIden;

            echo "<script>
                    alert('You have scored $score / $over');
                    window.location.href='../html/self-assessment.php';
                  </script>";
        ?>
    </body>
</html>
