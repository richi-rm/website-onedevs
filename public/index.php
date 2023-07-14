<?php

   include_once \realpath(__DIR__ . '/../src/init/init.php');

?>
<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="images/favicon.png" type="image/png" />
      <title>OneDevs - Developing Digital Solutions</title>
      <link rel="stylesheet" href="css/home.min.css">
   </head>

   <body>

      <header>

         <div>
            <div><a href="#inicio">Inicio</a></div>
            <div><a href="#quienessomos">Quiénes somos</a></div>
            <div><a href="#quehacemos">Qué hacemos</a></div>
            <div><a href="#trabajadopara">Hemos trabajado para</a></div>
            <div><a href="#comonoshasconocido">¿Cómo nos has conocido?</a></div>
            <div><a href="#contactaconnosotros">Contacta con nosotros</a></div>
         </div>

      </header>

      <main>

         <a class="anchor" name="inicio"></a>
         <section class="logo">
            <div class="logo">
               <img class="logo" src="images/logo-onedevs-w300-h315.png" width="250" alt="OneDevs Logo" />
            </div>
         </section>

         <a class="anchor" name="quienessomos"></a>
         <section>
            <h1>
               Quiénes somos
            </h1>
            <p>
               Somos un grupo de <b>profesionales apasionados de la
               tecnología</b> y el desarrollo web.<br />
               <br />
               ¿Tu negocio / empresa / organización necesita una nueva web o
               mantener la actual? <b>¡Cuenta con nosotros!</b>
            </p>
         </section>

         <a class="anchor" name="quehacemos"></a>
         <section>
            <h1>
               Qué hacemos
            </h1>
            <p>
               <b>Desarrollamos y mantenemos aplicaciones web</b>. Estamos
               especializados en la creación de sitios web mediante PHP y
               MariaDB.<br />
               <br />
               Gestionamos <b>desde la toma de requisitos hasta la entrega final
               del proyecto</b> y su mantenimiento.
            </p>
         </section>

         <a class="anchor" name="trabajadopara"></a>
         <section>
            <h1>
               Hemos trabajado para
            </h1>
            <div>
               <div class="workedfor">
                  <div class="logo"><img src="images/logo-ccep-w500-h300.png" width="300" alt="Coca-Cola Europacific Partners"></div>
                  <div class="text">
                     Desarrollo de webs públicas para <u>promociones comerciales
                     de bebidas energéticas</u>.
                  </div>
               </div>
            </div>
            <div>
               <div class="workedfor">
                  <div class="logo"><img src="images/logo-bbva-w500-h300.png" width="300" alt="BBVA"></div>
                  <div class="text">
                     Desarrollo de <u>aplicación interna en WordPress</u>, para
                     el Banco.
                  </div>
               </div>
            </div>
            <div>
               <div class="workedfor">
                  <div class="logo"><img src="images/logo-mapfre-w500-h300.png" width="300" alt="Mafre"></div>
                  <div class="text">
                     Desarrollo de <u>evolutivos para webs internas</u>.
                  </div>
               </div>
            </div>
            <div>
               <div class="workedfor">
                  <div class="logo"><img src="images/logo-aecc-w500-h300.png" width="300" alt="AECC"></div>
                  <div class="text">
                     <u>Mantenimiento de su web pública principal</u>.
                  </div>
               </div>
            </div>
            <div>
               <div class="workedfor">
                  <div class="logo"><img src="images/logo-aldeasinfantiles-w500-h300.png" width="300" alt="Aldeas Infantiles"></div>
                  <div class="text">
                     Desarrollo con Symfony y mantenimiento de <u>web de gestión
                     del personal de la Empresa</u>.
                  </div>
               </div>
            </div>
         </section>

         <a class="anchor" name="comonoshasconocido"></a>
         <section>
            <h1>¿Cómo nos has conocido?</h1>
            <div>
               <div class="w260">
                  <ul>
                     <li><input type="radio" id="channel1" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Por un conocido/a o amigo/a</li>
                     <li><input type="radio" id="channel2" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Publicidad en Internet</li>
                     <li><input type="radio" id="channel3" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Publicidad impresa</li>
                     <li><input type="radio" id="channel4" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Otros</li>
                  </ul>
               </div>
               <div id="emoji_1">&nbsp;</div>
            </div>
         </section>

         <a class="anchor" name="contactaconnosotros"></a>
         <section>
            <h1>Contacta con nosotros</h1>
            <p>
               ¿Tu negocio tiene alguna necesidad digital?<br />
               <br />
               Déjanos un teléfono de contacto o una dirección de correo
               electrónico y te llamaremos lo antes posible.<br />
               <br />
            </p>
            <div>
               <div class="w250">
                  <form class="contact">
                     <input type="text" id="email_or_phone" placeholder="Teléfono o email" />
                     <br />
                     <br />
                     <input type="button" id="send_contact_button" value="Enviar" onclick="send_contact();" />
                  </form>
               </div>
               <div id="emoji_2">&nbsp;</div>
            </div>
         </section>

         <section>
            <h1>Más info sobre OneDevs</h1>
            <p>
               📍 Calle Conquistador Ordoño Álvarez, 6, 1, 1, 2, 14010, Córdoba, España<br />
               <br />
               📱 +34 744 653 072
            </p>
         </section>

         <section>
            <h1>&nbsp;</h1>
            <p>
               &nbsp;
            </p>
         </section>

      </main>

      <footer>
         <p>
            &copy; 2023 OneDevs&nbsp;&nbsp;&nbsp;
            Política de Privacidad&nbsp;&nbsp;&nbsp;
            Política de Cookies&nbsp;&nbsp;&nbsp;
         </p>
      </footer>

      <script src="js/home.js"></script>

   </body>

</html>
