
<?php
    $title = "About Unix"; /* Title to be show in tab*/
    $section = "about_unix";
    $rel_path_home = "../../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Do Not Change*/ require_once $rel_path_home . "assets/php/page_start.php"; /* Do Not Change*/

    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"; /* utilities has the quiz grading methods and maybe others in the future, but not all pages use this */
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Why Use Unix?</h1>
        <p class="lead">
            Unix has countless uses in all sectors of technology including industry as well as education. And there's a
            reason why!</p>
    </div>
    <div>
        <ul>
            <li><h3>In Industry:</h3>
                <p>Systems using Unix are found all across the board in professional environments running vital applications
                    in high availability infrastructures.</p><br/>
                <p> Unix makes a great platform for utility servers such as Domain Name System,
                    or DNS, Dynamic Host Configuration Protocol, or DHCP, and Web servers. Its lean
                    architecture preserves resources for the actual applications that you want to run,
                    rather than consuming them just to boot the operating system itself. </p><br/>
                <p>Unix also provides a stable and secure platform for applications that do not require direct user
                    interaction with the operating system..</p><br/>
            </li><br/>
            <li><h3>In Education:</h3>
                <p>Systems using Unix can be found everywhere in the world of academics for the purposes of teaching students
                    both basic and advanced topics in computing.</p><br/>
                <p> Unix is a valuable platform for teaching system administration tasks as well as basic principles of
                    computing. This is also done with the added bonus of teaching in an environment more closely aligned
                    with the environments found in the real world.</p><br/>
                <p>Unix also has native tools and functions built in which makes it the system of choice when teaching
                    programming and scripting in a multitude of languages without the need for bulky development environments
                    and system emulators. </p><br/>
            </li><br/>
        </ul>
    </div>
</main><!-- /.container -->

<?php
    require_once PATH_PHP . "footer.php";
?>
