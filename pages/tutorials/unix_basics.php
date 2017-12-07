<?php
$title = "Unix Basics";
$section = "tutorials";
$next_page = "tutorials/about_commands.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Basic UNIX commands</h1>
            <p class="lead">Here are some of the basic Unix commands you will use.
            </p>
        </div>

        <div>

            <p>Note: not all of these are actually part of UNIX itself, and you may not find them on all UNIX machines.
                But they can all be used on turing in essentially the same way, by typing the command and hitting return.
                Note that some of these commands are different on non-Solaris machines</p>

            <p>If you've made a typo, the easiest thing to do is hit CTRL-u to cancel the whole line. But you can also edit the
                command line. UNIX is case-sensitive.</p>

            <h4>Files</h4>
            <ul>
                <li><b>ls</b> --- lists your files </li>
                <li><b>ls -l</b>--- lists your files in 'long format', which contains lots of useful information, e.g. the exact size of the file,
                    who owns the file and who has the right to look at it, and when it was last modified</li>
                <li><b>ls -a</b>--- lists all files, including the ones whose filenames begin in a dot, which you do not always want to see.</li>
                <li>There are many more options, for example to list files by size, by date, recursively etc.</li>
                <li><b>more filename</b> --- shows the first part of a file, just as much as will fit on one screen. Just hit the space bar to see more or q to quit.
                    You can use /pattern to search for a pattern.</li>
                <li><b>emacs filename</b> --- is an editor that lets you create and edit a file.</li>
                <li><b>mv filename1 filename2</b> --- moves a file (i.e. gives it a different name, or moves it into a different directory (see below)</li>
                <li><b>cp filename1 filename2</b>--- copies a file</li>
                <li><b>rm filename</b> --- removes a file. It is wise to use the option rm -i, which will ask you for confirmation before actually deleting anything.
                    You can make this your default by making an alias in your .cshrc file.</li>
                <li><b>diff filename1 filename2</b>--- compares files, and shows where they differ.</li>
                <li><b>wc filename</b> --- tells you how many lines, words, and characters there are in a file</li>
                <li><b>chmod options filename</b> --- lets you change the read, write, and execute permissions on your files.
                    The default is that only you can look at them and change them, but you may sometimes want to change thes
                    e permissions. For example, chmod o+r filename will make the file readable for everyone, and chmod o-r filename will make
                    it unreadable for others again. Note that for someone to be able to actually look at the file the directories it is in need to be at least executable.
                </li>
            </ul>
            <h5>File Compression</h5>
            <ul>
                <li><b>gzip filename</b> --- compresses files, so that they take up much less space. Usually text files compress to about half their original size,
                    but it depends very much on the size of the file and the nature of the contents.
                    There are other tools for this purpose, too (e.g. compress), but gzip usually gives the highest compression rate.
                    Gzip produces files with the ending '.gz' appended to the original filename.</li>
                <li><b>gunzip filename</b> --- uncompresses files compressed by gzip.</li>
                <li><b>gzcat filename</b> --- lets you look at a gzipped file without actually having to gunzip it (same as gunzip -c). You can even print it directly, using gzcat filename | lpr printing</li>
                <li><b>lpr filename</b> --- print. Use the -P option to specify the printer name if you want to use a printer other than your default printer. For example, if you want to print double-sided,
                    use 'lpr -Pvalkyr-d', or if you're at CSLI, you may want to use 'lpr -Pcord115-d'.
                    See 'help printers' for more information about printers and their locations.</li>
                <li><b>lpq</b> --- check out the printer queue, e.g. to get the number needed for removal, or to see how many other files will be printed before yours will come out.</li>
                <li><b>lprm jobnumber</b> --- remove something from the printer queue. You can find the job number by using lpq. Theoretically you also have to specify a printer name,
                    but this isn't necessary as long as you use your default printer in the department.</li>
                <li><b>genscript</b> --- converts plain text files into postscript for printing, and gives you some options for formatting.
                    Consider making an alias like alias ecop 'genscript -2 -r \!* | lpr -h -Pvalkyr' to print two pages on one piece of paper.
                </li>
                <li><b>dvips filename</b> --- print .dvi files (i.e. files produced by LaTeX). You can use dviselect to print only selected pages. </li>
            </ul>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>