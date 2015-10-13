<!DOCTYPE html>
<html>
<head>
    <title>Olatz Genua</title>

    <meta name="description"
          content="Olatz Genua diseñadora gráfica y web, mi proceso creativo y mis trabajos es lo que buscas; conóceme">
    <meta name="keywords"
          content="diseño grafico, diseño web, trabajos, Olatz Genua, donostia, design, branding, comunication, comunicacion, imagen corporativa, cartel, fotografia">
    <meta name="author" content="Olatz Genua">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--LA LINEA K HAY K PONER PARA K LAS TILDES Y LAS Ñ-S FUNCIONEN-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"

    <script>
        $(document).ready(function () {
            $('a[href^="#"]').on('click', function (e) {
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
        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({scrollTop: 0}, 600);
                return false;
            });

        });

    </script>
    <!--SE ACABA EL SCROLLING-->

    <?php
    include 'includes/header.php';
    ?>
</head>
<body>
<div id="inicio"></div>
<a href="arriba" class="scrollup">Scroll</a>
<!--BOTON PARA EL ESCROLLING PARA ARRIBA, eta css-n estiloa eman eta gero enlazatu det en header jartzen: id="arriba"-->


<!--MENU-->

<?php include 'includes/menu.php'; ?>


<!--FIN MENU-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<!--  CABEZERA-->

<div id="portada"> <!--la foto en el fondo de este div-->

    <div class="container">


        <!--ul class="redes"-->

        <!--li class="blog">
       <a href="#">blog</a>
       </li>

        <li class="linkedin">
       <a href="http://es.linkedin.com/pub/olatz-genua/2b/877/aa0/" target="_blank">Linkedin</a>
       </li>

       <li class="twitter">
       <a href="http://twitter.com/olatzgenu" target="_blank">twitter</a>
       </li>



         </ul--><!--cierre redes-->
    </div>
    <!--cierre container-->
</div>
<!--cierre row cabecera-->
<!--FIN DIV CABECERA-->


<!--FIN CABECERA-->

<!--SECCION 1 (que ofrecemos)-->

<div id="procesocreativo" class="container">

    <div class="blanco">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginbottom">
            <h2 class="centrau">- Proceso creativo -</h2>

            <div class="row peter">
            </div>
            <!--cierre de h2-->

            <!-- PROCESO CREATIVOKO SINBOLOAK-->

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 peter">

                <p class="centrau"><img src="img/gafas.png" alt="escucharyanalizar"></p>
                <h4 class="centrau">Escuchar y analizar</h4>
                    <!--p class="h3clarito cursiva margenizquierda">" Si no lo puedes explicar con simplicidad, es que no lo entiendes bien"</p-->
                    <p class="">Porque la comunicación empienza escuchando y analizando el entorno para crear un mensaje
                        eficaz y bilateral que hará alcanzar la meta. </p>
            </div>
            <!--cierre escuchar-->


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 peter">

                <p class="centrau"><img src="img/lapiz.png" alt="crear"></p>
                <h4 class="centrau">Crear</h4>
                    <!--p class="h3clarito cursiva margenizquierda">"El diseño debe seducir, educar y, quizás lo más importante, provocar una respuesta emocional"   </p-->
                    <p class="">Es esencial una creación funcional y armónica que llegue al corazón; si no, lo que diga
                        el cerebro no importa.
            </div>
            <!--cierre crear-->


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 peter">

                <p class="centrau"><img src="img/llave.png" alt="solucionar"></p>
                <h4 class="centrau">Solucionar</h4>
                    <!--p class="h3clarito cursiva margenizquierda">"El buen diseño es obvio. El gran diseño es transparente, el embajador silencioso de tu marca"</p-->

                    <p class="">Solución a las necesidades, consiguiendo la llave creada con esfuerzos unificados.
            </div>
            <!--cierre solucionar-->

            <!--SINBOLOAK BUKATZEN DIRA-->

        </div>
        <!--div row-->

    </div>
    <!--fin div row blanco-->

</div>
<!--fin div container-->

<!-- FIN SECCION 1-->


<!--SECCION 2 (portafolio)-->

<div id="portafolio">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gris">

        <div class="trianguloB">
        </div>


        <h2 class="centrau">- Trabajos -</h2>
        <!--TRABAJOS-->


        <ul class="row peter">
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/retratoane9.php"><img
                        class="img-responsive" src="img/retratoane.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Myruns</span>
                        <br><br>Web y comunicación</h5>
                </a>
            </li>


            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/alumigraf2.php"><img
                        class="img-responsive" src="img/alumigraf.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Alumigraf</span>
                        <br><br>Web y papelería</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a
                    href="htmlTrabajos/retratoyosu10.php"><img class="img-responsive" src="img/retratoyosu.png">


                    <h5 class="texto">
                        <span class="texto_titulo marra">Idon Sistems</span>
                        <br><br>Logotipo y web corporativa</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/tarjetaAne1.php"><img
                        class="img-responsive" src="img/tarjetasane.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Ane Herrero</span>
                        <br><br>Branding</h5>
                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/estropadak4.php"><img
                        class="img-responsive" src="img/astenagusia.png">


                    <h5 class="texto">
                        <span class="texto_titulo marra">Aste Nagusia</span>
                        <br><br>Cartelismo</h5>

                </a></li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/estropadak4.php"><img
                        class="img-responsive" src="img/regatas.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Regatas</span>
                        <br><br>Cartelismo</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/suak5.php"><img
                        class="img-responsive" src="img/fuegos.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Fuegos</span>
                        <br><br>Cartelismo</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/inauteriak6.php"><img
                        class="img-responsive" src="img/inauteriak.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Carnavales</span>
                        <br><br>Cartelismo</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/danborrada7.php"><img
                        class="img-responsive" src="img/danborrada.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Tamborrada</span>
                        <br><br>Cartelismo</h5>


                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/donbosco8.php"><img
                        class="img-responsive" src="img/donbosco.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Don Bosco</span>
                        <br><br>Cartelismo</h5>

                </a>
            </li>


            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/chocolate11.php"><img
                        class="img-responsive" src="img/chocolate.png">


                    <h5 class="texto">
                        <span class="texto_titulo marra">Xocolat</span>
                        <br><br>Fotografía publicitaria</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/poltsing12.php"><img
                        class="img-responsive" src="img/poltsing.png">


                    <h5 class="texto">
                        <span class="texto_titulo marra">Poltsing</span>
                        <br><br>Imagen corporativa</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a
                    href="htmlTrabajos/belleepoque13.php"><img class="img-responsive" src="img/belleEpoque.png">


                    <h5 class="texto">
                        <span class="texto_titulo marra">Belle epoque</span>
                        <br><br>Cartelismo</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/alboan14.php"><img
                        class="img-responsive" src="img/alboan.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Alboan</span>
                        <br><br>Campaña de comunicación</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/caritas15.php"><img
                        class="img-responsive" src="img/caritasHP.png">

                    <h5 class="texto">
                        <span class="texto_titulo marra">Cáritas</span>
                        <br><br>Campaña de Relaciones Públicas</h5>

                </a>
            </li>
            <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sinseparacion"><a href="htmlTrabajos/aingura16.php"><img
                        class="img-responsive" src="img/aingura.png">


                    <h5 class="texto">
                        <span class="texto_titulo marra">Aingura</span>
                        <br><br>Imágen corporativa<br>Comunity manager</h5>

                </a>
            </li>

        </ul>


    </div>
    <!-- /container -->

    <!-- FIN TRABAJOS-->

    <div class="row peter">
    </div>


</div>
<!--cierre gris-->
</div><!--portafolio/gris-->


<!--FIN SECCION 2-->

<!--SECCION 3 (que ofrecemos)-->

<!-- LINEA 1-->


<div id="loquebuscas" class="container">

    <div class="row peter">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="trianguloA"></div>


            <h2 class="centrau">- Lo que buscas -</h2>


        </div>
        <!--cierre de h2-->

        <!-- loquebuscas-->

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

            <p class="centrau"><img src="img/graphicdesign.png" alt="graphicdesign"></p>
            <h4 class="centrau">Graphic design</h4>

            <p class="h3clarito margenizquierda">Convierto tu mensaje en comunicación visual. Tarjetas de visita,
                carteles, flyers, trípticos, invitaciones...</p>
        </div>
        <!--cierre graphic design-->


        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

            <p class="centrau"><img src="img/branding.png" alt="branding"></p>
            <h4 class="centrau">Branding</h4>

            <p class="h3clarito margenizquierda">Creo todos los componentes necesarios para el perfecto desarrollo de la
                imagen corporativa. Logotipos, papelería, publicidad en medios, publicidad exterior...</p>
        </div>
        <!--cierre branding-->


        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

            <p class="centrau"><img src="img/webdesign.png" alt="webdesign"></p>
            <h4 class="centrau">Web design</h4>

            <p class="h3clarito margenizquierda">Diseño tu página web acorde con las nuevas tendencias y tecnologías
                personalizándolo a tus necesidades.
                Tambien creo contenido y gestiono la imagen de tu empresa en las redes sociales: Community manager.</p>
        </div>
        <!--cierre webdesing-->


    </div>
    <!-- ROW1-->


    <!--SINBOLOAK BUKATZEN DIRA-->


</div>
<!--div row2-->


</div> <!--fin div row blanco-->

</div> <!--fin div loquebuscas-->


<!-- FIN SECCION 3-->

<!--SECCION 4 (quiensoy)-->


<!--<div class="container">-->

<div class="row peter">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
         style="margin-top: -75px ;padding-right: 0px !important; padding-left: 0px !important;">

        <div id="conoceme" class="quiensoy">
            <!--la foto en el fondo de 	este div POR QUE NO SE HACE RESPONSIVE??????????-->

            <h2 class="paddingtop centrau" style="color:#fff;">- Conóceme -</h2>


        </div>
        <!--cierre conoceme-->


        <!-- </div>--> <!--fin container-->
    </div>
    <!--fin row-->
</div>
<!--fin div class azul-->

<!-- FIN SECCION 4 (loquebuscas)-->

<!--SECCION 4.2 (zein naiz)-->

<div id="conoceme" class="container">

    <div class="blanco">

        <div class="row peter">

            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <h2>Proceso creativo</h2>-->


        </div>
        <!--cierre de h2-->


        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">


            <h4 class="marra conocemetitulo">1º etapa: niñez</h4>

            <div class="conoceme">Nací en Donostia en 1989 un 11 de febrero, y aunque haya vivido aquí desde entonces y
                sea patriota donostiarra, la mitad de mí es de Azpeitia; el pueblo de mi madre.
            </div>

            <div class="conoceme">Con tres años empecé el colegio en Amara Berri y aquí encontré muchos de los amigos
                con los que hoy en día comparto todo. El instituto Peñaflorida y el bachiller humanístico en Usandizaga
                fueron la siguiente etapa que viví, donde fuí creciendo y aprendiendo.
                Casi acabando el segundo curso, enseguida <span class="negrita">me llamó la publicidad y todo lo relacionado con ella.</span>
            </div>

            <h4 class="marra conocemetitulo">2º etapa: universidad</h4>

            <div class="conoceme">Así, transcurrieron cuatro años en Bilbao, en la UPV/EHU donde además de aprender
                mucho sobre este mundo tan ámplio, tan profundo e interesante y complementar mis estudios haciendo
                prácticas en dos empresas de publicidad como <span class="negrita">Zosmamedia</span> (agencia de medios)
                y <span class="negrita">Publis</span> (agencia de publiciad); crecí como persona: la vida de estudiante,
                la convivencia...Es decir, adquirí conocimientos mientras abría mi mente hacia un mundo más ámplio.
            </div>


            <h4 class="marra conocemetitulo">3º etapa: el diseño</h4>

            <div class="conoceme">Lo que consideraría la siguiente etapa en mi vida empezó cuando me licencié en <span
                    class="negrita">Publicidad y Relaciones Públicas</span>.
            </div>

        </div>
        <!--cierre mivida-->


        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="conoceme paddingtop"> Junto con una amiga de la carrera, padecí una crisis: ¿Qué hago ahora?. En
                respuesta, decidimos complementar nuestros estudios mayormente teóricos y adentrarnos en el mundo del
                <span class="negrita">diseño gráfico.</span> Ceinpro es un lugar familiar, donde he aprendido a pensar
                diferente, a crear, a poner en práctica mis conocimientos y llevarlos a cabo.
            </div>
            <h4 class="marra conocemetitulo">4º etapa: master web</h4>

            <div class="conoceme"> Ni corta ni perezosa, he aprovechado este "crecimiento negativo de la economía" que
                nos rodea para seguir formándome. Esta vez, un master en <span class="negrita">web y multimedia.</span>
                Está claro que los tiros van hacia el mundo digital y muy a mi pesar, el mundo off line mengua para
                dejar paso al amplísimo y apasionante mundo de las nuevas tecnologías.
                Gracias a este master he podido descubrir <span class="negrita">Myruns</span>, una empresa que a lo
                largo de un año me ha dado opción a aprender mas sobre el diseño gráfico,
                web y comunicación de la "vida real" con libertad creativa y responsabilidad decisiva.
            </div>

            <h4 class="marra conocemetitulo">5º etapa: entre tanto</h4>

            <div class="conoceme">Comparto con el trabajo la labor de <span class="negrita">profesora particular</span>;
                que me encanta y me satisface al ver que mis alumnos cumplen sus objetivos. De todas maneras, todos los
                veranos desde los 16 años he trabajado en diversidad de sitios como monitora de natación en <span
                    class="negrita">Tin-Tin Zurriola</span>, donde llevo ya siete veranos (y encantadísima).
                Creo que la llave de la felicidad es trabajar cuerpo y alma. Asi que hago vida social y deporte casi
                todos los días.
            </div>


            <div class="conoceme">Soy una chica <span class="negrita">positiva y trabajadora</span> y quiero seguir
                siendo parte de este mundo.
            </div>
        </div>
        <!--cierre zein naiz-->


    </div>
    <!--div row-->

</div>
<!--fin div row blanco-->

</div> <!--fin div container-->

<!-- FIN SECCION 1-->


<?php include 'includes/footer.php'; ?>

</div> <!--cierre tamaños-->
</div> <!--cierre container-->

</div><!--footer-->

</body>


</html>
