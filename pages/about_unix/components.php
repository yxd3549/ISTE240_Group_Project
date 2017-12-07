<?php
    $title = "Components";
    $section = "about_unix";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"
?>
<main role="main" class="container">

    <div class="starter-template">
        <h1>Key Components of a Unix System</h1>
        <p class="lead">
            Proprietary Unix systems and their variants are characterized by several essential components</p>
    </div>
    <div>
        <ul>
            <li><h3>The Kernel:</h3>
                <p>The kernel is the master control program of the operating system, handling memory management,
                    system calls, and other low-level functions common to most programs, and providing drivers for
                    controlling hardware.</p>
            </li><br/>
            <li><h3>The Shell:</h3>
                <p>The shell is an interactive program that provides an interface between the user and the kernel.
                    The shell interprets commands entered by the user or supplied by a shell script, and passes them
                    to the kernel for execution.</p>
            </li><br/>
            <li><h3>The File System:</h3>
                <p>Unix and Unix-like operating systems employ a hierarchical (i.e., inverted tree) directory structure,
                    with the root directory (/) at the top.</p>
            </li><br/>
            <li><h3>Development Environments:</h3>
                <p>Most Unix and Unix-like systems include tools and libraries for writing, compiling, and debugging C,
                    C++, and Fortran programs.</p>
            </li><br/>
            <li><h3>Commands:</h3>
                <p>Unix and Unix-like systems include a large core of standard utilities for editing text, writing,
                    compiling, and controlling programs, processing, manipulating the user environment, and retrieving
                    information about the system and its users. Many commands allow arguments (known as options or flags)
                    to modify their default behavior. Users enter commands and arguments on the shell command line, and
                    then the shell interprets them and passes them to the kernel for execution.</p>
            </li><br/>
        </ul>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>