<?php
/**
 * author: jake
 * Date: 11/27/17
 * Time: 2:32 PM
 */
?>
<?php
    $title = "Tutorials Landing";
    $section = "tutorials";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php";
?>
    <main role="main" class="container">
        <br/>
        <img class="land-image" style="display: inline-flex;" src="../assets/media/history_thumb.png" alt="Img" title="About Unix" width=300px height="auto"/>
        <div class="starter-template2">
            <h1 class="page-title">Tutorials</h1>
            <!-- content goes here -->
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/getting_started.php">Getting Started - Windows</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/getting_started_mac.php">Getting Started - Mac OS</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/what_is_os.php">What is an OS?</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/unix_components.php">Unix Components</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/command_line_interface.php">Command Line Interface</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/unix_basics.php">Basic Unix Commands</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/about_commands.php">User Commands</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/directory_commands.php">Directory Commands</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/directory_structure.php">Directory Structure</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/file_permission.php">File Permissions</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/connecting_public.php">Outside World Commands</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/shell_scripting.php">Shell Scripting</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/tar_balls.php">Tar Balls</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>tutorials/debugging_scripts.php">Debugging Scripts</a></span><br>
        </div>
        <img class="land-image" style="display: inline-flex; float: right;" src="../assets/media/history_thumb.png" alt="Img" title="About Unix" width=300px height="auto"/>
    </main><!-- /.container -->
<?php
    require_once PATH_PHP . "footer.php";
?>