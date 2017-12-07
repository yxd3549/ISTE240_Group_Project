
<?php
    $title = "About Unix"; /* Title to be show in tab*/
    $section = "about_unix";
    $rel_path_home = "../../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Do Not Change*/ require_once $rel_path_home . "assets/php/page_start.php"; /* Do Not Change*/

    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"; /* utilities has the quiz grading methods and maybe others in the future, but not all pages use this */
?>


<main role="main" class="container">

    <div class="starter-template">
        <h1 class="page-title">About Unix</h1>
        <!-- content goes here -->
        <span><a href="<?=URL_PAGES?>about_unix/history.php">History of Unix</a></span>
        <span><a href="<?=URL_PAGES?>about_unix/flavors.php">Flavors of Unix</a></span>
        <span><a href="<?=URL_PAGES?>about_unix/uses.php">Uses of Unix</a></span>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>