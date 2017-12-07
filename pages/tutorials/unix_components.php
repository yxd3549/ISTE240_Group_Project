<?php
$title = "Unix Components";
$section = "tutorials";
$next_page = "tutorials/command_line_interface.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Unix Basic - Unix Components</h1>
            <p class="lead">UNIX is a machine independent operating system. It's not specific to just one type of
                computer hardware. It was designed to be independent of the computer hardware. The core components of Unix system
                consist of Kernel and Shell.
            </p>
        </div>

        <div>
            <h4>Kernel</h4>
            <p>Kernel is the heart of the UNIX system. It allocates memory and time to programs and handles all the communications in
                response to system commands. Kernel is loaded at system start up(boot). The most important parts of the kernel are memory
                management and process management. It basically acts as an interface between the user applications and the hardware.
                There are many tasks performed by the kernel, here are some examples:</p>
            <ul>
                <li><b>Memory management:</b> managing the machine's memory, assigning and allocating it to each process.</li>
                <li><b>Device management:</b> scheduling the work done by the CPU so that the work of each user is carried out as efficiently as possible.</li>
                <li><b>I/O communication:</b> accomplishing the transfer of data from one part of the system to another.</li>
                <li><b>Interpret handling:</b> interpreting and executing instructions from the shell.</li>
                <li><b>File system handling:</b> enforcing file access permissions.</li>
            </ul>
            <h4>Shell</h4>
            <p>The shell is basically an interface between the kernel and the user. Whenever you login to a Unix system you are placed in  shell program. The login program checks the username and password,
                and then starts the shell program. </p>
            <p>The shell is essentially a command line interpreter(CLI). It takes each command that user types in and passes it to the operating system kernel to be executed.
                the commands are programs themselves, when they terminate they give the user another prompt as result on the user screen.
            </p>
            <p>There are several shells available on any UNIX system and each has it's own strengths and weaknesses.
                Initially, you system will supply a default shell which can be overridden or changed. tcsh shell is usually the
                default in most machines. The most commonly available and used shells are:
            </p>
            <ul>
                <li><b>Bourne shell(sh)</b></li>
                <li><b>C shell(csh)</b></li>
                <li><b>Korn shell(ksh)</b></li>
                <li><b>TC Shell(tcsh)</b></li>
                <li><b>Bourne Again Shell(bash)</b></li>
            </ul>
            <p>It is also to know that each shell has its own unique programming language. Command files, called "shell scripts" are used to accomplish
                a series of tasks.</p>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>