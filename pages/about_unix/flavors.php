
<?php
    $title = "Flavors of Unix"; /* Title to be show in tab*/
    $section = "about_unix";
    $rel_path_home = "../../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Do Not Change*/ require_once $rel_path_home . "assets/php/page_start.php"; /* Do Not Change*/

    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"; /* utilities has the quiz grading methods and maybe others in the future, but not all pages use this */
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Versions/Flavors of Unix</h1>
        <p class="lead">
            The Unix system is the original open operating system that was developed, however there
            are multiple versions and sub-versions of operating systems based on the Unix system that
            are used in a variety of applications, commonly known as the various ‘flavors’ of Unix.
            A list of the most common high level flavors of unix found in the industry include:</p>
    </div>
    <div>
        <ul>
           <li>AIX by IBM</li>
           <li>BSD/OS (BSDi) by Wind River</li>
           <li>CLIX by Intergraph Corp.</li>
           <li>Tru64 Unix (formerly Digital Unix) by Compaq Computer Corp.</li>
           <li>DYNIX/ptx by IBM (formerly by Sequent Computer Systems)</li>
           <li>Esix Unix Esix Systems</li>
           <li>FreeBSD by FreeBSD Group</li>
           <li>GNU Herd by GNU Organization</li>
           <li>HAL SPARC64/OS by HAL Computer Systems, Inc.</li>
           <li>HP-UX by Hewlett-Packard Company</li>
           <li>Irix by Silicon Graphics, Inc.</li>
           <li>LynxOS by Lynx Real-Time Systems, Inc.</li>
           <li>MacOS X Server by Apple Computer, Inc.</li>
           <li>NetBSD by NetBSD Group</li>
           <li>NonStop-UX by Compaq Computer Corporation</li>
           <li>OpenBSD by OpenBSD Group</li>
           <li>OpenLinux by Caldera Systems, Inc.</li>
           <li>Openstep by Apple Computer, Inc.</li>
        </ul>
    </div>
    <div class="starter-template">
        <p class="lead">
            Then of course there’s the Linux flavor of Unix, by far the most popular base variation and what most
            consumer Unix-like platforms are derived from. Learn more about Linux <a href="<?=URL_PAGES?>about_unix/linux.php">here.</a>
        </p>
    </div>

</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>