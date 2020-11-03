<?php 
if(isset($_GET['name'])){
    //secure inputs by rendering scripts harmless htmlentities
    // print_r($_GET);
    echo htmlentities($_GET['name']); 
    // echo $_GET['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Site</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <lable>Name</lable><br>
            <input type="text" name="name">
        </div>
        <div>
            <lable>Email</lable><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>