<!DOCTYPE html>
<html>
  <head>
    <title>Tarjetas de visita</title>
    <meta name="description" content=" Tarjetas de visita profesionales para una fisioterapeuta">
    <meta name="keywords" content="diseño grafico, tarjetas visita, fisioterapeuta, minimalista, donostia, comunicacion, imagen corporativa">
    <meta name="author" content="Olatz Genua">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--LA LINEA K HAY K PONER PARA K LAS TILDES Y LAS Ñ-S FUNCIONEN-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->

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
 
 	<h2 class= "marra trabajotitulo">TARJETA
    <br/>DE VISITA</h2>
   </div><!-- cierre del titulo tarjeta de visita-->
  
        
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 

    <p><span  class="negrita">Ane Herrero</span> es una fisioterapeuta de Gipuzkoa y tiene intención de iniciarse por libre. Es un <span class="negrita">diseño</span> minimalista, muy limpio y claro. Lo más identificativo es el símbolo alineado a la izquierda, que simboliza una columna vertebral y por tanto, alude al trabajo de fisioterapeuta, al trabajo de una profesional femenina (color lila) y responsable.</p>
    
   
    
	   </div> <!--cierre explicacion del trabajo-->
        
        
   
  </div> <!--div row-->
  
 
  <span class="flechas"><a href="aingura16.php"><img src="../img/prev.png" width="50" height="45" alt="previo" class="flechaizquierda"></a>
  <a href="alumigraf2.php"><img src="../img/next.png" width="50" height="45" alt="siguiente" class="flechaderecha"></a></span>
  
 
 </div> <!--fin div row blanco-->
 
 </div> <!--fin div container-->   
 
 <section>
 
 
 </section>
        
         <div class="row"> 
 
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  paddingfotos">

<img src="../img/tarjetaane1.jpg" alt="tarjetavisita" class="img-responsive" />

   </div> <!--cierre foto ane 1 del trabajo-->
   
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 paddingfotos">

<img src="../img/tarjetaane2.jpg" alt="tarjetavisita" class="img-responsive"/>

   </div> <!--cierre foto ane 2 del trabajo-->
   
   
   </div> <!--cierre row-->
   
  <!--FOOTER-->

        <?php include_once '../includes/footer.php'; ?>
 

</body>
</html>
