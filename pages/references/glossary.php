≈<?php
$title = "Glossary";
$rel_path_home = "../../";
$section = "references";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Glossary of UNIX System Terminology</h1>
        <p class="lead">Wondering what the fancy words people use when
            talking about UNIX mean? Take a look at the following glossary. </p>
    </div>
    <ul><?php readQuestions("../../assets/text_files/Glossary of UNIX system terminology.txt");?></ul>

</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
