<? 
//can use if, else if (elseif has no space), and else statements and ternary as in java scripts
// == and === are the same as JS
    $num = 2;
    $num > 1 ? $num ++ : $num +=5;
    echo $num;

    if($num < 10 AND $num > 1) {
        echo '<br>';
        echo 'between 1 and 10: ';
        echo 'true';
    }
    if($num < 10 && $num > 1) {
        echo '<br>';
        echo 'between 1 and 10: ';
        echo 'true again';
    }
    if($num < 10 OR $num > 1) {
        echo '<br>';
        echo 'greater THAN 5 OR < 10: ';
        echo 'true again';
    }
    if($num < 10 XOR $num > 1) {
        # one must be true but both cannot be true 
        echo '<br>';
        echo 'greater THAN 5 OR < 10: ';
        echo 'true again';
    } elseif ($num < 10 OR $num > 1){
        echo '<br>';
        echo 'mutually exclusive';
    } else {
        echo " it's not me it's you... ";
    }

    # switch 
    $favcolor = 'green';
    switch($favcolor){
        case 'green':
            echo 'your fav is green';
            break;
        case 'mustard':
            echo 'not your fav';
            break;
        default: 
            echo 'your fav is green';
        break;
    }

?>

