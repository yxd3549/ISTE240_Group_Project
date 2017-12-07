<?php
$title = "Directory Structure";
$section = "tutorials";
$next_page = "tutorials/file_permission.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Computing Basics - Directory structure</h1>
            <p class="lead">All unix files are together in what’s known as a “directory structure”. This structure is like a
                family tree of “directories”, or what is commonly called a file (this is a common mistake, a DIRECTORY is what
                FILES are stored in!). Unix varies from other popular operating systems like Windows as, instead of showing different
                physical storage devices each with their own root, Unix integrates everything into one root folder. Due to this, the
                structure is considered logical rather than physical. For example, if a computer had a CD drive, it would appear as a
                folder labeled cd.

            <br><br>
                The best way to think about this is like a family tree, where the oldest ancestors are at the top
                (the root, or PARENT directory) and all subdirectories (CHILD directories) are stored within it further down the tree.
            </p>

        </div>

        <div>
            <h4>Significant commands:</h4>
            <p>mkdir, rmdir, mv, cp, pwd, cd</p>
            <img src="../../assets/media/structure2.png" alt="Cli" height="300" width="550">

            <h5>How to use commands:</h5>
            <ul>
                <li><b>mkdir</b><name> - makes a directory with the specified name</li>
                <li><b>rmdir</b> <name> - removes directory with the specified name if it exists</li>
                <li><b>mv</b><source name> <destination name> - moves source file to destination</li>
                <li><b>cp</b><source> <destination> - copies source file to destination</li>
                <li><b>pwd</b>- stands for print working directory, prints the directory the user is currently manipulating</li>
                <li><b>cd</b><destination> - stands for change directory. Moves user to indicated directory</li>
                <li><b>ls</b> - lists all subdirectories within current directory</li>
            </ul>
            <h5>Quick tutorial</h5>
            <ol>
                <li>Make a new directory using mkdir. In this case, we’ll call it testdir</li>
                <li>Change directory to testdir</li>
                <li>Make two directories within testdir - name them dir1 and dir2</li>
                <li>List all directories within testdir</li>
                <li>Change directory to dir2</li>
                <li>Print the directory that you’re currently in</li>
            </ol>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>