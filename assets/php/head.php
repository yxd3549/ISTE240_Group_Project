<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?> | ThunderFox Unix</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL_CSS?>bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=URL_CSS?>style.css" rel="stylesheet">
    <link href="<?=URL_CSS?>timelineStyle.css" rel="stylesheet">
</head>

<body>
<div class="above-nav" style="background-color: #302ba3;">
    <div class="row">
        <div class="col-md-12 logo">
            <a href="<?=URL?>index.php"><img src="<?=URL_MEDIA?>logoReee.png" alt="Logo" width="auto" height="auto" id="logo"/></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?=URL?>index.php">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=URL_PAGES?>tutorials.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=URL_PAGES?>tutorials/getting_started.php">Getting Started</a>

                    <a class="dropdown-item" href="<?=URL_PAGES?>tutorials/debugging_scripts.php">Debugging Scripts</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>tutorials/tarballs.php">Tar Balls</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=URL_PAGES?>quizzes.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quizzes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=URL_PAGES?>quizzes/cli_quiz.php">Command Line Interface Quiz</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>quizzes/directory_structure_quiz.php">Directory Structure Quiz</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>quizzes/file_permissions_quiz.php">File Permissions Quiz</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>quizzes/getting_started_quiz.php">Getting Started Quiz</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>quizzes/shell_scripting_quiz.php">Shell Scripting Quiz</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>quizzes/tarballs_quiz.php">Tarballs Quiz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=URL_PAGES?>references.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">References</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=URL_PAGES?>references/glossary.php">Glossary</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>references/cli_shortcuts.php">CLI Shortcuts</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>references/io_redirectors.php">I/O Redirectors</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>references/process_handling.php">Process Handling</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>references/interview_questions.php">Interview Questions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=URL_PAGES?>about_unix.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About UNIX</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=URL_PAGES?>about_unix/history.php">History</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>about_unix/flavors.php">Flavors of Unix</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>about_unix/linux.php">Linux</a>
                    <a class="dropdown-item" href="<?=URL_PAGES?>about_unix/uses.php">Uses of Unix</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL_PAGES?>about_us.php">About Us<span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>