<?php
require('config/config.php');
require('config/db.php');

$id = mysqli_real_escape_string($conn, $_GET['id']);


$query = 'SELECT * FROM posts WHERE id =  ' .$id;


//get results
$result = mysqli_query($conn, $query);
 
// fetch data 
$post = mysqli_fetch_assoc($result);

//FREE RESULT 
mysqli_free_result($result);

//close Connection 
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" 
    href="https://bootswatch.com/4/cosmo/bootstrap.css">
</head>
<body>
    <div class="container">
    <h1><?php echo $post['title']?></h1>
            <small>Crated at <?php echo $post['created_at'] ?> by 
                <?php echo $post['author']; ?>
            </small>
            <p><?php echo $post['body'] ?></p>
            <a class="btn btn-primary" href=index.php>Go Back</a>
        </div> 

</div>
</body>
</html>