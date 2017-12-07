<?php
error_reporting( E_ALL & ~E_NOTICE);
$answers = array("1", "1", "3");
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
$title = "Unix Components Quiz";
$next_page = "quizzes/cli_quiz.php";
$section = "quizzes";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Unix Components Quiz</h1>
            <p class="lead">How many of the Unix components do you remember?</p>
        </div>
        <p id="feedback" style="color: red"></p>
        <form method="post" onsubmit="return verify();">
            <ol>
                <li>
                    <span style="font-weight: bold">What is the core of an operating system?</span><?= $answer1 ?><br>
                    &emsp;<label for="1-1"><input type="radio" id="1-1" name="question1" value="1" <?=($response1 === "1" ? "checked" : "");?>>Kernel</label><br>
                    &emsp;<label for="1-2"><input type="radio" id="1-2" name="question1" value="2" <?=($response1 === "2" ? "checked" : "");?>>COB</label><br>
                    &emsp;<label for="1-3"><input type="radio" id="1-3" name="question1" value="3" <?=($response1 === "3" ? "checked" : "");?>>CPU</label><br>
                </li>

                <li>
                    <span style="font-weight: bold">What is the name of the interface that allows users to interact with with kernel?</span><?= $answer2 ?><br>
                    &emsp;<label for="2-1"><input type="radio" id="2-1" name="question2" value="1" <?=($response2 === "1" ? "checked" : "");?>>Shell</label><br>
                    &emsp;<label for="2-2"><input type="radio" id="2-2" name="question2" value="2" <?=($response2 === "2" ? "checked" : "");?>>Clam</label><br>
                    &emsp;<label for="2-3"><input type="radio" id="2-3" name="question2" value="3" <?=($response2 === "3" ? "checked" : "");?>>Oyster</label><br>
                </li>

                <li>
                    <span style="font-weight: bold">Every shell has different characteristics</span><?= $answer3 ?><br>
                    &emsp;<label for="3-1"><input type="radio" id="3-1" name="question3" value="1" <?=($response3 === "1" ? "checked" : "");?>>True</label><br>
                    &emsp;<label for="3-2"><input type="radio" id="3-2" name="question3" value="2" <?=($response3 === "2" ? "checked" : "");?>>False</label><br>
                    &emsp;<label for="3-3"><input type="radio" id="3-3" name="question3" value="3" <?=($response3 === "3" ? "checked" : "");?>>There is only one shell</label><br>
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