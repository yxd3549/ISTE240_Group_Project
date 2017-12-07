<?php
$title = "Command Line Interface";
$section = "tutorials";
$next_page = "tutorials/unix_basics.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Computing Basics - Command Line Interface</h1>
            <p class="lead">The command line interface is an EXTREMELY powerful tool in Unix. It is the main way to interact with the operating
                system in most cases. Using series of commands, one can manipulate the computer with just a keyboard and a little bit of
                knowledge. Since the command line (CLI for short) is so extensive,
                this tutorial will simply cover the basics of using a command line.</p>
        </div>

        <div>
            <h4>Know what you're using </h4>
            <p>The CLI is a small window that contains only text. On Mac OS, it looks like this</p>
            <img src="../../assets/media/cli.png" alt="Cli" height="350" width="500">
            <p>
                Windows has its own command line as well, but Mac OS’s terminal is the most like a Unix CLI in terms of how it’s used.
            </p>
            <p>
                In Unix, it’s crucial to understand the CLI. This is where all commands covered in the rest of these tutorials will be entered. CLIs include built
                in text editors for file editing server side, which proves very useful in many situations. One such text editor is VI.
            </p>
            <h5>Significant commands:</h5>
            <ul><li>ssh <server name> - secure shell access to a server
                </li></ul>
            <h5>Quick tutorial (of how to ssh)</h5>
            <p>This is an example only, not to be done</p>
            <ol>
                <li>ssh into serenity.ist.rit.edu</li>
                <li>Enter username and password</li>
                <li>pwd to make sure you’re in the right folder</li>
                <li>You used CLI!</li>
            </ol>

            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->


<?php
require_once PATH_PHP . "footer.php";
?>