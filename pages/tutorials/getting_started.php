<?php
    $title = "Getting Started Windows";
    $section = "tutorials";
    $next_page = "tutorials/getting_started_mac.php";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

        <div class="starter-template">
            <h1>Getting Started - Windows System</h1>
            <p class="lead">Natively, Unix OS’s are command line based and therefore require a means of using the command line interface to control the Unix environment.
                There are various ways to do this both on the Unix machine and remotely from another PC. Locally, all you have to do is plug your Unix machine into a monitor and hook up a keyboard to gain access to the Unix command shell.
                It is not uncommon for people to use remote sessions to log into and control their Unix machines though, so here is a walkthrough on some of the most common practices for doing this.</p>
        </div>
        <div>
            <h4>On Windows </h4>
            <p>The most popular way to access a Unix command interface from a windows PC is through the use of a terminal emulation program, most notably ‘Putty’ and using SSH. </p>
            <p>Download and install Putty to begin using it as a remote terminal connection. Also, be sure your Unix system has an SSH server. OpenSSH is the most common used server and
                can be installed on your Unix system by issuing the “[yum]/[apt-get] install openssh” command.</p>

            <ul><li>Download PuTTY from <a href="http://www.putty.org/">here.</a></li></ul>


            <h6>Starting a PuTTY Session</h6>
            <ul>
                <li>Once your Unix system is ready to accept an SSH connection and Putty has been downloaded on your remote machine, follow this tutorial.
                    When you start PuTTY, you will see a dialog box. This dialog box allows you to control everything PuTTY can do.</li>
                <img src="../../assets/media/dialog_box.PNG" alt="Starting Box" height="440" width="450">

                <li>You don't usually need to change most of the configuration options. To start the simplest kind of session, all you need to do is to enter a few basic parameters.
                </li>
                <img src="../../assets/media/dialog_box1.PNG" alt="Starting Box" height="440" width="450">

                <li>Now select a login protocol to use, from the ‘Connection type’ buttons. For a login session, you should select SSH.When you change the selected protocol,
                    the number in the ‘Port’ box will change. This is normal: it happens because the various login services are usually provided on different network ports by the server machine.
                    Most servers will use the standard port numbers, so you will not need to change the port setting.
                </li>
                <img src="../../assets/media/dialog_box2.PNG" alt="Starting Box" height="440" width="450">

                <li>Once you have filled in the ‘Host Name’, ‘Protocol’, and possibly ‘Port’ settings, you are ready to connect. Press the ‘Open’ button at the bottom of the dialog box, and PuTTY will begin trying to connect you to the server.
                </li></ul>

            <h6>Verifying the host key(SSH only)</h6>
            <ul><li>
                    If you are using SSH to connect to a server for the first time, you will probably see a message looking something like this:
                </li>
                <img src="../../assets/media/warning.PNG" alt="Warning Box" height="293" width="433">

                <li>This is a feature of the SSH protocol. It is designed to protect you against a network attack known as spoofing: secretly redirecting your connection to a different computer,
                    so that you send your password to the wrong machine. Using this technique, an attacker would be able to learn the password that guards your login account, and could then log in as if
                    they were you and use the account for their own purposes. To prevent this attack, each server has a unique identifying code, called a host key.
                    These keys are created in a way that prevents one server from forging another server's key. So if you connect to a server and it sends you a different host key
                    from the one you were expecting, PuTTY can warn you that the server may have been switched and that a spoofing attack might be in progress.
                </li>

                <li>PuTTY records the host key for each server you connect to, in the Windows Registry. Every time you connect to a server, it checks that the host key presented by the
                    server is the same host key as it was the last time you connected. If it is not, you will see a warning, and you will have the chance to abandon your connection before you type any private
                    information (such as a password) into it.
                </li>
                <li>However, when you connect to a server you have not connected to before, PuTTY has no way of telling whether the host key is the right one or not. So it gives the warning shown above, and asks you whether you want to trust this host key or not.
                </li>
                <li>Whether or not to trust the host key is your choice. For these purposes, you would generally trust the host key since the network and host can be trusted.
                </li>
            </ul>
            <h6>Log In</h6>
            <ol>
                <li>After you have connected, and perhaps verified the server's host key, you will be asked to log in, probably using a username and a password.</li>
                <li> Enter the username and the password, and the server should grant you access and begin your session.</li>
                <li>If you are using SSH, be careful not to type your username wrongly, because you will not have a chance to correct it after you press Return; many SSH servers
                    do not permit you to make two login attempts using different usernames. If you type your username wrongly, you must close PuTTY and start again.</li>
                <img src="../../assets/media/login.PNG" alt="Login" height="417" width="665">


            </ol>
            <h6>After Logging in</h6>
            <ul>
                <li>
                    After you log in to the server, you will be presented with a prompt. This prompt can be considered the equivalent to typing directly into the command line of the Unix machine.
                    All commands carried out on this emulation will directly result in the commands running on the machine.
                    <img src="../../assets/media/prompt.PNG" alt="prompt" height="53" width="640">
                </li>
            </ul>
            <h6>Logging Out</h6>
            <ul><li>
                    When you have finished your session, you should log out by typing the server's own logout command. This might vary between servers; if in doubt, try logout or exit.
                    When the server processes your logout command, the PuTTY window should close itself automatically.</li>
                <img src="../../assets/media/logout.PNG" alt="prompt" height="53" width="640">

                <li>You can close a PuTTY session using the Close button in the window border, but this might confuse the server - a bit like hanging up a telephone unexpectedly in the middle of a conversation.
                    We recommend you do not do this unless the server has stopped responding to you and you cannot close the window any other way.</li>

            </ul>
            <br><br>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>

    </main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>
