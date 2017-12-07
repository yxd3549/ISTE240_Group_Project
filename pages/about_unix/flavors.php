
<?php
    $title = "Flavors of Unix"; /* Title to be show in tab*/
    $section = "about_unix";
    $rel_path_home = "../../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Do Not Change*/ require_once $rel_path_home . "assets/php/page_start.php"; /* Do Not Change*/

    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"; /* utilities has the quiz grading methods and maybe others in the future, but not all pages use this */
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Versions/Flavors of Unix</h1>
    </div>

</main><!-- /.container -->


<?php
    require_once PATH_PHP . "footer.php";
?>
