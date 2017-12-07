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
        <br/>
        <img class="land-image" style="display: inline-flex;" src="../assets/media/about2.PNG" alt="Img" title="About Unix" width=300px height="auto"/>
        <div class="starter-template2">

            <h1 class="page-title">About</h1>
            <!-- content goes here -->
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/what.php">What is Unix?</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/history.php">History</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/components.php">Key Components</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/flavors.php">Flavors of Unix</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/linux.php">Linux</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/uses.php">Uses of Unix</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>about_unix/advantages.php">Advantages/Disadvantages</a></span><br>
        </div>
        <img class="land-image" style="display: inline-flex; float: right;" src="../assets/media/history_thumb.png" alt="Img" title="About Unix" width=300px height="auto"/>
    </main><!-- /.container -->


<?php
require_once PATH_PHP . "footer.php";
?>