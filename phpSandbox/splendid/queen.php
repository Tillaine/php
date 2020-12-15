<?php
    $user = unserialize($_COOKIE['user']);
    $power = $user['power'];
?>

<h1>This Queen can <?php echo $power ?> !</h1>