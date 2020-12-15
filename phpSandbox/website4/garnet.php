<?php
        session_start(); //start session 

        $_SESSION['name'] = htmlentities($_POST['name']); 
        $_SESSION['email'] = htmlentities($_POST['email']); 
        header('Location:pearl.php');
        exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions</title>
    <link rel="stylesheet" 
    href="https://bootswatch.com/4/cosmo/bootstrap.css">
</head>
<body>
    <h1>Garnet to Pearl <?php echo $name ?></h1>
    <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <lable>Name</lable><br>
                <input class="form-control" type="text" name="name" >
            </div>
            <div class="form-group">
                <lable>Email</lable><br>
                <input class="form-control" type="text" name="email">
            </div>
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="ruby.php">Go To Ruby</a>
    </div>

</body>
</html>