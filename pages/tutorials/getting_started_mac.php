<?php
$title = "Getting Started Mac";
$section = "tutorials";
$next_page = "tutorials/what_is_os.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Getting Started - Mac OS</h1>
            <p class="lead">Natively, Unix OS’s are command line based and therefore require a means of using the command line interface to control the Unix environment.
                There are various ways to do this both on the Unix machine and remotely from another PC. Locally, all you have to do is plug your Unix machine into a monitor and hook up a keyboard to gain access to the Unix command shell.
                It is not uncommon for people to use remote sessions to log into and control their Unix machines though, so here is a walkthrough on some of the most common practices for doing this.</p>
        </div>
        <div>
            <h4>On Another Unix-like System</h4>
            <ul><li>
                    The process for logging in remotely to a Unix system from another Unix system is generally much more simple. SSH clients are normally built into bash and Mac Terminal, so when you open up a terminal on either a Unix/Mac OS,
                    you can simply enter the command ‘ssh [hostname]’ with the hostname of your Unix system. You will be prompted to login just like you would be if you were at the machine itself.
                </li></ul>
            <ol>
                <li>First go to the upper right corner and click the search function and search for "terminal". </li>
                <img src="../../assets/media/search_terminal.png" alt="search_terminal" height="425" width="673">
                <li>The mac's terminal will be very similar to PuTTY and any other CLIs..</li>

                <img src="../../assets/media/prompt1.png" alt="prompt1" height="160" width="586">
                <li>Once you have the terminal opened, use the command 'ssh' +  the hostname you want to connect to.</li>
                <img src="../../assets/media/mac_login.png" alt="mac_login" height="370" width="600">
                <li>You will then be prompted to enter the username and password. Once you are successfully authenticated, you are good to go.</li>
                <img src="../../assets/media/password.png" alt="password" height="367" width="585">
            </ol>

            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>