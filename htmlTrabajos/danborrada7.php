<!DOCTYPE html>
<html>
  <head>
    <title>Cartel Tamborrada</title>
<meta name="description" content="Cartel de la tamborrada de Donostia">
    <meta name="keywords" content="diseño grafico, cartel, tamborrada, aguadora,azul, blanco, fiesta">
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
 
 	<h2 class= "marra trabajotitulo">CARTEL
    <br/>TAMBORRADA</h2>
   </div><!-- cierre del titulo tarjeta de visita-->
  
        
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 

    <p>Es un cartel que informa sobre la próxima fiesta de la <span  class="negrita">tamborrada de Donostia.</span> Se trata de la <span  class="negrita">silueta de una aguadora</span>, un símbolo poco utilizado en la comunicación de esta fiesta pero que no deja de ser muy importante. Colocado en el centro sobre un fondo azul propio de los colores de la ciudad.</p>
    
   
    
 		</div> <!--cierre explicacion del trabajo-->
   
  </div> <!--div row-->
 
 <span class="flechas"><a href="inauteriak6.php"><img src="../img/prev.png" width="50" height="45" alt="previo" class="flechaizquierda"></a>
  <a href="donbosco8.php"><img src="../img/next.png" width="50" height="45" alt="siguiente" class="flechaderecha"></a></span>
 
 </div> <!--fin div row blanco-->
 
 </div> <!--fin div container-->     
        
         <div class="row"> 
 
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  paddingfotos">

<img src="../img/danborrada1.jpg" alt="cartel tamborrada" class="img-responsive" />

   </div> <!--cierre foto ane 1 del trabajo-->
   
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 paddingfotos">

<img src="../img/danborrada2.jpg" alt="cartel tamborrada" class="img-responsive"/>

   </div> <!--cierre foto ane 2 del trabajo-->
   
   
   </div> <!--cierre row-->
   
  <!--FOOTER-->

        <?php include_once '../includes/footer.php'; ?>
 

</body>
</html>
