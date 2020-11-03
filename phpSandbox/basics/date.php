<? 
// echo date('d'); day
// echo date('m'); month
// echo date('Y'); year
// echo date('l');  day of the week 
// echo date('h');  hour
// echo date('i');  minutes
// echo date('s');  seconds
// echo date('a');  am/pm
// timezone
// date_default_timezone_set('America/Los_Angeles');
// echo date('h:i:sa');  

// $timestamp = mktime(1, 10, 43, 5, 28, 1986);
// $timestamp2 = strtotime('monday');
// $timestamp2 = strtotime('tomorrow');
$timestamp2 = strtotime('+2 days');
echo date('m/d/Y', $timestamp2);

?>