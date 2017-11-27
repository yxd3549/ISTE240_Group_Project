<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?> | ThunderFox Unix</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=PATH_CSS?>bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=PATH_CSS?>style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?=PATH?>index.php">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=PATH_PAGES?>tutorials.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorials</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=PATH_PAGES?>tutorials/getting_started.php">Getting Started</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=PATH_PAGES?>quizzes.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quizzes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=PATH_PAGES?>quizzes/cli_quiz.php">Command Line Interface Quiz</a>
                    <a class="dropdown-item" href="<?=PATH_PAGES?>quizzes/directory_structure_quiz.php">Directory Structure Quiz</a>
                    <a class="dropdown-item" href="<?=PATH_PAGES?>quizzes/file_permissions_quiz.php">File Permissions Quiz</a>
                    <a class="dropdown-item" href="<?=PATH_PAGES?>quizzes/getting_started_quiz.php">Getting Started Quiz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=PATH_PAGES?>references.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">References</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=PATH_PAGES?>references/interview_questions.php">Interview Questions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=PATH_PAGES?>about_unix.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About UNIX</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?=PATH_PAGES?>about_unix/history.php">History</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=PATH_PAGES?>about_us.php">About Us<span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>