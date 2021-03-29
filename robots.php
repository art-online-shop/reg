
<?php
header( "Content-Type: text/plain; charset=utf-8" );

switch ($_SERVER['HTTP_HOST']) {
case "laguna-pools.ru":
echo 'Host: https://laguna-pools.ru'; 
break;
default:
echo 'Host: http://'.$_SERVER['SERVER_NAME'].''; 
}
?>

<?php
switch ($_SERVER['HTTP_HOST']) {
case "laguna-pools.ru":
echo 'Sitemap: https://'.$_SERVER['SERVER_NAME'].'/sitemap.xml';
break;
default: 
echo 'Sitemap: http://'.$_SERVER['SERVER_NAME'].'/sitemap.xml';        
}
?>


