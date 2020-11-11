<?php 
/*
$output = substr('Hello', -2); 
// substr('Hello', 1, 3); => ell
// (str, start, end)
// the second parameter is a number indicating when to start the substring. iclusive
// to move from back to front, use a negative number substr('Hello', -2); => lo 
echo $output;



// length 
$output = strlen('Hello World');
echo $output


string position finds 

$output = strrpos('Brittany', 't');
// find first occurance of a char ina a string strpos('Brittany', 't'); -> 3
// find the last occurance strpos('Brittany', 't'); -> 4
echo $output

// trim white space
$text = "Hello world            ";
// var_dump($text); -> string(23) "Hello world            "
$trimmed = trim($text); 

// var_dump($trimmed); -> string(11) "Hello world"

// strtoupper lower to uppercase

$output = strtoupper('Hello Brittany!');
echo $output; -> HELLO BRITTANY!
// strtlower upper to lowercase

$output = strtolower('Hello Brittany!');
echo $output; -> hello brittany!
// Title case ucwords

$output = ucwords('hello, bit!');
echo $output; -> Hello, Bit!
// replace all occurences of a search string. str_replace(original, replacement, wholeString)
$text = 'Hello, World';
$output = str_replace('World', 'Humans', $text);
echo $output;
// check if value is a string is_string
$val = 'Hello';
$output = is_string($val); -> 1
echo $output;

$values = [true, false, null, "Hello", 21, 32, 0, '0', 90.23, "34"];

foreach($values as $value) {
    if(is_string($value)){
        print "<br> {$value} is a string";
    }
}
*/
$string = "I'm baby listicle irony kogi, art party kinfolk waistcoat 
austin whatever adaptogen echo park salvia fingerstache cold-pressed. 
Lumbersexual photo booth tofu scenester try-hard crucifix keffiyeh 
vaporware yr listicle sriracha selfies. Meh chartreuse taiyaki, 
humblebrag keffiyeh helvetica sustainable actually palo santo iPhone 
marfa. Tumblr hot chicken hashtag knausgaard lyft offal street art 
scenester succulents whatever kale chips. Coloring book plaid l
etterpress typewriter chicharrones humblebrag kickstarter, lomo 
semiotics mumblecore lo-fi locavore shaman. Shabby chic chillwave 
hot chicken, fingerstache meditation fixie subway tile microdosing. 
Cornhole man bun venmo meggings plaid tilde cray gluten-free.";

$compressed =gzcompress($string);
echo $compressed;
$original = gzuncompress($compressed);
echo $original;
?>
