<!DOCTYPE html>
<html>
  <head>
    <title>Poltsing</title>
<meta name="description" content="Imagen corporativa de bolsas reutilizables Poltsing">
    <meta name="keywords" content="diseño grafico, poltsing, minimalista, donostia, peine del viento, comunicacion, imagen corporativa, bolsas, reutilizables">
    <meta name="author" content="Olatz Genua">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--LA LINEA K HAY K PONER PARA K LAS TILDES Y LAS Ñ-S FUNCIONEN-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '../includes/header.php'; ?>
<script>
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});

</script>
<script type="text/javascript">
<!--EL SCROLLING PARA ARRIBA-->
			$(document).ready(function(){ 
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
 
		});
		
</script> <!--SE ACABA EL SCROLLING-->
  </head>
  <body>

        <div id="inicio"></div> 
  <a href="arriba" class="scrollup">Scroll</a> <!--BOTON PARA EL ESCROLLING PARA ARRIBA, eta css-n estiloa eman eta gero enlazatu det en header jartzen: id="arriba"-->

  
  <!--MENU-->

        <?php include_once '../includes/menu.php'; ?>
  
 <!--FIN MENU--> 
  
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    
    
<div id="trabajos" class="container">
   
    <div class="blanco paddingtop2"> 
     
     <div class="row">
       
        
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 
 	<h2 class= "marra trabajotitulo">BOLSAS REUTILIZABLES
    <br/>POLTSING</h2>
   </div><!-- cierre del titulo tarjeta de visita-->
  
        
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 

    <p>Poltsing es una <span  class="negrita">empresa de bolsas reutilizables de diseño</span> en la que formé junto a otros dos compañeros realizando su imagen corporativa. Poltsing ofrecerá una <span  class="negrita">imagen minimalista y elegante</span> con la idea de cubrir las necesidades de un target que quiere ir a la moda además de reutilizar.</p>

<p>En ella, creamos el <span  class="negrita">logotipo</span> de la empresa junto con otras aplicaciones corporativas. El logotipo, sencillo y sobrio, <span  class="negrita">tiene personalidad propia</span> y está acompañada de un símbolo en la parte superior derecha que simula la esquina de una bolsa.</p>

<p>En cuanto al <span  class="negrita">diseño de bolsas</span>, hemos escogido un diseño partiendo de una ilustración que representa uno de los <span  class="negrita">lugares más característicos de Donostia</span>; eso sí, con el estilo poltsing. Es decir, con nuestro color representativo turquesa y como siempre con una imagen minimalista y de diseño.</p>

<p>La <span  class="negrita">página web</span> sigue con el mismo estilo e imagen que el resto de los elementos, tiene como fin dar a conocer la empresa junto con con la página de facebook y el twitter creados para la misma. </p>
    
  
 		</div> <!--cierre explicacion del trabajo-->
   
  </div> <!--div row-->
 
 
 <span class="flechas"><a href="chocolate11.php"><img src="../img/prev.png" width="50" height="45" alt="previo" class="flechaizquierda"></a>
  <a href="belleepoque13.php"><img src="../img/next.png" width="50" height="45" alt="siguiente" class="flechaderecha"></a></span>
 
 
 </div> <!--fin div row blanco-->
 
 </div> <!--fin div container-->     
        
         <div class="row"> 
 
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  paddingfotos">

<img src="../img/poltsing1.jpg" alt="bolsas reutilizables" class="img-responsive" />

   </div> <!--cierre foto ane 1 del trabajo-->
   
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 paddingfotos">

<img src="../img/poltsing2.jpg" alt="bolsas reutilizables" class="img-responsive"/>

   </div> <!--cierre foto ane 2 del trabajo-->
   
   
   </div> <!--cierre row-->
   
  <!--FOOTER-->

        <?php include_once '../includes/footer.php'; ?>
 

</body>
</html>
