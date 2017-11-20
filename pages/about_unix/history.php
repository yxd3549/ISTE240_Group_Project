
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/timelineStyle.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/tutorials.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/tutorials/getting_started.php">Getting Started</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/quizzes.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quizzes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/quizzes/getting_started_quiz.php">Getting Started Quiz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../../pages/references.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">References</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/references/interview_questions.php">Interview Questions</a>
                </div>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="../../pages/about_unix.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About UNIX</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../../pages/about_unix/history.php">History</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us<span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Unix History</h1>
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
                    <h2>1991</h2>
                    <p>Linus Torvalds writes Linux, an open-source OS kernel inspired by Minix.</p>
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


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
