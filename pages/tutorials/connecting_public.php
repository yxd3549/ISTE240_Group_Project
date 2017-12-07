<?php
$title = "Connecting to the Outside World";
$section = "tutorials";
$next_page = "tutorials/shell_scripting.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Commands to connect to the outside world</h1>
            <p class="lead">Here are some commands you can utilize to connect to the outside world, as well as commands for Miscellaneous tools
            </p>
        </div>

        <div>
            <h4>Connecting to the outside world</h4>
            <ul>
                <li><b>nn</b> --- allows you to read news. It will first let you read the news local to turing, and then the remote news. If you want to read only the local or remote news, you can use nnl or nnr,
                    respectively. To learn more about nn type nn, then \tty{:man}, then \tty{=.*}, then \tty{Z}, then hit the space bar to step through the manual. Or look at the man page.</li>
                <li><b>rlogin hostname</b> --- lets you connect to a remote host</li>
                <li><b>telnet hostname </b> --- also lets you connect to a remote host. Use rlogin whenever possible.</li>
                <li><b>ftp hostname</b> --- --- lets you download files from a remote host which is set up as an ftp-server.
                    This is a common method for exchanging academic papers and drafts. If you need to make a paper of yours available in this way,
                    you can (temporarily) put a copy in /user/ftp/pub/TMP. For more permanent solutions, ask Emma. The most important commands
                    within ftp are get for getting files from the remote machine, and put for putting them there (mget and mput let you specify
                    more than one file at once). Sounds straightforward, but be sure not to confuse the two, especially when your physical location
                    doesn't correspond to the direction of the ftp connection you're making. ftp just overwrites files with the same filename.
                    If you're transferring anything other than ASCII text, use binary mode.</li>
                <li><b>lynx</b> --- lets you browse the web from an ordinary terminal. Of course you can see only the text, not the pictures.
                    You can type any URL as an argument to the G command. When you're doing this from any Stanford host you can leave out the
                    .stanford.edu part of the URL when connecting to Stanford URLs.
                    Type H at any time to learn more about lynx, and Q to exit.</li>
                </ul>
            <h4>Miscellaneous tools</h4>
            <ul>
                <li><b>webster word</b>--- looks up the word in an electronic version of Webster's dictionary and returns the definition(s)
                </li>
                <li><b>date </b> --- shows the current date and time.</li>
                <li><b>cal </b> --- shows a calendar of the current month. Use e.g., 'cal 10 1995' to get that for October 95, or 'cal 1995' to get the whole year.
                </li>
            </ul>

            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>