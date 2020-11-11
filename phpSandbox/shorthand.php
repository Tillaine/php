<?php
$loggedIn = false;
/*
// conditional 
// if($loggedIn){
//     echo "you are logged in";
// } else {
//     echo "you are not logged in";
// };
// ternary 
echo ($loggedIn) ? "you are logged in" :  "you are not logged in";
$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;

$age = 7;
$score = 11;

echo 'your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional')
: ($age > 10 ? 'Needs Work' : 'Average'));
*/


?>
<div> 
    <?php if($loggedIn): ?>
        <h1> Welcome Bit! </h1>
    <?php else: ?>
        <h1> Welcome Guest! </h1>
    <?php endif; ?>
</div>