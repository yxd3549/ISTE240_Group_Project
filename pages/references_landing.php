<?php
    $title = "References Landing";
    $section = "references";
    $rel_path_home = "../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php";
?>
    <main role="main" class="container">
        <br/>
        <img class="land-image" style="display: inline-flex;" src="../assets/media/references2.PNG" alt="Img" title="About Unix" width=300px height="auto"/>
        <div class="starter-template2">
            <h1 class="page-title">References</h1>
            <!-- content goes here -->
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/glossary.php">Glossary</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/basic_commands.php">Basic Commands</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/cli_shortcuts.php">CLI Shortcuts</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/io_redirectors.php">I/O Redirectors</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/function_flow_control.php">Function Flow Control</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/process_handling.php">Process Handling</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/interview_questions.php">Interview Questions</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/network_commands.php">Network Commands</a></span><br>
            <span class="land-image2"><a class="landing-links" href="<?=URL_PAGES?>references/shell_programming.php">Shell Programming</a></span><br>
        </div>
        <img class="land-image" style="display: inline-flex; float: right;" src="../assets/media/ref_thumb.png" alt="Img" title="About Unix" width=300px height="auto"/>
    </main><!-- /.container -->
<?php
    require_once PATH_PHP . "footer.php";
?>