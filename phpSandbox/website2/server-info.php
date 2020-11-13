<?
// server super global 
// ? create server array 
$server = [
   'hostServerName' => $_SERVER['SERVER_NAME'],
   'hostHeader' => $_SERVER['HTTP_HOST'],
   'serverSoftware' => $_SERVER['SERVER_SOFTWARE'],
   'documentRoot' => $_SERVER['DOCUMENT_ROOT'],
   'currentPage' => $_SERVER['PHP_SELF'],
   'scriptName' => $_SERVER['SCRIPT_NAME'],
   'absolutePath' => $_SERVER['SCRIPT_FILENAME'],

];

$client = [
    'clientSystemInfo' => $_SERVER['HTTP_USER_AGENT'], 
    'clientIP' => $_SERVER['REMOTE_ADDR'],
    'remotePort' => $_SERVER['REMOTE_PORT'],
];

?>