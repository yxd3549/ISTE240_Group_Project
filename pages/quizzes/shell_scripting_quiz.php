<?php
error_reporting( E_ALL & ~E_NOTICE);
$answers = array("2", "3", "2");
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


<?php
$title = "Shell Scripting Quiz";
$next_page = "quizzes/tarballs_quiz.php";
$section = "quizzes";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php";
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Shell Scripting Quiz</h1>
            <p class="lead">Can you automate tedious work with shell scripts?</p>
        </div>
        <p id="feedback" style="color: red"></p>
        <form method="post" onsubmit="return verify();">
            <ol>
                <li>
                <span style="font-weight: bold">What comment starts a shell script?</span><?= $answer1 ?><br>
                    &emsp;<label for="1-1"><input type="radio" id="1-1" name="question1" value="1" <?=($response1 === "1" ? "checked" : "");?>>#/shell/script</label><br>
                    &emsp;<label for="1-2"><input type="radio" id="1-2" name="question1" value="2" <?=($response1 === "2" ? "checked" : "");?>>#!/bin/bash</label><br>
                    &emsp;<label for="1-3"><input type="radio" id="1-3" name="question1" value="3" <?=($response1 === "3" ? "checked" : "");?>>#!/shell/bash</label><br>
                </li>

                <li>
                    <span style="font-weight: bold">How do you print "Hi there" to the command line through a script?</span><?= $answer2 ?><br>
                    &emsp;<label for="2-1"><input type="radio" id="2-1" name="question2" value="1" <?=($response2 === "1" ? "checked" : "");?>>print("Hi there")</label><br>
                    &emsp;<label for="2-2"><input type="radio" id="2-2" name="question2" value="2" <?=($response2 === "2" ? "checked" : "");?>>System.out.print("Hi there")</label><br>
                    &emsp;<label for="2-3"><input type="radio" id="2-3" name="question2" value="3" <?=($response2 === "3" ? "checked" : "");?>>echo Hi there</label><br>
                </li>

                <li>
                    <span style="font-weight: bold">Which of the following is the correct syntax of a loop?</span><?= $answer3 ?><br>
                    &emsp;<label for="3-1"><input type="radio" id="3-1" name="question3" value="1" <?=($response3 === "1" ? "checked" : "");?>>for i in range(1, 4)</label><br>
                    &emsp;<label for="3-2"><input type="radio" id="3-2" name="question3" value="2" <?=($response3 === "2" ? "checked" : "");?>>for i in 1 2 3</label><br>
                    &emsp;<label for="3-3"><input type="radio" id="3-3" name="question3" value="3" <?=($response3 === "3" ? "checked" : "");?>>There are no for loops in shell scripts</label><br>
                </li>
            </ol>
            &emsp;<input type="submit">
        </form>
        <?php
        require_once PATH_PHP . "next.php";
        ?>
    </main><!-- /.container -->


<?php
require_once PATH_PHP . "footer.php";
?>