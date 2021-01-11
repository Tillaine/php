<?php
require('config/db.php');


$query = 'SELECT * FROM posts';

//get results
$result = mysqli_query($conn, $query);
 
// fetch data 
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <h1>Posts</h1>
    <?php foreach($posts as $post) : ?>
        <div class="card" style="width:70%">
            <h3><?php echo $post['title']?></h3>
            <small>Crated at <?php echo $post['created_at'] ?> by 
                <?php echo $post['author']; ?>
            </small>
            <p><?php echo $post['body'] ?></p>
            <a class="btn btn-primary" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
        </div>
    <?php endforeach; ?>

</div>
</body>
</html>