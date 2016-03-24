<?php                                                                                               

  require_once '../Scripts/app_config.php';
  require_once '../Scripts/database_connection.php';

// mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
//  or handle_error("возникла проблема, связанная с подключением к базе данных, " .
//      "содержащей нужную информацию.",
//                     mysql_error());
//
//
//  echo "<p>Connected to MySQL!</p>";
//
//  mysql_select_db(DATABASE_NAME)
//    or die("<p>Error selecting the database " . DATABASE_NAME . mysql_error() . "</p>");
//
//
//
//  echo "<p>Connected to MySQL, using database " . DATABASE_NAME . ".</p>";

//  $result = mysql_query("SHOW TABLES;");
// пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ ID пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ
//$user_id = $_REQUEST['user_id'];
// пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ Select

// Получение Prod_group продукции
$Prod_group = $_REQUEST['Prod_group'];
// Создание инструкции Select
$select_query = "select * from t_product WHERE Prod_group = ". $Prod_group;
$Result = mysql_query($select_query);
if ($Result) {
    $row = mysql_fetch_array($Result);
//    $first_name = $row['Name'];
//    $leng_1 = $row['Length'];
    $user_image = $row['Url_image'];
    $Prod_name = $row['Prod_name'];
//
//}  else {
//    handle_error("возникла проблема с поиском вашей " .
//        "информации на нашей системе.",
//        "Ошибка обнаружения пользователя с ID ");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Завод ЖБК ОАО "Гроднопромстрой"</title>
    <meta charset="windows-1251">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Продукция ЖБК, металлоконструкции">
    <meta name="keywords" content="Бетон, плиты перекрытия, дорожные плиты, перемычки,ФБС, сваи, песок, ПГС">
    <meta name="author" content="Your name">
    <link rel="icon" href="../img/favicon_GPS.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../img/favicon_GPS.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
 	<![endif]-->
  	<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
  <![endif]-->
    <style>
        table {
            width: 1000; /* Ширина таблицы */
            border: 4px double black; /* Рамка вокруг таблицы */
            border-collapse: collapse; /* Отображать только одинарные линии */
        }
        th,td {
            border: 1px solid;
        }
        th {
            background: #f5f8ec ;
        }
        /*th {*/
            /*text-align: left; *//* Выравнивание по левому краю */
            /*background: #ccc; *//* Цвет фона ячеек */
            /*padding: 5px; *//* Поля вокруг содержимого ячеек */
            /*border: 1px solid black; *//* Граница вокруг ячеек */
        /*}-->*/
        td {
            background: #FFFFFF;  /*Цвет фона ячеек*/
            padding: 5px;  /*Поля вокруг содержимого ячеек*/
            border: 1px solid black;  /*Граница вокруг ячеек*/
        }
        tr:hover td:empty/*not(:empty)*/ {  /*Строки таблицы меняют свой цвет при наведении курсора мышки*/
            background: #d5e0cc;
        }
        tr:hover td:not(:empty)/*not(:empty)*/ {  /*Строки таблицы меняют свой цвет при наведении курсора мышки*/
            background: #d5e0cc;
        }
        tr:nth-child(n+1):hover th {
            background: #d5e0cc;
    </style>
</head>

<body>
<!--==============================header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="index.html"><img src="../img/GPS_jbk_Ok1.png" alt=""></a><span>Завод ЖБК</span></h1>
                        <form id="search-form" action="../search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Приёмная:  <span>+375 152 794905</span><br>E-mail: <a href="#">zavod_jbk_grodno@mail.ru</a></span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                      <li class="li-first"><a href="../index.html"><em class="hidden-phone"></em><span class="visible-phone">Главная</span></a></li>
                                        <li><a href="../index-1.html">О нас</a></li>
                                        <li class="active"><a href="../Production.html">Продукция</a>
                                        <li><a href="../technology.html">Технологии</a></li>
                                        <!--<li><a href="index-4.html">styles</a></li>-->
                                        <li><a href="../Contact.html">Контакты</a></li>
                                        <li><a href="../price.html">Прайс-лист</a></li>
                                    </ul>
                                </div>
                                <ul class="social-icons">
                                    <li><a href="#"><img src="../img/icon-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="../img/icon-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="../img/icon-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="../img/icon-4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
       </div>
    </div>
</header>
<section id="content">
<div class="sub-content">
  <div class="container">
    <div class="row">
    	<div class="span8">
        	<div class="clearfix cols-1">
                <div class="span4 left-0">
                    <h5><?php echo $Prod_name;?></h5>
                    <figure class="img-indent"><img src="<?php echo $user_image;?>" class="img-radius" alt=""></figure>
<!--                    <p class="lead">--><?php //echo $Prod_name?><!--</p>-->

<?php

// Навигация
$num = 3;
$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM t_product WHERE Prod_group = " .$Prod_group. "");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;
// Конец навигации

//require_once '../scripts/app_config.php';
//require_once '../scripts/database_connection.php';
//mysql_connect("127.0.0.1", "root", "") or
//die("Ошибка соединения: " . mysql_error());
//mysql_select_db("bd_jbk_2014");
//$select_query = "select * from t_product";
$select_query = ("select * from t_product WHERE Prod_group = " .$Prod_group. " order by Name") or die("Ошибка выбора данных: " .mysql_error());
echo '<table border="3" width="1000" CELLPADDING = "5">';
echo '<thead>';
echo '<TR>';
echo '<TH>Наименование</TH>';
echo '<TH>Длинна,мм</TH>';
echo '<TH>Ширина,мм</TH>';
echo '<TH>Высота,мм</TH>';
echo '<TH>Нагрузка,кПа</TH>';
echo '<TH>Масса,т</TH>';
echo '<TH>Цена,руб</TH>';
echo '</TR>';
echo '</thead>';
echo '<tbody>';


$result = mysql_query($select_query);

//echo "<tr>";
while ($row = mysql_fetch_array($result )) {
//    printf("ID: %s  Имя: %s", $row[0], $row[1]);
    echo '<tr>';
    echo '<th align=left>'.$row['Name'].'</th>';
    echo '<td>'.$row['Length'].'</td>';
    echo '<td>'.$row['Width'].'</td>';
    echo '<td>'.$row['Height'].'</td>';
    echo '<td>'.$row['Loading'].'</td>';
    echo '<td>'.$row['Mass'].'</td>';
    echo '<td>'.$row['Price'].'</td>';
    echo '</tr>';
    //echo "<td align=right>".$row['Name']."</td>, <td>{$row['Length']}</td>, <td>{$row[6]}</td>, <td>{$row[7]}</td>, <td>{$row[9]}</td>, <td>{$row[12]}</td>, <td>{$row[10]}</td>";
}
echo '</tbody>';
echo '</table>';

//echo "</tr>";

mysql_free_result($result);
?>
                    </table>
                    <a href="../Production.html" class="btn btn_">назад</a>



<!--                    $row = mysql_fetch_array($Result);-->
<!--//                    echo "<p>Результаты вашего запроса:</p>";-->
<!--//                    echo "<ul>";-->
<!--//                    while ($row = mysql_fetch_row($result)) {-->
<!--//                        echo "<li>{$row['Name']}</li>";-->
<!--//                        echo "<li>{$row['Mass']}</li>";-->
<!--//                        echo "<li>{$perem[0]}</li>";-->
<!--//-->
<!--//                    }-->
<!--//                    echo "</ul>";-->
<!--//                            sprintf(-->
<!--//                            "<li><a href='show_user.php?user_id=%d'>%s %s</a> " .-->
<!--//                            "(<a href='mailto:%s'>%s</a>) " .-->
<!--//                            "<a href='delete_user.php?user_id=%d'><img " .-->
<!--//                            "class='delete_user' src='../images/delete.png' " .-->
<!--//                            "width='15' /></a></li>",-->
<!--//                            $Product['id'], $Product['Name'], $Product['Length'],-->
<!--//                            $Product['Width'], $Product['Mass'], $Product['Url_image'];-->
<!--//                        echo $Product_row;-->
<!--//                    }-->
<!--                    ?>-->

<!--                    <table border="3">-->
<!--                        <tr>-->
<!--                        <TR>-->
<!--                            <TH>Наименование</TH> <TH>Длинна,мм</TH> <TH>Ширина,мм</TH> <TH>Высота,мм</TH><TH>Нагрузка,кПа</TH> <TH>Масса,т</TH>-->
<!--                        </TR>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                        <tr>-->

<!--                            <td align="center">5 680</td>-->
<!--                            <td align="center">1 490</td>-->
<!--                            <td align="center">220</td>-->
<!--                            <td align="center">8</td>-->
<!--                            <td align="center">2,68</td>-->
<!--                        </tr>-->
<!--                    </table>-->
                </div>
            </div>
                </div>
        </div>
    </div>
  </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="span4 float2">
                <form id="newsletter" method="post" >
                    <label>Подписка</label>
                    <div class="clearfix">
                        <input type="text" onFocus="if(this.value =='Enter e-mail here' ) this.value=''" onBlur="if(this.value=='') this.value='Enter e-mail here'" value="Enter e-mail here" >
                        <a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
                    </div>
                </form>
            </div>
            <div class="span8 float">
                <ul class="footer-menu">
                    <li><a href="../index.html">Домашняя страница</a>|</li>
                    <li><a href="../index-1.html">О нас</a>|</li>
                    <li><a href="../Production.html">Продукция</a>|</li>
                    <!--<li><a href="index-2.html">Services</a>|</li>-->
                    <li><a href="../technology.html">технологии</a>|</li>
                    <!--<li><a href="index-4.html">styles</a>|</li>-->
                    <li><a href="../Contact.html">контакты</a></li>
                    <li><a href="../price.html">Прайс-лист</a></li>
                </ul>
                <a href="http://www.dav.by"> <i> Дегтерёв </i> </a> | 2014 |
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>
 

