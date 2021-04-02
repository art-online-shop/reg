<?php

$hostbd = 'localhost';  
$databasebd = ''; 
$userbd = ''; 
$passwordbd = ''; 

//connect
$link = mysqli_connect($hostbd, $databasebd, $passwordbd, $databasebd) 
or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

//get id region
$idurl = str_replace('.consultant-nalog.ru','',$_SERVER['HTTP_HOST']);
$idurl = base64_encode($idurl);

// получаю данные для url
$sql = "SELECT * FROM `reg` WHERE `reg_url_base64` LIKE '".$idurl."'";
$result_sql = mysqli_query($link, $sql);

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

?>
<?php
header( "Content-Type: text/xml; charset=utf-8" );
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo "\n";
echo '<rss xmlns:yandex="http://news.yandex.ru" xmlns:media="http://search.yahoo.com/mrss/" xmlns:turbo="http://turbo.yandex.ru" version="2.0">';
    echo "\n";
    echo '<channel>';
    echo "\n";
        echo '<item turbo="true">';
            echo "\n"; 
            echo '<title>Обязательный аудит в '.$reg_sity_5.'</title>'; 
            echo "\n";
            echo '<link>http://'.$reg_url.'.consultant-nalog.ru/audit/mandatory/</link>';
            echo "\n"; 
            echo '<turbo:content>'; 
            echo "\n";
                echo '<![CDATA[';
                echo "\n"; 
                    echo '<header>';
                    echo "\n"; 
                        echo '<h1>Обязательный аудит в '.$reg_sity_5.'</h1>';
                        echo "\n"; 
                        echo '<h2>Срочный адуит за 5 дней! + бонусы</h2>';
                        echo "\n"; 
                            echo '<figure>';
                            echo "\n"; 
                                echo '<img src="http://'.$reg_url.'.consultant-nalog.ru/media/audit.jpg">';
                                echo "\n"; 
                            echo '</figure>';
                            echo "\n"; 
                            echo '<menu>';
                            echo "\n"; 
                                echo '<a href="http://'.$reg_url.'.consultant-nalog.ru/audit/calculation/">Калькулятор</a>';
                                echo "\n"; 
                                echo '<a href="http://'.$reg_url.'.consultant-nalog.ru/audit/">Все услуги</a>';
                                echo "\n"; 
                                echo '<a href="http://'.$reg_url.'.consultant-nalog.ru/about-company/">О компании</a>';
                                echo "\n"; 
                                echo '<a href="http://'.$reg_url.'.consultant-nalog.ru/contacts/">Контакты</a>';
                                echo "\n"; 
                            echo '</menu>';
                            echo "\n"; 
                    echo '</header>';
                    echo "\n"; 
                        echo '<p>Проведение обязательного аудита многие предприниматели воспринимают, как мешающие нормальному рабочему ритму долгие и нудные проверки бухгалтерии. Но, это не чья-то прихоть ради получения вознаграждения, а насущная необходимость ради оптимизации бухучета и налогообложения, а также соблюдения требований законодательства.<br>&nbsp;<br>Что вы получите в результате:<br>&nbsp;<br>'; 
                        echo "\n";
                        echo '<ul>'; 
                            echo "\n";
                            echo '<li>Выявление скрытых финансовых резервов;</li>'; 
                            echo "\n";
                            echo '<li>Устранение налоговых рисков;</li>'; 
                            echo "\n";
                            echo '<li>Определение причин недостаточной прибыли;</li>'; 
                            echo "\n";
                            echo '<li>Спокойная работа без выездных проверок;</li>'; 
                            echo "\n";
                            echo '<li>Отсутствие доначислений и пеней по налогам и сборам;</li>'; 
                            echo "\n";
                            echo '<li>Повышение эффективности бухучета;</li>'; 
                            echo "\n";
                            echo '<li>Консультации по его постановке и ведению;</li>'; 
                            echo "\n";
                            echo '<li>Снижение налоговой нагрузки за счет оптимизации;</li>'; 
                            echo "\n";
                            echo '<li>Оценка компетентности персонала;</li>'; 
                            echo "\n";
                            echo '<li>Объективная картина реального финансового положения;</li>'; 
                            echo "\n";
                            echo '<li>Приведение бухгалтерского, налогового и кадрового учета в соответствие с законодательством.</li>'; 
                            echo "\n";
                            echo '</ul>';
                            echo "\n"; 
                        echo '<br>&nbsp;<br>';
                        echo "\n"; 
                        echo 'Оставьте заявку – мы рассчитаем стоимость аудита для Вашей компании. Помните, что фирмы с годовой выручкой свыше 400 млн. руб., организации с активами дороже 60 млн. и АО по закону обязаны ежегодно проводить аудит. Они сдают заключение в ИФНС вместе с годовой бухгалтерской отчетностью.</p>'; 
                        echo "\n";
                        echo '<p><a href="http://'.$reg_url.'.consultant-nalog.ru/audit/mandatory/">Задайте вопрос специалисту</a></p>';
                        echo "\n"; 
                        echo '<p><a href="http://'.$reg_url.'.consultant-nalog.ru/audit/calculation/">Калькулятор стоимости</a></p>'; 
                        echo "\n";
                echo ']]>';
                echo "\n"; 
            echo '</turbo:content>'; 
            echo "\n";
        echo '</item>';
        echo "\n"; 
    echo '</channel>';
    echo "\n";    
echo '</rss>';
echo "\n"; 
?>
