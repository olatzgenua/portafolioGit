
<!DOCTYPE html>
<html>
  <head>
    <title>Alumigraf</title>
<meta name="description" content="Web, logotipo, tarjetas de visita y catalogos de productos y servicios de la empresa Alumigraf">
    <meta name="keywords" content="diseño grafico, catalogo, branding, comunicacion, imagen corporativa, empresa, logo, web">
    <meta name="author" content="Olatz Genua">
        
    <link rel="shortcut icon" href='favicon.ico' /> <!--PARA K SE VEA EL FAVICON HAU JARRI BEHAR DA ETA IMAGENA A LA ALTURA DE DEL INDEX (LA IMAGEN EN FAVICONCC-->
    
  
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--LA LINEA K HAY K PONER PARA K LAS TILDES Y LAS Ñ-S FUNCIONEN-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


  <link href="../css/portafolioestilo.css" rel="stylesheet" type="text/css">
  <link href="../fonts/stylesheet.css" rel="stylesheet" type="text/css">
  
<!--  AL PULSAR EN CONTACTO...PARA QUE VAYA EN PLAN RODANDO (POKO A POKO) Y EL BOTON DEL SCROLL TMB APARECE ASI-->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
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

   <div class="navbar navbar-inverse navbar-fixed-top blanco" role="navigation">

      <div class="container">
     
      
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <h1><a href="#inicio">Olatz Genua</a></h1> 
        </div> 
      
        <!--div class="collapse navbar-collapse" >
		<ul >
          	<li class="idioma"><a href="#">eu</a></li>
   			<li class="idioma"><a href="#">es</a></li>  
   			<li class="idioma">|</li>
        </ul-->
 
          <ul class="nav navbar-nav navbar-right menucillo" >
            <li><a href="../index.html#procesocreativo">Hello</a></h1></li>
            <li><a href="../index.html#portafolio">Portafolio</a></li>
            <li><a href="../index.html#loquebuscas">Servicios</a></li>
            <li><a href="../index.html#conoceme">Conóceme</a></li>

          <!--  hizkuntzak--></ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  
 <!--FIN MENU--> 
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>


<div id="trabajos" class="container">
   
    <div class="blanco paddingtop2"> 
     
     <div class="row">
       
        
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 
 	<h2 class= "marra trabajotitulo">ALUMIGRAF</h2>
   </div><!-- cierre del titulo tarjeta de visita-->
  
        
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 

    <p>Web, rediseño de logo y creacion del imagotipo, tarjetas de vistia y catálogos para la empresa de anodizado e impresión en aluminio y pvc-s <span  class="negrita">Alumigraf.</span></br>
        El objetivo ha sido dar una <span  class="negrita">imagen más actual</span> a la empresa renovando por completo la imagen.</br>
        El logo mas redondeado y con su color azul identificativo mas actual evoca una empresa puntera y seria. El imagotipo compuesto por tres hexágonos en escala de azules recuerda la forma
        de "panel de abeja" que se crea en el proceso de anodizado de aluminio; elemento diferenciador de Alumigraf.</br>
        El Catálogo Industrial y Catálogo de Construcción junto con la tarjeta de visita tienen un diseño sobrio, claro y moderno acorde con la imagen corporativa
        creada.</br>
        La página web corporativa <a href="http://www.Alumigraf.es" target="_blank">Alumigraf.es</a> , renovada por completo, está sintonía con la renovada imagen y adaptada a todos los dispositivos. </p>
    
 		</div> <!--cierre explicacion del trabajo-->
   
  </div> <!--div row-->
  
  <span class="flechas"><a href="tarjetaAne1.php"><img src="../img/prev.png" width="50" height="45" alt="previo" class="flechaizquierda"></a>
  <a href="astenagusia3.php"><img src="../img/next.png" width="50" height="45" alt="siguiente" class="flechaderecha"></a></span>
   
 </div> <!--fin div row blanco-->
 
 </div> <!--fin div container-->     
        
         <div class="row"> 
 
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  paddingfotos">

<img src="../img/alumigraf1.jpg" alt="catalogo" class="img-responsive" />

   </div> <!--cierre foto ane 1 del trabajo-->
   
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 paddingfotos">

<img src="../img/alumigraf2.jpg" alt="catalogo" class="img-responsive"/>

   </div> <!--cierre foto ane 2 del trabajo-->
   
   
   </div> <!--cierre row-->
   
  <!--FOOTER-->

 <div id="footer" class="gris"> 
     
<div class="container">
  
  
 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

  <p class="contacto margintop">&copy; Copyright Olatz Genua</p>
  
  </div>
  
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
   <p class="contacto margenizquierda margintop">olatz.genua@gmail.com</p>
   
   </div>
   
   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 


  <ul class="redes">
  
   <li class="blog margintop2">
  <a href="#">blog</a>
  </li> 
  
   <li class="linkedin margintop2">
  <a href="http://es.linkedin.com/pub/olatz-genua/2b/877/aa0/" target="_blank">Linkedin</a>
  </li>
  
  <li class="twitter margintop2">
  <a href="http://twitter.com/olatzgenu" target="_blank">twitter</a>
  </li>
  
 
    
    </ul><!--cierre redes-->
    </div> <!--cierre tamaños-->
     </div> <!--cierre container-->
   
 
 </div><!--footer-->
 

</body>
</html>
