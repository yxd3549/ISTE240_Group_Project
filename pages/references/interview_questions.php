<?php
    $title = "Common Interview Questions";
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
    <ol><?php readQuestions();?></ol>

</main><!-- /.container -->

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

<?php
    require_once PATH_PHP . "footer.php";
?>
