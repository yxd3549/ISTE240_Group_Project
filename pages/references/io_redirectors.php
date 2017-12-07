<?php
$title = "I/O Redirectors";
$section = "references";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Input/Output Redirectors</h1>
            <p class="lead">For the more advanced, use the following options to redirect your input and output</p>
        </div>
        <ul><?php readQuestions("../../assets/text_files/IO.txt");?></ul>

    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>