<?php

include('/opt/lampp/htdocs/blog-sofia/config/config.php');

$pdo = new PDO(DRIVER.":host=".HOST.";dbname=".DB, USER, PASS);

?>