
<?php
    $title = "Unix History"; /* Title to be show in tab*/
    $section = "about_unix";
    $rel_path_home = "../../"; /* relative path to the home directory. Ex: "../../ or "" */

    /* Do Not Change*/ require_once $rel_path_home . "assets/php/page_start.php"; /* Do Not Change*/

    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"; /* utilities has the quiz grading methods and maybe others in the future, but not all pages use this */
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Unix History Timeline</h1><br/><br/>
        <div class="timeline">
            <div class="timecontainer left">
                <div class="content">
                    <h2>1969</h2>
                    <p>AT&T-owned Bell Laboratories withdraws from development of Multics, a pioneering but overly complicated
                        time-sharing system. Some important principles in Multics were to be carried over into Unix. <br/><br/>
                        Ken Thompson at Bell Labs writes the first version of an as-yet-unnamed operating system in assembly
                        language for a DEC PDP-7 minicomputer.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1970</h2>
                    <p>Thompson's operating system is named Unics, for Uniplexed Information and Computing Service.
                        The name would later be mysteriously changed to Unix.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1971</h2>
                    <p>The first edition of the Unix Programmer's Manual, written by Thompson and Dennis Ritchie, is published.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1972</h2>
                    <p>Ritchie develops the C programming language.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1973</h2>
                    <p>Unix matures. The "pipe" is added to Unix; this mechanism for sharing information between
                        two programs will influence operating systems for decades. Unix is rewritten from assembler into C..</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1974</h2>
                    <p>"The UNIX Timesharing System," by Ritchie and Thompson, appears in the monthly journal of the Association
                        for Computing Machinery. The article produces the first big demand for Unix.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1976</h2>
                    <p>Bell Labs programmer Mike Lesk develops UUCP (Unix-to-Unix Copy Program) for the network transfer of files,
                        e-mail and Usenet content.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1977</h2>
                    <p>Unix is ported to non-DEC hardware, including the IBM 360.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1978</h2>
                    <p>Bill Joy, a graduate student at UC Berkeley, sends out copies of the first Berkeley Software Distribution
                        (1BSD), essentially Bell Labs' Unix v6 with some add-ons. BSD becomes a rival Unix branch to AT&T's Unix;
                        its variants and eventual descendents include FreeBSD, NetBSD, OpenBSD, DEC Ultrix, SunOS, NeXTstep/OpenStep
                        and Mac OS X.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1980</h2>
                    <p>4BSD, with DARPA sponsorship, becomes the first version of Unix to incorporate TCP/IP.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1982</h2>
                    <p>Bill Joy co-founds Sun Microsystems to produce the Unix-based Sun workstation.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1983</h2>
                    <p>AT&T releases the first version of the influential Unix System V, which would later
                        become the basis for IBM's AIX and Hewlett-Packard's HP-UX.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1984</h2>
                    <p>X/Open Co., a European consortium of computer makers, is formed to standardize Unix
                        in the X/Open Portability Guide.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1985</h2>
                    <p>AT&T publishes the System V Interface Definition, an attempt to set a standard for how Unix works.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1986</h2>
                    <p>Rick Rashid and colleagues at Carnegie Mellon University create the first version of Mach, a replacement
                        kernel for BSD Unix.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1987</h2>
                    <p>AT&T Bell Labs and Sun Microsystems announce plans to co-develop a system to unify the two major Unix
                        branches.<br/><br/>
                        Andrew Tanenbaum writes Minix, an open-source Unix clone for use in computer science classrooms.
                    </p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1988</h2>
                    <p>The IEEE publishes Posix (Portable Operating System Interface for Unix), a set of standards for
                        Unix interfaces.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1991</h2>
                    <p>Linus Torvalds writes Linux, an open-source OS kernel inspired by Minix.</p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1992</h2>
                    <p>The Linux kernel is combined with GNU to create the free GNU/Linux operating
                        system, which many refer to as simply "Linux."</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>1993</h2>
                    <p>AT&T sells its subsidiary Unix System Laboratories and all Unix rights to Novell.
                        Later that year, Novell transfers the Unix trademark to the X/Open group.<br/><br/>
                        Microsoft introduces Windows NT, a powerful, 32-bit multiprocessor operating system.
                        Fear of NT spurs true Unix-standardization efforts
                    </p>
                </div>
            </div>
            <div class="timecontainer left">
                <div class="content">
                    <h2>1996</h2>
                    <p>X/Open merges with the OSF (A Unix dev group formed by HP and IBM) to form The Open Group.</p>
                </div>
            </div>
            <div class="timecontainer right">
                <div class="content">
                    <h2>2002</h2>
                    <p>The Open Group announces Version 3 of the Single Unix Specification.</p>
                </div>
            </div>
        </div>
    </div>

</main><!-- /.container -->


<?php
    require_once PATH_PHP . "footer.php";
?>
