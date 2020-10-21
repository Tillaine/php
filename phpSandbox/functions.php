<?
function simpleFunction() {
    echo 'Greeting Title';
    echo '<br>';
} 
simplefunction();

function greetings($name = 'Queen'){
    echo "Hi, $name";
    echo '<br>';
}

function addNum($num1, $num2){
    return $num1 + $num2;
}
$mynum = 2;

function addFive($num){
    return $num += 5;
}
function addTen(&$num){
    return $num += 5;
}

greetings('Bit');
greetings();
echo '<br>';
echo "add five value";
echo '<br>';
echo addFive($mynum);
echo '<br>';
echo $mynum;
echo '<br>';
echo "add ten refernce";
echo '<br>';
echo addTen($mynum);
echo '<br>';
echo $mynum;

?>
