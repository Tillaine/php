<?php
/*
//check for posted data
// if(filter_has_var(INPUT_POST, 'data')){
//     echo 'DATA FOUND';

// } else {
//  echo "DATA NOT FOUND" ;
// }

if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    //remove illega chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email. '<br>';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email is valid";
    } else {
       echo "Enter a valid email address";
    }

} 


$var = '23h';

if (filter_var($var, FILTER_VALIDATE_INT)){
    echo $var. ' is a number';
} else {
    echo $var. ' is not a number';
}
//FILTER OUT ALL NON NUMBERS
$var= '32q23424nkjkl24k2';
var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT))

$var = '<script>alert(powned)</script>';
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
*/

$filters = [
    'data' => FILTER_VALIDATE_EMAIL,
    "data2" => [
        "filter" => FILTER_VALIDATE_INT,
        "options" => [
            "min_range" => 1,
            "max_range" => 100
        ]
    ]
        ];

print_r(filter_input_array(INPUT_POST, $filters));

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>