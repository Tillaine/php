<?php 
//check for submit 

$msg = '';
$msgClass = '';

    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $name = $_POST['name'];
        $message = $_POST['message'];
        $email = $_POST['email'];

        if(!empty($email) && !empty($message) && !empty($name)){
            echo 'Yay, submitted';
        } else {
            $msg ="Please fill in all fields";
            $msgClass = "alert-danger";
        }
    };
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
                <input lass="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <lable>Email</lable><br>
                <input lass="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <lable>Message</lable><br>
                <textarea class="form-control" type="text" name="message"></textarea>
            </div>
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>