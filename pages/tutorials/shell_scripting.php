<?php
$title = "Shell Scripting";
$section = "tutorials";
$next_page = "tutorials/tar_balls.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Advanced Topics - Shell Scripting</h1>
            <p class="lead">Shell Script was originally created by Steve Bourne, and was named Bourne shell when it was integrated into
                the seventh version of Bell Labs Research Unix.
                It is a very simple scripting/programming language to make task automation easier.
            </p>
        </div>

        <div>
            <p>Typically, every shell script is started with #!/bin/sh or #!/bin/bash (this shows that it is a shell script file being
                used created). Pound signs (#, or hashtags, as they are commonly referred to) are used to signal comments that shouldn’t
                be parsed as code by the computer. (Instead of tutorials, we’ll just offer example code.)
                Our first example will be a simple hello world script. The echo command simply prints the specified text to the console.
            </p>

            <p><b>#!/bin/bash<br>
                    echo Hello World</b>
            </p>

            <p>Given that Shell Scripting is a more beefy topic than most others, there’ll be a few sub topics to cover. Next is loops!
                Loops can be used for a variety of different tasks in shell scripts. Our next example is a for loop that will echo through
                several numbers and print them out in order.</p>

            <p><b>#!/bin/bash<br>
                for number in 1 2 3 4 5<br>
                do<br>
                echo $number<br>
                    done<br></b>
            </p>

            <p>So to elaborate on this script, the “for” loop executes commands within it as long as the conditions of the loop are met.
                In this example, for any number in a list containing 1, 2, 3, 4, and 5, do the following: print the number of the current
                iteration. The first iteration is associated with 1, and the second with 2, so on and so forth.</p>
            <p>For our third example, we’ll go through basic file io. You can use various “redirect” characters to direct input/output
                to files. For example:
            </p>
            <p><b>echo “This is a file” > file.txt</b></p>

            <p>This example will take “This is a file” and write it into a text file named file.txt. A single > directs output,
                while >> would append. So if we took the same file and added this, This would append “And now we have more data” to
                the original string, rather than writing over.
            </p>
            <p><b>echo “And now we have more data” >> file.txt</b>
            </p>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>