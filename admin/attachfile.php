<?php

$filename =$_REQUEST["filename"]; // of course find the exact filename.... 

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers 
header('Content-Type: application/zip');

header('Content-Disposition: attachment; filename="'.$filename.'";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));

readfile($filename);

exit;
?>