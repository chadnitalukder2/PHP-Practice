<!-- Cookie : computer akti file make kore and sei file difrent information save kore rake-->

<?php
//setcookie(name, value, expire, path, domian, secure, httponly );

setcookie('cname', 'Technology village', time()+20000, '/'); //delete korte hole (-) dite hobe
$_COOKIE['cname'];
?>