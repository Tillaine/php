<?php 
if(isset($_GET['name'])){
    //secure inputs by rendering scripts harmless htmlentities
    // print_r($_GET);
    $name = htmlentities($_GET['name']);
    // echo $name; 
    // echo $_GET['name'];
}

/*
if(isset($_POST['name'])){
    
    $email = htmlentities($_POST['email']);
    echo  $email;
}
// request will work for get and post
if(isset($_REQUEST['name'])){
    
    print_r($_REQUEST); 
    $NAME = htmlentities($_POST['name']);
}
*/
// echo $_SERVER['QUERY_STRING'];



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
    <ul>
        <li> 
            <a href="get_post.php?name=Bit"> Bit </a> 
        </li>
        <li> 
            <a href="get_post.php?name=Brittany">Brittany</a> 
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile" ?></h1>
</body>
</html>