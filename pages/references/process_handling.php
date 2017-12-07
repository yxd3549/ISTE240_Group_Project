<?php
$title = "Process Handling";
$section = "references";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Process Handling</h1>
        <p class="lead">Once you understand how processes work, you can use the following commands
        to handle them wisely</p>
    </div>
    <ul><?php readQuestions("../../assets/text_files/process_handling.txt");?></ul>

</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
