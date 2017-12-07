<?php
    $title = "Homepage";
    $rel_path_home = "";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Welcome to ThunderFox Unix!</h1>
        <p class="lead">Unix is a powerful operating system, utilized in many computing fields for a variety of tasks. Using this site, you will be able to develop the skills and know-how to take advantage of Unix's benefits over its less advanced albeit less complicated co-operating systems.</p>
        <h3>Quick links</h3>
        <a href="pages/about_landing.php"><img class="land-image" src="assets/media/history_thumb.png" alt="About" title="About Unix" width=400px height="auto"/></a>
        <!--<span>About</span> -->
        <a href="pages/tutorials_landing.php"><img class="land-image" src="assets/media/tutorial_thumb.png" alt="Tutorials" title="Tutorials" width="400px" height="auto"/></a>
        <!--<p>Tutorials</p>-->
        <a href="pages/quizzes_landing.php"><img class="land-image" src="assets/media/quiz_thumb.png" alt="Quizzes" title="Quizzes" width="400px" height="auto"/></a>
        <!--<p>Quizzes</p>-->
        <a href="pages/references_landing.php"><img class="land-image" src="assets/media/ref_thumb.png" alt="References" title="References" width="400px" height="auto"/></a>
        <!--<p>References</p>-->
    </div>
</main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>
