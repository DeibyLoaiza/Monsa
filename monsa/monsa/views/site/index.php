<!DOCTYPE html>
<html lang="es">
 <?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>      
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
    <script src="js/jcarousellite_1.0.1.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function() { 
			$('.carousel .jCarouselLite').jCarouselLite({ 
				btnNext: '.carousel .next',
				btnPrev: '.carousel .prev',
				speed: 600,
				easing: 'easeOutQuart',
				vertical: false,
				circular: false,
				visible: 4,
				start: 0,
				scroll: 1
			}); 
		}); 
	</script>
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="row-bot">
            <div class="row-bot-bg">
                <div class="main">
                    <div class="wrapper p6">
                        <h1>Haz realidad la casa de tus sue&ntilde;os</h1>
                    </div>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/Alpiru.jpg" alt="">
                                </li>
                                <li>
                                    <img src="images/bosque.jpeg" alt="">
                                </li>
                                <li>
                                    <img src="images/montana.jpeg" alt="">
                                </li>
                                 <li>
                                    <img src="images/pinos.jpeg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wrapper">
                    	<figure class="img-indent2"><img src="images/page1-img1.png" alt=""></figure>
                        <div class="extra-wrap">
                        	<strong class="text-1">Haz realidad la casa de tus sueños, ahora puedes elegir el modelo de tu hogar en unos simples pasos contactanos y dejanos tus datos para tener el gusto de cotizar la casa de tus sueños <a class="link-1" href="<?= Url::toRoute("site/registrocotizante") ?>" target="_blank">Cotizar la casa de mis sue&ntilde;os</a>. O sigue buscando las entre los <a class="link-1" target="_blank" href="<?= Url::toRoute("site/index") ?>">Dise&ntilde;os m&atilde;s exclusivos</a> que tenemos para ti.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================aside================================-->
    <aside>
    	<div class="carousel">
	        <a class="prev"></a>
            <a class="next"></a>
            <div class="carousel-container">
                <h3>Diseño de casas exclusivos</h3>
                <div class="jCarouselLite">
                    <ul class="carousel-list">
                        <li>
                            <div class="img-border">
                                <a href="<?= Url::toRoute("site/casamangle") ?>"><img src="images/Mangle.jpg" alt="" /></a>                                
                            </div>
                        </li>                        
                        <li>
                            <div class="img-border">
                                <a href="<?= Url::toRoute("site/casairis") ?>"><img src="images/Iris.jpg" alt="" /></a>
                            </div>
                        </li>
                        <li>
                            <div class="img-border">
                                <a href="<?= Url::toRoute("site/casaorquidea") ?>"><img src="images/Orquidea.jpg" alt="" /></a>
                            </div>
                        </li>
                        <li>
                            <div class="img-border">
                                <a href="#"><img src="images/Girasol.jpg" alt="" /></a>
                            </div>
                        </li>
                        <li>
                            <div class="img-border">
                                <a href="#"><img src="images/Lirio.jpg" alt="" /></a>
                            </div>
                        </li>
                        <li>
                            <div class="img-border">
                                <a href="#"><img src="images/Margarita.jpg" alt="" /></a>
                            </div>
                        </li>                        
                        <li>
                            <div class="img-border">
                                <a href="#"><img src="images/Rosa.jpg" alt="" /></a>
                            </div>
                        </li>
                        <li>
                            <div class="img-border">
                                <a href="#"><img src="images/Tulipan.jpg" alt="" /></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    
    <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="container_12">
                <div class="wrapper">                   
                    <article class="grid_4">
                    	<div class="indent-left">
                        	<h3 class="p1">Proyectos recientes</h3>
                            <ul class="list-1">
                                <li><a href="#">Modelo Orquidea en Panam&aacute;</a></li>
                                <li><a href="#">Modelo Girasol en Cartagena</a></li>
                                <li><a href="#">Modelo Mangle en Amazonas</a></li> 
                                <li><a href="#">Modelo Tulipan en San Andr&eacute;s Islas</a></li>
                                <li><a href="#">Modelo Iris en Medell&iacute;n</a></li>                           
                            </ul>
                        </div>
                    </article>                    
                </div>
            </div>
        </div>
    </section>
    

</body>
</html>
