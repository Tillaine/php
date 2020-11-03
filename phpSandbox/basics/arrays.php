<!-- indexed 
associative
multidemnional 

indexed -->

<?
echo 'indexed ';
 $people = array('Brittany', 'Bit', 'lilbit' );
 $colors = ['red', 'blue'];
 $colors[] = 'green';
 echo $people[0];
 echo print_r($colors);
 echo count($people);
?>

 <!-- associative arrays -->
<?
$nickNames = array('Nene' => 4, 'bossLady' => 7, 'charm' => 13, 'lilbit' => 20, 'bit' => 33);
$ids = [1 => 'Dexter', 2 => 'Candy', 3 => 'lucky'];
echo $nickNames['bit'];
echo $ids[2];
$nickNames['Strawberry'] = 11;
print_r($nickNames);

$cars = array(
    array('Vrooda', 13, 7),
    array('Tessan', 23, 3),
    array('Coobishi', 14, 4),
);
echo $cars[2][2];

?>

<!-- muilidemntional array -->
