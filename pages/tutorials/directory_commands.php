<?php
$title = "Directory Commands";
$section = "tutorials";
$next_page = "tutorials/directory_structure.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Basic Directory Commands</h1>
            <p class="lead">Here are some of the basic commands you can use for directories and some other useful commands.
            </p>
        </div>

        <div>

            <h4>Directories</h4>
            <ul>
                <li><b>mkdir dirname</b> --- make a new directory.</li>
                <li><b>cd dirname</b>--- change directory. You basically 'go' to another directory, and you will see the files in that
                    directory when you do 'ls'. You always start out in your 'home directory', and you can get back there by typing 'cd' without arguments.
                    'cd ..' will get you one level up from your current position.</li>
                <li><b>pwd</b>---  tells you where you currently are</li>
            </ul>
            <h5>Finding things</h5>
            <ul>
                <li><b>ff</b> --- find files anywhere on the system. This can be extremely useful if you've forgotten in which directory you put a file, but do remember the name.
                    In fact, if you use ff -p you don't even need the full name, just the beginning.
                    This can also be useful for finding other things on the system, e.g. documentation.</li>
                <li><b>grep string filename(s)</b> --- looks for the string in the files. This can be useful a lot of purposes, e.g.
                    finding the right file among many, figuring out which is the right version of something, and even doing serious corpus work.
                    grep comes in several varieties (grep, egrep, and fgrep) and has a lot of very flexible options. Check out the man pages if
                    this sounds good to you.</li>
            </ul>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>