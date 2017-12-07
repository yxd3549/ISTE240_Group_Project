<?php
$title = "Tar Balls";
$section = "tutorials";
$next_page = "tutorials/debugging_scripts.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Tar Balls</h1>
            <p class="lead">In Unix, the name of the tar command is short for tape archiving, the storing of entire file systems onto magnetic tape, which is one use for the command. However, a more common use for tar is to simply combine a few files into a single file, for easy storage and distribution.
                To combine multiple files and/or directories into a single file, use the following command:
                tar -cvf file.tar inputfile1 inputfile2
                Replace inputfile1 and inputfile2 with the files and/or directories you want to combine. You can use any name in place of file.tar, though you should keep the .tar extension. If you don't use the f option, tar assumes you really do want to create a tape archive instead of joining up a number of files. The v option tells tar to be verbose, which reports all files as they are added.
                To separate an archive created by tar into separate files, at the shell prompt, enter:
                tar -xvf file.tar
            </p>
        </div>

        <div>
            <h3>Known what you're using </h3>
            <p>Many modern Unix systems, such as Linux, use GNU tar, a version of tar produced by the Free Software Foundation. If your system uses GNU tar, you can easily use gzip (the GNU file compression program) in conjunction with tar to create compressed archives. To do this, enter:</p>
            <p>
                tar -cvzf file.tar.gz inputfile1 inputfile2

            </p>
            <p>
                Here, the z option tells tar to zip the archive as it is created. To unzip such a zipped tar file, enter:
                tar -xvzf file.tar.gz

            </p>

            <p>Alternatively, if your system does not use GNU tar, but nonetheless does have gzip, you can still create a compressed tar file, via the following command:</p>
            <p> tar -cvf - inputfile1 inputfile2 | gzip > file.tar.gz</p>

            <p>Note:</p>
            <p>If gzip isn't available on your system, use the Unix compress command instead. In the example above, replace gzip with compress and change the .gz extension to .Z (the compress command specifically looks for an uppercase Z). You can use other compression programs in this way as well. Just be sure to use the appropriate extension for the compressed file, so you can identify which program to use to decompress the file later.</p>
            <p>If you are not using GNU tar, to separate a tar archive that was compressed by gzip, enter:</p>

            <p>gunzip -c file.tar.gz | tar -xvf -</p>

            <p>Similarly, to separate a tar archive compressed with the Unix compress command, replace gunzip with uncompress.
                Lastly, the extensions .tgz and .tar.gz are equivalent; they both signify a tar file zipped with gzip.
            </p>


            <h3>Additional information: </h3>
            <p>Keep the following in mind when using the tar command:</p>
            <ul><li>The order of the options sometimes matters. Some versions of tar require that the f option be immediately followed by a space and the name of the .tar file being created or extracted.</li></ul>
            <ul><li>Some versions require a single dash before the option string (e.g., -cvf).</li></ul>

            <p>GNU tar does not have either of these limitations.</p>

            <p>The tar command has many additional command options available. For more information, consult the manual page. At the shell prompt, enter:
                man tar

            </p>

            <p>GNU tar comes with additional documentation, including a tutorial, accessible through the GNU Info interface. You can access this documentation by entering:
                info tar
            </p>


            <?php
            require_once PATH_PHP . "next.php";
            ?>

        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>