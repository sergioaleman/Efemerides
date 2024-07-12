<?php
date_default_timezone_set("America/Caracas");
setlocale(LC_TIME, 'es_VE.UTF-8','esp');

include 'fechames.php'; 



/* Convertimos la fecha a marca de tiempo */
$marca = strtotime($data['Nacimiento']);

$fechaActual = date("Y-m-d");

    $fechaActual2 = date("d-m-Y");
  
?>

<?php 

    date_default_timezone_set("America/Caracas");

    $fechaActual = date("d-m-Y");
    $horaActual = date("h:i:s");

    

    

 ?>

   
 <!DOCTYPE html>
<html lang="es">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>&#218;ltimas publicaciones del sitio InfoUDO</title>
<meta name="Description" content="Lista de los art&#237;culos m&#225;s recientes publicados en este sitio web, en distintas categor&#237;as, con su t&#237;tulo y enlace, imagen de encabezado y descripci&#243;n">
    	<meta name="keywords" content="Infoudo, publicaciones, listado de articulos, articulos recientes">
    	<meta name="robots" content="NOINDEX,NOFOLLOW,NOARCHIVE,NOODP,NOSNIPPET">
    	
<link rel="canonical" href="https://www.infoudo.com.ve/martes.php">
<link rel="apple-touch-icon" href="https://www.infoudo.com.ve/apple-touch-icon.png">
<meta name="robots" content="max-image-preview:large">
<style>html{height:100%;}
body{font-family:sans-serif;font-size:19px;line-height:26px;color:#333333;}
#header{width:768px;margin:0 auto;margin-top:4px;padding:6px;border:1px solid #ddd;}
#page{width:98%;padding:10px;}
h1, h2, h3, h4{font-weight:normal;}
h1{font-size:42px;line-height:40px;margin:12px 0 -8px 0;color:#0c95c9;}
h2{font-size:32px;line-height:34px;margin:16px 0 12px 0;}
h3{font-size:30px;line-height:30px;margin:16px 0 12px 0;}
h4{font-size:26px;line-height:28px;margin:14px 0 10px 0;}
img{max-width:100%;height:auto;}#page img{margin:8px 0 8px 0;}
.migaspan,#migaspan{font-size:16px;}.migaspan a {text-decoration:none;}
.tfoto{margin:6px 0 8px 0;}
.cfoto{margin-top:12px;font-style:italic;}
.about{font-size:0.9em;}
.about2{font-size:0.8em;background-color:#d4eefd;padding:6px 12px;margin:6px 0;margin-top:-16px;}
/* BOTONES */
.btn{margin:2px 0 2px 0;color:#ffffff;font-weight:bold;display:inline-block;padding:6px 12px;font-size:16px;text-align:center;cursor:pointer;background-image:none;border:1px solid transparent;border-radius:0px;outline:0;}
.btn2{margin:16px 6px 2px 0;color:#ffffff;font-weight:bold;display:inline-block;padding:6px 12px;font-size:16px;text-align:center;cursor:pointer;outline:0;float:left;}
.btn2 a {color:#ffffff;text-decoration:none;}
.fb{background-color:#3b5998;}.fb:hover{background-color:#7986cb;}.gp{background-color:#dd4b39;}.gp:hover{background-color:#f87362;}.tw{background-color:#55acee;}.tw:hover{background-color:#97d1fc;}.li{background-color:#007bb5;}
.li:hover{background-color:#5daed4;}.pint{background-color:#2bb24c;}.pint:hover{background-color:#50eb76;}.ins{background-color:#f571c8;}.ins:hover{background-color:#fab5e3;}
.fbtn{clear:both;margin-bottom:6px;}
.fb-like{margin-bottom:-46px;}
.bot3{margin-top:12px;font-size:14px;padding:6px 16px;}
.frasesa{text-align:left;border:1px solid #b7e5ff;margin:18px 0 12px 0;padding:16px;line-height:30px;font-style:italic;}.poema{width:500px;}
.intro{border:#b7e5ff solid 1px;color:#356b7f;padding:10px;margin:8px 0 12px 0;}
.marco1{border:1px solid #ccc;padding:12px;margin:12px 0 12px 0;}.marco2{border:2px solid #56aaf3;padding:12px;margin:12px 0 12px 0;}.marco3{border:1px solid #ff9900;padding:12px;margin:12px 0 12px 0;border-radius:10px;}.blue1{background-color:#d4eefd;padding:12px;margin:12px 0 12px 0;}.blue2{background-color:#d4eefd;border:1px solid #bce8f1;padding:12px;margin:12px 0 12px 0;font-size:0.9em;font-style:italic;}.blue3{border-left:30px solid #b7e5ff;padding-left:12px;margin:12px 0 12px 0;font-style:italic;line-height:24px;}
.relp{margin:6px 0 6px 0;line-height:34px;}
.bboton{margin-bottom:6px;width:220px;height:46px;background-color: #7cc6fa;font-size:1.1em;}
.bboton a{font-weight: bold;color: #fff;display:block;line-height: 18px;text-decoration: none;padding: 14px 20px;}
.bott{margin:6px 6px 12px 0;width:110px;height:36px;font-size:0.9em;float:left;text-align:center;}
.bott a{font-weight: bold;color: #fff;display:block;line-height: 18px;text-decoration: none;padding: 8px 12px;}
.poem{background-color:#7cc6fa;}
.clear{clear:both;}
#post3{clear:both;margin-top:10px;padding:6px;background-color:#b7e5ff;text-align:center;font-size:14px;line-height:24px;}
#footer{width:90%;height:49px;margin:0 auto;padding-top:10px;}
#footer p{margin:0;text-align:center;line-height:normal;font-size:12px;}
#footer a{color:#064f78;}
#fup{position:fixed;right:3%;bottom:20px;opacity:0.2;text-decoration:none;}
.prela{border:1px solid #56aaf3;border-left:12px solid #56aaf3;padding:12px;margin:12px 0 12px 0;line-height:34px;}
/* WFULL */
@media screen and (max-width:769px) {
.wfull{max-width: 100vw;
width: 100vw;
position: relative;	
right:19.5px;
display:flex;}}
@media screen and (max-width:541px) {	
.wfull{right:16px;}}

@media screen and (min-width:300px) and (max-width:796px) {
#header{width:98%;padding:4px;border:0;}
#page{width:99%;padding:4px;}
.poem2{line-height:24px;}
.bot {width:99%;}
.frasesa{line-height:28px;}.poema{width:92%;}
}
@media screen and (max-width:479px) {
#page{width:98%;margin-top:0;padding-top:0;font-size:16px;line-height:24px;}
h1{font-size:34px;line-height:36px;}h2{font-size:28px;line-height:30px;}h3{font-size:24px;line-height:28px;}h4{font-size:22px;}
.about2{font-size:0.7em;}
.frasesa{line-height:26px;padding:12px;}
.btn{font-size:15px;padding:5px 12px;}
.btn2{font-size:14px;}
.migaspan,#migaspan{font-size:14px;}}

.barral{width:80%;margin:-6px 0 8px -6px;padding:3px 22px;font-size: 1.5em;line-height: 1.6em;text-align: left;letter-spacing:0.9px;font-weight:bold;background: linear-gradient(to right, rgb(68, 160, 233, 1) 0%, rgb(255, 255, 255, 0) 100%);background: -webkit-linear-gradient(left, rgba(68,160,233,1) 0%, rgba(255,255,255,0) 100%);}
.barral a{color:#fff;text-decoration:none;}
.barrac{clear:both;width:100%;padding-left:10px;font-size:0.9em;margin:8px auto;font-size:0.9em;}
.barrac a{text-decoration:none;}
.formb{width:96%;margin:8px;margin-right:0px;display:flex;border:1px solid #DFE1E5;}
.divinput{flex:1;display:flex;padding:7px;}
.inputb{background-color:transparent;border:none;margin:0;font-size: 16px;word-wrap:break-word;outline:none;display:flex;flex:1;-webkit-tap-highlight-color:transparent;width:100%;padding:0;overflow-y:hidden;height:24px;}
.botonb{display:flex;padding-left:8px;padding-right:8px;background-color:#73b8ef;border:#73b8ef solid 1px; margin:-1px;outline:none;flex:0 0 auto;fill:#fff;cursor:pointer;}
.divsvg{background:none;height:24px;width:24px;margin:auto;}
.link1 {text-decoration:none;font-weight:bold;color:#616161;}
.poem2{line-height:28px;}
.clear{clear:both;}
@media screen and (min-width:300px) and (max-width:796px) {
.barral{margin:-13px 0 8px -14px;}
}
@media screen and (max-width:479px) {
.barral{width:93%;height:47px;padding:2px 16px;font-size:1.4em;letter-spacing:1px;line-height: 1.7em;}
.barrac{padding-left:6px;font-size:15px;}
.formb{margin:8px 0 12px 0px;width:98%;}
}
@media screen and (-webkit-min-device-pixel-ratio:0) {
input:focus {font-size: 16px;}}
</style> 
<style>
body{font-size:17px;line-height:22px;}
#header{width:100%;margin:0 auto;padding:0px;border:0px;}
#page{width:100%;padding:0px;}
::-webkit-scrollbar {display: none;}
h4{font-size:26px;line-height:30px;margin:14px 0 6px 0;}
h4 a{text-decoration:none;}
hr{margin:10px 0 14px 0;color:#333333;width:50%;}
@media screen and (max-width:479px) {
body{font-size:16px;line-height:20px;}	
}
</style>
</head>
<body>
<div id="inicio"></div>
<div id="header">
<div id="page">
<div class="recientes">



<ul>
<!--
        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#23">23 de junio, Día Olímpico</a></li>
        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#24">24 de junio, Día Internacional del Socorrista</a></li>
        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#25">25 de junio, Día de la Gente de Mar</a></li>
        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#26">26 de junio, Día contra el Uso Indebido y el Tráfico Ilícito de Drogas</a></li>
        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#27">27 de junio, Día de las MiPyMEs y las PyMEs</a></li>

        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#29">29 de junio, Día Internacional de los Trópicos</a></li>
        <li><a href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-junio#30">30 de junio, Día Internacional de los Asteroides</a></li>
 
 -->

 
        <li><a target="_blank" href="https://www.infoudo.com.ve/facebook-mensajes-alentadores-para-comenzar-nuevo-dia">Frases para un nuevo día</a></li>
        <li><a target="_blank" href="https://www.infoudo.com.ve/amor-feliz-martes-frases-para-feliz-dia">Feliz <?= strftime('%A', $marca) ?>, frases para un feliz día</a></li>
        <li><a target="_blank" href="https://www.infoudo.com.ve/fechas-fechas-importantes-dias-senalados-celebracion-conmemorativos-<?= strftime('%B', $marca) ?>#<?= strftime('%d', $marca) ?>"><?= strftime('%e de %B', $marca) ?>, <? include 'mes.php'; ?></a></li>
        <li><a target="_blank" href="https://www.infoudo.com.ve/mensajes-cristianos-calendario-santas-santos-santoral-catolico-<?= strftime('%B', $marca) ?>#<?= strftime('%d', $marca) ?>"><?= strftime('%e de %B', $marca) ?>, santas, santos y santoral católico</a></li>
<!-- <li><a href="https://www.infoudo.com.ve/mensajes-cristianos-buenos-dias-cristianos-frases-cristianas-buenos-dias">Buenos días cristianos, frases cristianas de buenos días</a></li> -->
        <li><a target="_blank" href="https://www.infoudo.com.ve/mensajes-cristianos-buenos-dias-cristianos-frases-cristianas-buenos-dias">Buenos días cristianos, frases cristianas de buenos días</a></li>
        <li><a target="_blank" href="https://www.infoudo.com.ve/amor-notas-amor-para-decirte-cuanto-me-gustas-como-te-quiero">Me gustas mucho, frases y notas de amor</a></li>
        <li><a target="_blank" href="https://www.infoudo.com.ve/amor-quiero-que-valga-la-pena-mensajes-para-nuevo-amor">Quiero que valga la pena, poema para un nuevo amor</a></li> 
        <li><a target="_blank" href="https://www.infoudo.com.ve/amor-no-dejo-de-pensar-en-ti-poema-para-alguien-ausente">No dejo de pensar en ti, frases y poemas</a></li> 
        <li><a target="_blank" href="https://www.infoudo.com.ve/mensajes-cristianos-oraciones-para-agradecer-dios-dia-que-termina">Oración para dar gracias a Dios por el día que termina</a></li>
<!-- <li><a href="https://www.infoudo.com.ve/amor-buenas-noches-bendiciones-imagenes-frases-bonitas">Buenas noches, bendiciones, imágenes y frases bonitas</a></li> -->
<!-- <li><a href="">00000</a></li> -->

	</ul>

			
	<div style="clear: both;"></div></div>
</div>
</div>
</body>
</html>