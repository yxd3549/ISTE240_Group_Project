<?php
$answers = array("3", "2", "1");
$answer1 = "";
$answer2 = "";
$answer3 = "";
$response1 = $_POST["question1"];
$response2 = $_POST["question2"];
$response3 = $_POST["question3"];
if (!empty($_POST) && !empty($response1) && !empty($response2) && !empty($response3)){
    if ($response1 === $answers[0]){
        $answer1 = "✔";
    }
    else{
        $answer1 = "❌";
    }
    if ($response2 === $answers[1]){
        $answer2 = "✔";
    }
    else{
        $answer2 = "❌";
    }
    if ($response3 === $answers[2]){
        $answer3 = "✔";
    }
    else{
        $answer3 = "❌";
    }
}
?>

<script>
    function verify(){
        var feedback = document.getElementById("feedback");
        for (var i = 0; i < 3; i++){
            var radioChecked = false;
            var question_number = i + 1;
            var question = document.getElementsByName("question" + question_number);
            console.log("question" + i);
            for (var j = 0; j < question.length; j++){
                if (question[j].checked) {
                    radioChecked = true;
                    break;
                }
            }
            if (!radioChecked){
                feedback.innerHTML = "Please answer all the questions."
                return false;
            }
        }
        return true;
    }
</script>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="above-nav" style="background-color: #302ba3;">
    <div class="row">
        <div class="col-md-12 logo">
            <img src="../../assets/media/logoReee.png" alt="Logo" width="auto" height="auto" id="logo"/>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/tutorials_landing.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/tutorials/getting_started.php">Getting Started</a>
                </div>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="../../pages/quizzes_landing.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quizzes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/quizzes/getting_started_quiz.php">Getting Started Quiz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/references_landing.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">References</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/references/interview_questions.php">Interview Questions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/about_unix.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About UNIX</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/about_unix/history.php">History</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us<span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Getting Started Quiz</h1>
        <p class="lead">How much of the getting started process do you remember?</p>
    </div>
    <p id="feedback" style="color: red"></p>
    <form method="post" onsubmit="return verify();">
        <ol>
            <li>
                <span style="font-weight: bold">What's the most popular way to access the UNIX command line interface
                from a Windows PC?</span><?= $answer1 ?><br>
                &emsp;<label for="1-1"><input type="radio" id="1-1" name="question1" value="1" <?=($response1 === "1" ? "checked" : "");?>>Through the Windows Command Prompt</label><br>
                &emsp;<label for="1-2"><input type="radio" id="1-2" name="question1" value="2" <?=($response1 === "2" ? "checked" : "");?>>What do you mean? You can't access UNIX through Windows</label><br>
                &emsp;<label for="1-3"><input type="radio" id="1-3" name="question1" value="3" <?=($response1 === "3" ? "checked" : "");?>>Using Putty</label><br>
            </li>

            <li>
                <span style="font-weight: bold">How can you access the UNIX command line interface from a Mac?</span><?= $answer2 ?><br>
                &emsp;<label for="2-1"><input type="radio" id="2-1" name="question2" value="1" <?=($response2 === "1" ? "checked" : "");?>>Using Putty</label><br>
                &emsp;<label for="2-2"><input type="radio" id="2-2" name="question2" value="2" <?=($response2 === "2" ? "checked" : "");?>>Typing 'ssh [hostname]' in the command line</label><br>
                &emsp;<label for="2-3"><input type="radio" id="2-3" name="question2" value="3" <?=($response2 === "3" ? "checked" : "");?>>Using MobaXterm</label><br>
            </li>

            <li>
                <span style="font-weight: bold">What happens if you type your username wrong when trying to ssh using Putty?</span><?= $answer3 ?><br>
                &emsp;<label for="3-1"><input type="radio" id="3-1" name="question3" value="1" <?=($response3 === "1" ? "checked" : "");?>>You have to close Putty and open it again</label><br>
                &emsp;<label for="3-2"><input type="radio" id="3-2" name="question3" value="2" <?=($response3 === "2" ? "checked" : "");?>>It prevents you from logging in for 5 minutes</label><br>
                &emsp;<label for="3-3"><input type="radio" id="3-3" name="question3" value="3" <?=($response3 === "3" ? "checked" : "");?>>It asks for a valid username</label><br>
            </li>
        </ol>
        &emsp;<input type="submit">
    </form>

</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<div id="footer">
    This project was created by ThunderFox
    <p>
        Jake      | Louis  |  Abhigyan<br>
        Yancarlos | Bakari |  Aiden
    </p>
</div>
<!-- LAYER TWO -->
<div id="secondfooter">
    Created for ISTE 240 Group project
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>