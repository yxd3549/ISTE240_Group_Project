<?php
$title = "SSH, System Info and Network Commands";
$section = "references";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>SSH, System Info and Network Commands</h1>
        <p class="lead">If you find yourself thrill diving into the networking side of Unix, you will find the following commands helpful. </p>
    </div>
    <ul><?php readQuestions("../../assets/text_files/network commands.txt");?></ul>

</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
