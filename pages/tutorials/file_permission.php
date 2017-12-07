<?php
$title = "File Permission";
$section = "tutorials";
$next_page = "tutorials/connecting_public.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Computing Basics - File Permissions</h1>
            <p class="lead">File permissions are essentially numbers that determine who can manipulate a file or directory.
                These numbers represent the ability to read, write, and execute. For files, this means literally read the contents,
                write or append new contents, or execute the contents if the file is executable. For directories, read means open and
                write means add/remove files. However, it doesn’t really make sense to execute a directory, right? Think of it as
                permission to traverse, as in a user must execute access to bin, for example. Generally, there’s three different
                classifications for a user that would need a designated permission - owner, group, and others.
            </p>
        </div>

        <div>

            <img src="../../assets/media/structure.png" alt="Cli" height="300" width="550">

            <p>Below are the numbers generally used to designate permissions.</p>
            <img src="../../assets/media/permission.png" alt="permission" height="500" width="450">
            <p>For example, a directory would have a permission of 755, which means owner has absolute read/write/execute (rwx),
                while groups and others 	have read/execute (r-x) Significant commands: chmod, chown
            </p>
            <h5>How to use commands:</h5>
            <ul><li>
                    <b> chmod</b><permission designation> <file> - sets the read, write, and execute permissions to the specified file
                </li>
                <li>
                    <b> chown</b> <user> or directories> - sets the specified user as owner of the specified files and directories
                        </li>
            </ul>
            <h5>Quick Tutorial</h5>
            <ol>
                <li>Using the directories created in Directory Structure, let’s change some permissions.</li>
                <li>First, we want to make sure owner (you) can get FULL access of this file. Set the file permission to 755 using the chmod command</li>
                <li>Next, go through and make all subdirectories read only for groups/others (refer to chart above)</li>
            </ol>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>