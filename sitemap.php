<?php 
header( "Content-Type: text/xml; charset=utf-8" );
echo '<?xml version="1.0" encoding="UTF-8"?>' ;
$date = date('Y-m-dTH:i:sP', time());
?>

<?php echo "\n" ?>

<?php echo '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; ?>
<?php echo "\n" ?>
<?php echo '<url>'; ?>
	<?php echo '<loc>http://'.$_SERVER['SERVER_NAME'].'/</loc>'; ?>
	<?php echo '<lastmod>'.$date.'</lastmod>'; ?>
	<?php echo '<priority>1.0</priority>'; ?>
<?php echo '</url>'; ?>
<?php echo "\n" ?>
<?php echo '</urlset>'; ?>
