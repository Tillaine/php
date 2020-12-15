<?php 
//check for submit 
if(isset($_POST['name'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $power = htmlentities($_POST['power']);

    $user = [
        'name' => $name,
        'email' => $email, 
        'power' => $power
    ];

    $user = serialize($user);
     setcookie('user', $user, time() + (3600 *4));
    
     echo $_COOKIE['user'];
     
     if(isset($_POST['submit'])){
        header('Location: queen.php');

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact US</title>
    <link rel="stylesheet" 
    href="https://bootswatch.com/4/cosmo/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Sup Bit!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <?php if($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> 
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <lable>Name</lable><br>
                <input class="form-control" type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '';?>">
            </div>
            <div class="form-group">
                <lable>Email</lable><br>
                <input class="form-control" type="text" name="email"
                value="<?php echo isset($_POST['email']) ? $email : '';?>">
            </div>
            <div class="form-group">
                <lable>power</lable><br>
                <textarea class="form-control" type="text" name="power"><?php echo isset($_POST['power']) ? $power : '';?></textarea>
            </div>
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>