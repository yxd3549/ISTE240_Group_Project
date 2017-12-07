<?php
/**
 * author: jake
 * Date: 11/27/17
 * Time: 2:32 PM
 */
?>
<?php
    $title = "Tutorials Landing";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php";
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1 class="page-title">Tutorials</h1>
        <!-- content goes here -->
        <span><a href="<?=URL_PAGES?>tutorials/getting_started.php">Getting Started</a></span>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>