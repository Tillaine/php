<?php 
$path = 'story.txt';
$content = file_get_contents($path);



if(isset($_POST["submit"])){
    // Get form data
    $newContent = $_POST['content'];

    file_put_contents($path, $newContent);
    $content = file_get_contents($path);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" >
    <title>Write Your Story</title>
</head>
<body>
    <div>
        <h1>Edit your story</h1>
        <div style="width: 70%; margin-left: 10%" class="conatiner">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <textarea class="form-control" id="content" name="content" 
                rows="10" cols="100"><?php echo $content ? $content : "bye" ?></textarea>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>