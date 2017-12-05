<?php
/**
 * author: jake
 * Date: 11/27/17
 * Time: 2:32 PM
 */
?>
<?php
    $title = "Quizzes Landing";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php";
?>

<main role="main" class="container">
    <div class="starter-template">
        <h1 class="page-title">Quizzes</h1>
        <!-- content goes here -->
        <span><a href="<?=URL_PAGES?>quizzes/getting_started_quiz.php">Getting Started with Unix</a></span><br>
        <span><a href="<?=URL_PAGES?>quizzes/cli_quiz.php">Command Line Interface</a></span><br>
        <span><a href="<?=URL_PAGES?>quizzes/directory_structure_quiz.php">Directory Structure</a></span><br>
        <span><a href="<?=URL_PAGES?>quizzes/file_permissions_quiz.php">File Permissions</a></span><br>
    </div>
</main><!-- /.container -->


<?php
    require_once PATH_PHP . "footer.php";
?>