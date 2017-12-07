<?php
function readQuestions($filename){
    $questionsFile = fopen($filename, "r") or die("Unable to open file");
    while(!feof($questionsFile)){
        $question = fgets($questionsFile);
        fgets($questionsFile);
        $answer = fgets($questionsFile);
        fgets($questionsFile);
        echo "<li><h5 style='font-weight: bold'>".$question . "</h5>" .  "<p>" . $answer . "</p></li>";
    }
}

?>