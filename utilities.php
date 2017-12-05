<?php
function readQuestions(){
    $questionsFile = fopen("../../assets/text_files/Top 40 Unix Interview Question.txt", "r") or die("Unable to open file");
    while(!feof($questionsFile)){
        $question = fgets($questionsFile);
        fgets($questionsFile);
        $answer = fgets($questionsFile);
        fgets($questionsFile);
        echo "<li><h5>".$question . "</h5>" .  "<p>" . $answer . "</p></li>";
    }
}

?>