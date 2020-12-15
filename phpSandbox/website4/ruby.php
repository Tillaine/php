<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];


?>


<h1 style="color:#e0115f">You have reached Ruby </h1>

<h2>how was Garnet, <?php echo $name?></h2>