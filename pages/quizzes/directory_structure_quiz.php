<?php
error_reporting( E_ALL & ~E_NOTICE);
$answers = array("3", "2", "3");
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
    $title = "Directory Structure Quiz";
    $next_page = "quizzes/file_permissions_quiz.php";
    $section = "quizzes";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php";
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Directory Structure Quiz</h1>
        <p class="lead">You're tossed in an unknown directory. Can you find your way out?</p>
    </div>
    <p id="feedback" style="color: red"></p>
    <form method="post" onsubmit="return verify();">
        <ol>
            <li>
                <span style="font-weight: bold">Which of the following is NOT a valid command?</span><?= $answer1 ?><br>
                &emsp;<label for="1-1"><input type="radio" id="1-1" name="question1" value="1" <?=($response1 === "1" ? "checked" : "");?>>mkdir</label><br>
                &emsp;<label for="1-2"><input type="radio" id="1-2" name="question1" value="2" <?=($response1 === "2" ? "checked" : "");?>>cd</label><br>
                &emsp;<label for="1-3"><input type="radio" id="1-3" name="question1" value="3" <?=($response1 === "3" ? "checked" : "");?>>vhs</label><br>
            </li>

            <li>
                <span style="font-weight: bold">What's the proper syntax to make a directory named "pages"?</span><?= $answer2 ?><br>
                &emsp;<label for="2-1"><input type="radio" id="2-1" name="question2" value="1" <?=($response2 === "1" ? "checked" : "");?>>makenewdir pages</label><br>
                &emsp;<label for="2-2"><input type="radio" id="2-2" name="question2" value="2" <?=($response2 === "2" ? "checked" : "");?>>mkdir pages</label><br>
                &emsp;<label for="2-3"><input type="radio" id="2-3" name="question2" value="3" <?=($response2 === "3" ? "checked" : "");?>>makedir pages</label><br>
            </li>

            <li>
                <span style="font-weight: bold">How would you print your current directory?</span><?= $answer3 ?><br>
                &emsp;<label for="3-1"><input type="radio" id="3-1" name="question3" value="1" <?=($response3 === "1" ? "checked" : "");?>>printwdirectory</label><br>
                &emsp;<label for="3-2"><input type="radio" id="3-2" name="question3" value="2" <?=($response3 === "2" ? "checked" : "");?>>printd</label><br>
                &emsp;<label for="3-3"><input type="radio" id="3-3" name="question3" value="3" <?=($response3 === "3" ? "checked" : "");?>>pwd</label><br>
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
