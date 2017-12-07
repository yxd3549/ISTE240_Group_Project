<?php
$title = "About Us";
$rel_path_home = "../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php";
?>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>About Us</h1>
        </div>
        <p class="lead">Thuderfox is composed of a group of 6 students at the Rochester Institute of Technology:</p>
        <ul>
            <li>Diaz, Yancarlos</li>
            <li>DiOrio, Louis</li>
            <li>Floss, Jacob</li>
            <li>Golchla, Abhi</li>
            <li>Lin, Aiden</li>
            <li>Wilkins, Bakari</li>
        </ul>
        <h3>The Site</h3>
        <p>ThunderFox Unix is a tutorial website for people who want to learn
        about Unix. Our target audience includes students in computing majors,
        professors, and anyone interested in Unix as an operating system.</p>
        <p>To satisfy our audience's needs, we added detailed tutorials as well
        as quizzes to test how much users could retain. We also included a list of
        references that users can take advantage of at any points</p>
        <p>As an extra touch, we decided to facilitate usability for people with
        disabilities. Our website is color-blind friendly and can be also enjoy by
        the older users with problems such as trembling hands or blurry vision</p>
        <h3>Technologies</h3>
        <p>We used php extensively to allow for an easily expandable website. Furthermore,
        the quizzes are validated with javascript to improve the user experience. Finally,
        our style is heavily based on bootstrap, which provides very smooth
        displays on various devices.</p>
        <h3>Sources</h3>
        <ul>
            <li>https://en.wikibooks.org/wiki/A_Quick_Introduction_to_Unix/Directory_Structure</li>
            <li>http://www.december.com/unix/tutor/filesystem.html</li>
            <li>https://www.tutorialspoint.com/unix/unix-file-permission.html</li>
            <li>https://networking.ringofsaturn.com/</li>
            <li>https://www.lifewire.com/bash-for-loop-examples-2200575</li>
            <li>https://www.shellscript.sh/</li>
            <li>https://kb.iu.edu/d/acfi</li>
            <li>http://mally.stanford.edu/~sr/computing/basic-unix.html</li>
            <li>https://www.gcflearnfree.org/computerbasics/understanding-operating-systems/1/</li>
            <li>https://earthsci.stanford.edu/computing/unix/overview/advantages.php</li>
            <li>https://www.techwalla.com/articles/advantages-disadvantages-of-the-unix-operating-system</li>
            <li>https://itstillworks.com/advantages-disadvantages-unix-operating-system-1486.html</li>
            <li>https://www.networkworld.com/article/2260700/software/timeline--40-years-of-unix.html</li>
            <li>http://the.earth.li/~sgtatham/putty/0.53b/htmldoc/Chapter2.html</li>
            <li>https://gist.github.com/LeCoupa/122b12050f5fb267e75f</li>
            <li>https://learncodethehardway.org/unix/bash_cheat_sheet.pdf</li>
            <li>https://csg.sph.umich.edu/docs/Unix_Commands.pdf </li>
            <li>http://osr600doc.sco.com/en/HDK_oddi/posunix_gloss.html</li>

        </ul>

    </main><!-- /.container -->


<?php
require_once PATH_PHP . "footer.php";
?>