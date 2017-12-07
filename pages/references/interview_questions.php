<?php
    $title = "Common Interview Questions";
    $section = "references";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Frequently Asked Interview Questions</h1>
        <p class="lead">If you have a job interview for a job that requires UNIX knowledge, you might want to be
        be ready to answer some technical questions about UNIX. We provide you with 38 frequently asked
        questions and their answers. We hope it helps!</p>
    </div>
    <ol><?php readQuestions("../../assets/text_files/Top 40 Unix Interview Question.txt");?></ol>

</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>
