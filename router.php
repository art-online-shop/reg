<?php

$hostbd = 'localhost';  
$databasebd = '#'; 
$userbd = '#'; 
$passwordbd = '#'; 

//connect
$link = mysqli_connect($hostbd, $databasebd, $passwordbd, $databasebd) 
or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

//get id region
$idurl = str_replace('.consultant-nalog.ru','',$_SERVER['HTTP_HOST']);
$idurl = base64_encode($idurl);

//get id page
$idurlpage = $_SERVER['REQUEST_URI'];
$idurlpage = preg_match('/(.*)\?/', $idurlpage, $matches);
$idurlpage = $matches[1];

if (empty($idurlpage )) {
    $idurlpage = $_SERVER['REQUEST_URI'];
}

$idurlpage = base64_encode($idurlpage);

// получаю данные для page
$sql = "SELECT * FROM `page` WHERE `idurlpage_code` LIKE '".$idurlpage."' LIMIT 1";
$result_sql = mysqli_query($link, $sql);

// формирвание переменных

while($row = mysqli_fetch_array($result_sql))
{  
    $id = $row['id'];
    $title = $row['title'];
    $description = $row['description'];
    $keyword = $row['keyword'];
    $body_short = $row['body_short'];
    $h1 = $row['h1'];
    $h2 = $row['h2'];
    $body = $row['body']; 
    $data = $row['data'];  
    $url = $row['url'];
    $cat_name = $row['cat_name'];   
    $cat_url = $row['cat_url'];   
    $img_mini = $row['img_mini'];   
    $img_slide = $row['img_slide'];   
    $img_article = $row['img_article'];   
    $doc_name = $row['doc_name'];   
    $doc_url = $row['doc_url'];   
    $cat_parent = $row['cat_parent'];
    $cat_next = $row['cat_next'];  
    $cat_back = $row['cat_back'];
    $cat_menu = $row['cat_menu'];
    $template= $row['template'];
                      
}

// заначение по умолчанию
if (empty($id)) {
    $title = "РНК - эксперт в налоговых спорах";
    $description = "РНК - эксперт в налоговых спорах";
    $keyword = "РНК - эксперт в налоговых спорах";
    $body_short = "Нужно наполнить контентом";
    $body = "Нужно наполнить контентом";
    $data = "01.01.2020";
    $url = "";
    $cat_name = "Тест";  
    $cat_url = "Тест";  
    $img_mini = "";  
    $img_slide = "/media/404/404.jpg";
    $img_article = ""; 
    $doc_name = ""; 
    $doc_url = ""; 
    $cat_parent = "";
    $cat_next = ""; 
    $cat_back = "";
    $cat_menu = "";
    $template = "1";
}

$address = " г. Ярославль, ул. Наумова, 67/2, офис 310, 311";

$email = "660307@rosnalogconsulting.ru";
$email_1 = "660307@rosnalogconsulting.ru"; 
$email_2 = "660307@rosnalogconsulting.ru";  
$email_3 = "660307@rosnalogconsulting.ru";  

$phone = "8 800 707 99 53";
$phone_1 = "8 (4852) 66-03-07";
$phone_2 = "8 (4852)  66-04-55";
$phone_3 = "";

$instagram = ""; 
$facebook = "";
$vk = "";
$linkedin = "";
$telegram = "";
$wa = "";

// получаю данные для url
$sql = "SELECT * FROM `reg` WHERE `reg_url_base64` LIKE '".$idurl."'";
$result_sql = mysqli_query($link, $sql);

// формирвание переменных

while($row = mysqli_fetch_array($result_sql))
{  
    $id = $row['id']; 
    $reg_sity_0 = $row['reg_sity_0']; 	
    $reg_sity_1 = $row['reg_sity_1']; 
    $reg_sity_2 = $row['reg_sity_2']; 
    $reg_sity_3 = $row['reg_sity_3']; 
    $reg_sity_4 = $row['reg_sity_4']; 
    $reg_sity_5 = $row['reg_sity_5']; 
    $reg_region = $row['reg_region'];  
    $reg_url = $row['reg_url'];   
    $reg_gprs_0 = $row['reg_gprs_0']; 
    $reg_gprs_1 = $row['reg_gprs_1'];    
    $reg_url_rf_0 = $row['reg_url_rf_0'];   	
    $reg_url_rf_1 = $row['reg_url_rf_1'];   
    $reg_url_base64 = $row['reg_url_base64'];   
    $dop1 = $row['dop1'];   	 
    $dop2 = $row['dop2'];   	
    $dop3 = $row['dop3'];   	
    $dop4 = $row['dop4'];	
    $dop5 = $row['dop5'];  	
    $dop6 = $row['dop6']; 	
                      
}

if (empty($keywords)) {
    $keywords = "налоги, суд, ФНС, ИФНС, Жалобы, проверка, выездная, налоговая, акт ";
}

$reg_sity_0_v = "в ".$reg_sity_5; 
$reg_sity_0_comma = ", ".$reg_sity_0; 
$reg_region_comma = ", ".$reg_region; 

if (empty($reg_sity_0)) {
    $reg_sity_0_v = ""; 
    $reg_sity_0_comma = "";
    $reg_region_comma = "";
}

// ссылка на сайт минус 
?>
