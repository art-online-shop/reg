<?php 
header( "Content-Type: text/xml; charset=utf-8" );
echo '<?xml version="1.0" encoding="UTF-8"?>' ;
$date = date('Y-m-dTH:i:sP', time());
?>
<?php echo '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; ?>
<?php echo "\n" ?>
<?php echo '<url>'; ?>
	<?php echo '<loc>http://'.$_SERVER['SERVER_NAME'].'/</loc>'; ?>
	<?php echo '<lastmod>'.$date.'</lastmod>'; ?>
	<?php echo '<priority>1.0</priority>'; ?>
<?php echo '</url>'; ?>
<?php
// получаю данные для page
 
$sdd_db_host='localhost'; // ваш хост
$sdd_db_name=''; // ваша бд
$sdd_db_user=''; // пользователь бд
$sdd_db_pass='____'; // пароль к бд

$conn = mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд

if(!$conn)
{
    throw new Exception('Не удалось подключиться к базе данных! Проверьте параметры подключения');
}
if(!mysql_select_db($sdd_db_name, $conn)) // выбор бд
{
    throw new Exception("Не удалось выбрать базу данных {$ssd_db_name}!");
}

$result = mysql_query('SELECT * FROM `page`', $conn); // запрос на выборку

if(!$result)
{
    throw new Exception(sprintf('Не удалось выполнить запрос к БД, код ошибки %d, текст ошибки: %s', mysql_errno($conn), mysql_error($conn)));
}

while($row = mysql_fetch_array($result))
{
	echo '<url>';
    echo "\n";	
	echo '<loc>http://'.$_SERVER['SERVER_NAME'].''.$row['url'].'</loc>';
    echo "\n";	
	echo '<lastmod>'.$date.'</lastmod>';
	echo "\n";
	echo '<priority>1.0</priority>';
	echo "\n";
	echo '</url>';

}

?>

<?php echo '</urlset>'; ?>


