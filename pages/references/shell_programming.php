<?php
$title = "Basic Shell Programming Commands";
$section = "references";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Basic Shell Programming Commands</h1>
        <p class="lead">Here are some basic variables used in Shell Programming</p>
    </div>
    <ul><?php readQuestions("../../assets/text_files/Shell Programming.txt");?></ul>

</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
