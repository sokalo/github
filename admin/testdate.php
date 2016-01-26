 
<?php
$then = '2005-09-01 09:02:23';
$then = new DateTime($then);
 
$now = new DateTime();
 
$sinceThen = $then->diff($now);
 
//Combined
echo $sinceThen->y.' years have passed.<br>';
echo $sinceThen->m.' months have passed.<br>';
echo $sinceThen->d.' days have passed.<br>';
echo $sinceThen->h.' hours have passed.<br>';
echo $sinceThen->i.' minutes have passed.<br>';
?>