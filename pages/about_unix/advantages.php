<?php
$title = "Advantages";
$section = "about_unix";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
<main role="main" class="container">

    <div class="starter-template">
        <h1>Advantages and Disadvantages of Unix</h1>
        <p class="lead">
            As with any system, Unix presents itself with both advantages and disadvantages as an operating system.</p>
    </div>
    <div>
        <h2><strong></strong></h2><br/><br/>
        <h3>Advantages:</h3><br/>
        <h4><em>Virtual Memory Usage</em></h4>
        <p>The Unix operating system offers an efficient level of virtual memory. What this means for the user
            is that you can use a number of programs at the same time using only a modest level of physical memory.
            The system can handle several programs at once without severely pulling on the system's resources.</p>
        <h4><em>Toolbox</em></h4>
        <p>This operating system offers a rich collection of small utilities and commands that are designed to carry
            out specific tasks well rather than being cluttered up with a variety of special but insignificant options.
            Unix acts as a well-stocked toolbox rather than attempting to do everything at once.</p>
        <h4><em>Customization</em></h4>
        <p>Unix has the ability to string different utilities and commands together in an unlimited number of configurations
            in order to accomplish a variety of complicated tasks. This operating system is not limited to any pre-configured
            menus or combinations as most ordinary personal computer systems normally are. </p>
        <h4><em>Security</em></h4>
        <p>UNIX has built-in security and permissions features thus giving a solid user security. UNIX assigns permissions
            to the UID and GID of user, based on which the accesses to the files are controlled. All users must be
            authenticated by a valid account and password to use the system at all. All files are owned by particular accounts.
            The owner can decide whether others have read or write access to his files.</p>
        <h4><em>Portability</em></h4>
        <p>Unix is available for use on a variety of different types of machines, making it one of the most portable operating
            systems in existence. Unix can be run on both PC and Macintosh computers and many other computing machines as well.</p><br/><br/>

        <h3>Disadvantages:</h3><br/>
        <h4><em>Interface</em></h4>
        <p>The traditional interface for the Unix operating system is command line based, and this command line shell interface
            is designed for programmer, not the casual user. Unix was developed for use by programmers and serious computer users
            rather than casual users. A graphical user interface (GUI) is also available, but the traditional Unix interface is
            command line only.</p>
        <h4><em>Special Commands</em></h4>
        <p>Commands required by the command line interface often make use of cryptic naming schemes, and do not give much information
            to notify a user of what they are doing. Many commands in the Unix interface require the use of special characters.
            Small, normally insignificant typos can have much greater effects and unexpected results on Unix machines</p>
        <h4><em>Overwhelming Utilities</em></h4>
        <p>While Unix provides many utilities and is a benefit to many, it may be overwhelming to novice user. Also some
            UNIX utilities can prove disastrous if not used correctly.</p>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>
