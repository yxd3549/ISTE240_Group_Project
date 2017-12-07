<?php
/**
 * author: jake
 * Date: 11/27/17
 * Time: 2:32 PM
 */
?>
<?php
	$title = "About Landing";
	$rel_path_home = "../";
	require_once $rel_path_home . "assets/php/page_start.php";
	require_once PATH_PHP . "head.php";
	require_once PATH_PHP . "utilities.php";
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1 class="page-title">About</h1>
            <!-- content goes here -->
            <span><a class="landing-links" href="<?=URL_PAGES?>about_unix/components.php">Key Components</a></span><br>
            <span><a class="landing-links" href="<?=URL_PAGES?>about_unix/flavors.php">Flavors of Unix</a></span><br>
			<span><a class="landing-links" href="<?=URL_PAGES?>about_unix/uses.php">Uses of Unix</a></span><br>
            <span><a class="landing-links" href="<?=URL_PAGES?>about_unix/what.php">What is Unix?</a></span><br>
            <span><a class="landing-links" href="<?=URL_PAGES?>about_unix/linux.php">Linux</a></span><br>
			<span><a class="landing-links" href="<?=URL_PAGES?>about_unix/history.php">Histroy</a></span><br>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>