<?php
    function readQuestions(){
        $questionsFile = fopen("assets/text_files/Top 40 Unix Interview Question.txt", "r") or die("Unable to open file");
        while(!feof($questionsFile)){
            $question = fgets($questionsFile);
            $empty = fgets($questionsFile);
            $answer = fgets($questionsFile);
            $empty = fgets($questionsFile);
            echo "<li><h4>".$question . "</h4>" .  "<p>" . $answer . "</p></li>";
        }
    }
    function generateQuestions(){

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <main>
        <h1>Frequently asked interview questions</h1>
        <p>If you are a looking for a job that requires UNIX knowledge,
        this set of frequently asked interview questions will come in handy.</p>
        <ol>
        <?php readQuestions();?>
        </ol>

    </main>

</body>
</html>