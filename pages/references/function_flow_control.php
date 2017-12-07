<?php
$title = "Shell Functions and Flow Control";
$section = "references";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Shell Functions and Flow Control</h1>
        <p class="lead">Function and flow control in shell programming.</p>
    </div>
    <div>
        <h4>Functions</h4>

        <p># The function refers to passed arguments by position (as if they were positional parameters), that is, $1, $2, and so forth.</p>

        <p># $@ is equal to "$1" "$2"... "$N", where N is the number of positional parameters. $# holds the number of positional parameters.</p>

        <p>functname() {<br>
        shell commands<br>
        }<br>
        <p>
        unset -f functname - # deletes a function definition
        </p>

        <p>declare -f - # displays all defined functions in your login session</p>

    <h4>Flow Control</h4>
    <ul><?php readQuestions("../../assets/text_files/function and flowcontrol.txt");?></ul>
    </div>
</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
