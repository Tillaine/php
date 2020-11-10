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
*/
// replace all occurences of a search string. str_replace(original, replacement, wholeString)
$text = 'Hello, World';
$output = str_replace('World', 'Humans', $text);
echo $output;
?>