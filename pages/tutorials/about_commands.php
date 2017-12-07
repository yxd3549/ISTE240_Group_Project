<?php
$title = "User Commands";
$section = "tutorials";
$next_page = "tutorials/directory_commands.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Unix Basic - Basic User Information Commands</h1>
            <p class="lead">Here are some of the basic commands you can use to find out about other users and yourself.
            </p>
        </div>

        <div>
            <h4>About other people</h4>
            <ul>
                <li><b>w</b> --- tells you who's logged in, and what they're doing. Especially useful: the 'idle' part. This allows you to
                    see whether they're actually sitting there typing away at their keyboards right at the moment.</li>
                <li><b>who</b> --- tells you who's logged on, and where they're coming from. Useful if you're looking for someone who's actually physically in the same building as you,
                    or in some other particular location.</li>
                <li><b>finger username </b> --- gives you lots of information about that user, e.g. when they last read their mail and whether they're logged in. Often people put other practical information,
                    such as phone numbers and addresses, in a file called .plan. This information is also displayed by 'finger'.</li>
                <li><b>last -1 username</b> --- tells you when the user last logged on and off and from where. Without any options, last will give you a list of everyone's logins.</li>
                <li><b>talk username </b> --- lets you have a (typed) conversation with another user.</li>
                <li><b>write username</b> --- lets you exchange one-line messages with another user.</li>
                <li><b>elm</b>  --- lets you send e-mail messages to people around the world (and, of course, read them). It's not the only mailer you can use, but the one we recommend. </li>
            </ul>
            <h4>About your (electronic) self</h4>
            <ul>
                <li><b>whoami</b>--- returns your username. Sounds useless, but isn't. You may need to find out who it is who forgot to log out somewhere, and make sure *you* have logged out.</li>
                <li><b>finger</b> --- of course you can finger yourself, too. That can be useful e.g. as a quick check whether you got new mail. Try to create a useful .plan file soon. Look at other people's .plan files for ideas.
                    The file needs to be readable for everyone in order to be visible through 'finger'. Do 'chmod a+r .plan' if necessary.
                    You should realize that this information is accessible from anywhere in the world, not just to other people on turing.
                </li>
                <li><b>passwd</b> --- lets you change your password, which you should do regularly (at least once a year).
                </li>
                <li><b>ps -u yourusername</b> --- lists your processes. Contains lots of information about them, including the process ID, which you need if you have to kill a process. Normally,
                    when you have been kicked out of a dialin session or have otherwise managed to get yourself disconnected abruptly,
                    this list will contain the processes you need to kill. Those may include the shell (tcsh or whatever you're using),
                    and anything you were running, for example emacs or elm. Be careful not to kill your current shell - the one with the
                    number closer to the one of the ps command you're currently running. But if it happens, don't panic. Just try again :)
                    If you're using an X-display you may have to kill some X processes before you can start them again. These will show only
                    when you use ps -efl, because they're root processes.
                </li>
                <li><b>kill PID</b> --- kills (ends) the processes with the ID you gave. This works only for your own processes, of course. Get the ID by using ps. If the process doesn't 'die' properly,
                    use the option -9. But attempt without that option first, because it doesn't give the process a chance to finish possibly important business before dying. You may need to kill processes
                    for example if your modem connection was interrupted and you didn't get logged out properly, which sometimes happens.</li>
                <li><b>quota -v</b> --- show what your disk quota is (i.e. how much space you have to store files), how much you're actually using, and in case you've exceeded your quota (which you'll be given an automatic
                    warning about by the system) how much time you have left to sort them out (by deleting or gzipping some, or moving them to your own computer).</li>
                <li><b>du filename</b> --- shows the disk usage of the files and directories in filename (without argument the current directory is used). du -s gives only a total.</li>
                <li><b>last yourusername</b> --- lists your last logins. Can be a useful memory aid for when you were where, how long you've been working for, and keeping track of your phone bill if you're making a non-local phone call for dialling in.
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