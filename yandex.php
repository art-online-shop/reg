<?php
preg_match_all('/(?<=yandex_).*(?=\.html)/',$_SERVER['REQUEST_URI'], $verification);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>Verification: <?php echo $verification[0][0]; ?></body>
</html>
