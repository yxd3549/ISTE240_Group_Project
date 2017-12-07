<?php

    $section = "about_unix";
    $title = "What is Unix?";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"
?>
<main role="main" class="container">

    <div class="starter-template">
        <h1>What Even is Unix?</h1>
        <p class="lead">
            Unix (officially UNIX) is a registered trademark of The Open Group that refers to a family of
            computer operating systems and tools conforming to The Open Group Base Specification, Issue 7
            (also known as POSIX.1-2008 or IEEE Std 1003.1 - 2008). To use the Unix trademark, an operating
            system vendor must pay a licensing fee and annual trademark royalties to The Open Group. Officially
            licensed Unix operating systems (and their vendors) include OS X (Apple), Solaris (Oracle), AIX (IBM),
            IRIX (SGI), and HP-UX (Hewlett-Packard).</p>

        <div style="text-align: left;">Note:<br/>
            Operating systems that behave like Unix systems and provide similar utilities, but do not conform to Unix
            specification or are not licensed by The Open Group, are commonly known as Unix-like systems. These include
            a wide variety of Linux distributions (e.g., Red Hat Enterprise Linux, Ubuntu, and CentOS) and several descendants
            of the Berkeley Software Distribution operating system (e.g., FreeBSD, OpenBSD, and NetBSD).
        </div><br/><br/>
        <h1>What makes Unix so Great?</h1>
        <p class="lead">
            Unix was developed using a high-level programming language (C) instead of platform-specific assembly language,
            enabling its portability across multiple computer platforms. Unix also was developed as a self-contained software
            system, comprising the operating system, development environment, utilities, documentation, and modifiable source code.
            These key factors led to widespread use and further development in commercial settings, and helped Unix and its variants
            become an important teaching and learning tool used in academic settings.
        </p>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>