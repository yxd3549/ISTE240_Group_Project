<?php
    $title = "Common Interview Questions";
    $rel_path_home = "../../";
    require_once $rel_path_home . "assets/php/page_start.php";
    require_once PATH_PHP . "head.php";
    require_once PATH_PHP . "utilities.php"
?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Frequently Asked Interview Questions</h1>
        <p class="lead">If you have a job interview for a job that requires UNIX knowledge, you might want to be
        be ready to answer some technical questions about UNIX. We provide you with 38 frequently asked
        questions and their answers. We hope it helps!</p>
    </div>
    <ol><?php readQuestions();?></ol>

</main><!-- /.container -->

<div id="footer">
    This project was created by ThunderFox
    <p>
        Jake      | Louis  |  Abhigyan<br>
        Yancarlos | Bakari |  Aiden
    </p>
</div>
<!-- LAYER TWO -->
<div id="secondfooter">
    Created for ISTE 240 Group project
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
