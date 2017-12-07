<?php
/**
 * author: jake
 * Date: 11/27/17
 * Time: 2:32 PM
 */
?>
<?php
    $title = "References Landing";
    $section = "references";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php";
?>
<main role="main" class="container">
    <div class="starter-template">
        <h1 class="page-title">References</h1>
        <!-- content goes here -->
        <span><a class="landing-links" href="<?=URL_PAGES?>references/glossary.php">Glossary</a></span><br>
        <span><a class="landing-links" href="<?=URL_PAGES?>references/basic_commands.php">Basic Commands</a></span><br>
        <span><a class="landing-links" href="<?=URL_PAGES?>references/interview_questions.php">Mock Interview Questions</a></span><br>
		<span><a class="landing-links" href="<?=URL_PAGES?>references/cli_shortcuts.php">CLI Shortcuts</a></span><br>
		<span><a class="landing-links" href="<?=URL_PAGES?>references/function_flow_control.php">Function Flow Control</a></span><br>
		<span><a class="landing-links" href="<?=URL_PAGES?>references/network_commands.php">Network Commands</a></span><br>
		<span><a class="landing-links" href="<?=URL_PAGES?>references/io_redirectors.php">I/O Redirectors</a></span><br>
		<span><a class="landing-links" href="<?=URL_PAGES?>references/process_handling.php">Process Handling</a></span><br>
		<span><a class="landing-links" href="<?=URL_PAGES?>references/shell_programming.php">Shell Programming</a></span><br>
	</div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>