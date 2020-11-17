<?php 
//check for submit 

$msg = '';
$msgClass = '';

    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $name = htmlspecialchars($_POST['name']); 
        $message = htmlspecialchars($_POST['message']);
        $email = htmlspecialchars($_POST['email']);

        if(!empty($email) && !empty($message) && !empty($name)){
           //CHECK EMAIL
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
                $msg = "Please enter a valid email";
                $msgClass = "alert-danger";
           } else {
               //passed
                $toEmail = 'creative@tillaine.com';
                $subject = 'Contact Request Form PHP From ' .$name;
                $body = '<h2>  Contact Request</h2>
                    <h4> Name</h4> <p>' .$name.' </p>
                    <h4> Email</h4> <p>' .$email.' </p>
                    <h4> Message</h4> <p>' .$message.' </p>';
            //headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-Type: text/html;charset=UTF-8" . "\r\n";

            //additional headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    //email sent success
                    $msg = "We got your message!";
                    $msgClass = "alert-success";
                } else {
                    $msg = "Your Email Was Not Sent";
                    $msgClass = "alert-danger";
                }

           }
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
                <input class="form-control" type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '';?>">
            </div>
            <div class="form-group">
                <lable>Email</lable><br>
                <input class="form-control" type="text" name="email"
                value="<?php echo isset($_POST['email']) ? $email : '';?>">
            </div>
            <div class="form-group">
                <lable>Message</lable><br>
                <textarea class="form-control" type="text" name="message"><?php echo isset($_POST['message']) ? $message : '';?></textarea>
            </div>
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>