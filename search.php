<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Результат поиска</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon_GPS.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon_GPS.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">    
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
  <!--[if lt IE 8]>
      <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
  <![endif]-->
  <!--[if lt IE 9]>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="search.php"><img src="img/GPS_jbk_Ok1.png" alt=""></a><span>Завод ЖБК</span></h1>
                         <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Приёмная:  <span>+375 152 794905</span><br>E-mail: <a href="#">info@jbk.by</a></span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                      <li class="li-first"><a href="index.html"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                        <li><a href="index-1.html">О нас</a></li>
                                        <!--<li class="sub-menu"><a href="index-1.html">about</a>
                                          <ul>
                                            <li><a href="#">Welcome Message</a></li>
                                            <li class="sub-menu"><a href="#">Company Profile</a>
                                              <ul>
                                                <li><a href="#">Our Capabilities</a></li>
                                                <li><a href="#">Advantages</a></li>
                                                <li><a href="#">Work Team</a></li>
                                                <li><a href="#">Partnership</a></li>
                                                <li><a href="#">Support</a></li>
                                              </ul>
                                            </li>
                                            <li><a href="#">Our History</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                          </ul>
                                        </li>-->
                                        <li><a href="Production.html">Продукция</a></li>
                                        <li><a href="technology.html">Технологии</a></li>
                                        <!--<li><a href="index-4.html">styles</a></li>-->
                                        <li><a href="Contact.html">Контакты</a></li>
                                        <li><a href="price.html">Прайс-лист</a></li>
                                      </ul>
                                  </div>
                                  <ul class="social-icons">
                                      <li><a href="#"><img src="img/icon-1.png" alt=""></a></li>
                                      <li><a href="#"><img src="img/icon-2.png" alt=""></a></li>
                                      <li><a href="#"><img src="img/icon-3.png" alt=""></a></li>
                                      <li><a href="#"><img src="img/icon-4.png" alt=""></a></li>
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
          <div class="span12">
              <h4>Результат поиска:</h4>
              <div id="search-results"></div>
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
                <li><a href="index.html" class="current">Домашняя страница</a>|</li>
                <li><a href="index-1.html">О нас</a>|</li>
                <li><a href="Production.html">Продукция</a>|</li>
                <!--<li><a href="index-2.html">Services</a>|</li>-->
                <li><a href="technology.html">технологии</a>|</li>
                <!--<li><a href="index-4.html">styles</a>|</li>-->
                <li><a href="Contact.html">Контакты</a></li>
                <li><a href="price.html">Прайс-лист</a></li>
          </ul>
          Дегтерёв   &copy;  2014  |   <a href="">Privacy Policy</a>
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>