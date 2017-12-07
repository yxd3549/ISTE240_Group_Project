<?php
$title = "Basic Unix Commands";
$section = "references";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Basic Unix Commands</h1>
            <p class="lead">Want to use UNIX? Learn these commands.</p>
        </div>
        <ul><?php readQuestions("../../assets/text_files/basic_commands.txt");?></ul>

    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>