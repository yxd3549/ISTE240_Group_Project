<?php
$title = "Debugging Scripts";
$section = "tutorials";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Debugging Shell Scripts</h1>
            <p class="lead">Having trouble understanding why your script isn't working?
            Try the following to debug and fix your code</p>
        </div>
        <ul><?php readQuestions("../../assets/text_files/debugging_scripts.txt");?></ul>

    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>