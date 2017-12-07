<?php
    $title = "Linux";
    $section = "about_unix";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"
?>
<main role="main" class="container">

    <div class="starter-template">
        <h1>Linux</h1>
        <p class="lead">
            The most popular base variation and what most consumer Unix-like platforms are derived from is the Linux variation.
            There are many open source and enterprise consumer platforms that are built off the Linux kernel
            which are commonly referred to as distributions. They share the same OS software under the hood
            (Linux) but they all implement it differently and come with variations of overlay software that
            changes the user experience and system processes. </p>
    </div>
    <div>
        <p class="lead">
            Some popular distributions of the Linux kernel include:</p>
        <ul>
            <li>OpenSUSE</li>
            <li>Fedora</li>
            <li>Red Hat</li>
            <li>CentOS (based on Red Hat)</li>
            <li>Debian GNU/Linux, which is a widely used Linux distribution from which other consumer distributions like Ubuntu are
                based off of.</li>
        </ul>
    </div>
    <div>
        <p class="lead" style="padding-top: 2em">
            Every top level flavor and lower level distribution usually has countless variations and OS types that share
            similarities and differences. It would be impossible to go through each and every single version of Unix-Like
            systems available, but what is important to note is that each version is in one way or another based off of the
            original Unix system. </p>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>