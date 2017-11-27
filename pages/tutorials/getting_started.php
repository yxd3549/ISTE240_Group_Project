<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="above-nav" style="background-color: #302ba3;">
    <div class="row">
        <div class="col-md-12 logo">
            <img src="../../assets/media/logoReee.png" alt="Logo" width="auto" height="auto" id="logo"/>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="../../pages/tutorials.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/tutorials/getting_started.php">Getting Started</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/quizzes.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quizzes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/quizzes/getting_started_quiz.php">Getting Started Quiz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/references.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">References</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/references/interview_questions.php">Interview Questions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/about_unix.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About UNIX</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/about_unix/history.php">History</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us<span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Getting Started Tutorial</h1>
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
            <img src="../../assets/media/dialog_box.png" alt="Starting Box" height="440" width="450">

        <li>You don't usually need to change most of the configuration options. To start the simplest kind of session, all you need to do is to enter a few basic parameters.
            </li>
        <img src="../../assets/media/dialog_box1.png" alt="Starting Box" height="440" width="450">

        <li>Now select a login protocol to use, from the ‘Connection type’ buttons. For a login session, you should select SSH.When you change the selected protocol,
                the number in the ‘Port’ box will change. This is normal: it happens because the various login services are usually provided on different network ports by the server machine.
                Most servers will use the standard port numbers, so you will not need to change the port setting.
            </li>
         <img src="../../assets/media/dialog_box2.png" alt="Starting Box" height="440" width="450">

            <li>Once you have filled in the ‘Host Name’, ‘Protocol’, and possibly ‘Port’ settings, you are ready to connect. Press the ‘Open’ button at the bottom of the dialog box, and PuTTY will begin trying to connect you to the server.
                </li></ul>

        <h6>Verifying the host key(SSH only)</h6>
        <ul><li>
        If you are using SSH to connect to a server for the first time, you will probably see a message looking something like this:
        </li>
            <img src="../../assets/media/warning.png" alt="Warning Box" height="293" width="433">

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
            <img src="../../assets/media/login.png" alt="Login" height="417" width="665">


        </ol>
        <h6>After Logging in</h6>
        <ul>
            <li>
                After you log in to the server, you will be presented with a prompt. This prompt can be considered the equivalent to typing directly into the command line of the Unix machine.
                    All commands carried out on this emulation will directly result in the commands running on the machine.
                <img src="../../assets/media/prompt.png" alt="prompt" height="53" width="640">
            </li>
        </ul>
        <h6>Logging Out</h6>
        <ul><li>
                    When you have finished your session, you should log out by typing the server's own logout command. This might vary between servers; if in doubt, try logout or exit.
                When the server processes your logout command, the PuTTY window should close itself automatically.</li>
                <img src="../../assets/media/logout.png" alt="prompt" height="53" width="640">

                <li>You can close a PuTTY session using the Close button in the window border, but this might confuse the server - a bit like hanging up a telephone unexpectedly in the middle of a conversation.
                We recommend you do not do this unless the server has stopped responding to you and you cannot close the window any other way.</li>

        </ul>
        <br><br>
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
    </div>
</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
