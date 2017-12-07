<?php
error_reporting( E_ALL & ~E_NOTICE);
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


<?php
$title = "Operating Systems Quiz";
$next_page = "quizzes/unix_components_quiz.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Operating Systems Quiz</h1>
            <p class="lead">Do you remember specifics about the Linux OS?</p>
        </div>
        <p id="feedback" style="color: red"></p>
        <form method="post" onsubmit="return verify();">
            <ol>
                <li>
                    <span style="font-weight: bold">How is Linux different from Windows and Mac OS?</span><?= $answer1 ?><br>
                    &emsp;<label for="1-1"><input type="radio" id="1-1" name="question1" value="1" <?=($response1 === "1" ? "checked" : "");?>>Linux is not used anymore</label><br>
                    &emsp;<label for="1-2"><input type="radio" id="1-2" name="question1" value="2" <?=($response1 === "2" ? "checked" : "");?>>Linux is used only in mobile devices</label><br>
                    &emsp;<label for="1-3"><input type="radio" id="1-3" name="question1" value="3" <?=($response1 === "3" ? "checked" : "");?>>There are many different distributors you can choose from</label><br>
                </li>

                <li>
                    <span style="font-weight: bold">What does GUI stand for?</span><?= $answer2 ?><br>
                    &emsp;<label for="2-1"><input type="radio" id="2-1" name="question2" value="1" <?=($response2 === "1" ? "checked" : "");?>>Graphics Unit Instance</label><br>
                    &emsp;<label for="2-2"><input type="radio" id="2-2" name="question2" value="2" <?=($response2 === "2" ? "checked" : "");?>>Graphical User Interface</label><br>
                    &emsp;<label for="2-3"><input type="radio" id="2-3" name="question2" value="3" <?=($response2 === "3" ? "checked" : "");?>>Graphics User Interactions</label><br>
                </li>

                <li>
                    <span style="font-weight: bold">What percentage of global used operating systems does Linux account for?</span><?= $answer3 ?><br>
                    &emsp;<label for="3-1"><input type="radio" id="3-1" name="question3" value="1" <?=($response3 === "1" ? "checked" : "");?>>2%</label><br>
                    &emsp;<label for="3-2"><input type="radio" id="3-2" name="question3" value="2" <?=($response3 === "2" ? "checked" : "");?>>20%</label><br>
                    &emsp;<label for="3-3"><input type="radio" id="3-3" name="question3" value="3" <?=($response3 === "3" ? "checked" : "");?>>30%</label><br>
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