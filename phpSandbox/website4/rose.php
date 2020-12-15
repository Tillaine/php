<?php
session_start();
// inset session variable 
unset($_SESSION["name"]);

// delete session 
session_destroy();
?>