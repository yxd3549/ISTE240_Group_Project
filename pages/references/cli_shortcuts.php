<?php
$title = "CLI Shortcuts";
$rel_path_home = "../../";
$section = "references";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Command Line Interface Shortcuts</h1>
        <p class="lead">Looking to be use the CLI with more ease? Take a look at the following shortcuts</p>
    </div>
    <ul><?php readQuestions("../../assets/text_files/Shortcuts.txt");?></ul>

</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
