<?php

   include_once \realpath(__DIR__ . '/../src/init/init.php');

?>
<!DOCTYPE html>

<html lang="es">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="images/favicon.png" type="image/png" />
      <title>OneDevs - Developing Digital Solutions</title>
      <link rel="stylesheet" href="css/home.min.css">
   </head>

   <body>

      <header>

         <nav class="menu">
            <ul>
               <li><a href="#inicio">Inicio</a></li>
               <li><a href="#quienessomos">Quiénes somos</a></li>
               <li><a href="#quehacemos">Qué hacemos</a></li>
               <li><a href="#trabajadopara">Hemos trabajado para</a></li>
               <li><a href="#comonoshasconocido">¿Cómo nos has conocido?</a></li>
               <li><a href="#contactaconnosotros">Contacta con nosotros</a></li>
            </ul>
         </nav>

      </header>

      <main>

         <a class="anchor" name="inicio"></a>
         <section>
            <h1>
               &nbsp;
            </h1>
            <div>
               <img class="logo-onedevs" src="images/logo-onedevs-w300-h315.png" width="250" alt="OneDevs Logo" />
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
               especializados en la creación de sitios web mediante PHP,
               MariaDB y JavaScript.<br />
               <br />
               Gestionamos <b>desde la toma de requisitos hasta la entrega final
               del proyecto</b> y su mantenimiento.
            </p>
         </section>

         <a class="anchor" name="trabajadopara"></a>
         <section>
            <h1>
               Hemos trabajado para :
            </h1>
            <div class="worked-for">
               <div class="logo-company">
                  <img src="images/logo-ccep-w500-h300.png" width="250" alt="Coca-Cola Europacific Partners">
               </div>
            </div>
            <div class="worked-for">
               <div class="logo-company">
                  <img src="images/logo-bbva-w500-h300.png" width="250" alt="BBVA">
               </div>
            </div>
            <div class="worked-for">
               <div class="logo-company">
                  <img src="images/logo-mapfre-w500-h300.png" width="250" alt="Mafre">
               </div>
            </div>
            <div class="worked-for">
               <div class="logo-company">
                  <img src="images/logo-aecc-w500-h300.png" width="250" alt="AECC">
               </div>
            </div>
            <div class="worked-for">
               <div class="logo-company">
                  <img src="images/logo-aldeasinfantiles-w500-h300.png" width="250" alt="Aldeas Infantiles">
               </div>
            </div>
         </section>

         <a class="anchor" name="comonoshasconocido"></a>
         <section>
            <h1>
               ¿Cómo nos has conocido?
            </h1>
            <div class="how-did-you-meet-us">
               <ul>
                  <li><input type="radio" id="channel1" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Por un conocido/a o amigo/a</li>
                  <li><input type="radio" id="channel2" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Publicidad en Internet</li>
                  <li><input type="radio" id="channel3" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Publicidad impresa</li>
                  <li><input type="radio" id="channel4" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Otros</li>
               </ul>
            </div>
            <div id="emoji_1">&nbsp;</div>
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
            <div class="contact">
               <form>
                  <input type="text" id="email_or_phone" placeholder="Teléfono o email" />
                  <br />
                  <br />
                  <input type="button" id="send_contact_button" value="Enviar" onclick="send_contact();" />
               </form>
            </div>
            <div id="emoji_2">&nbsp;</div>
         </section>

         <section>
            <h1>Más info sobre OneDevs</h1>
            <p>
               📍 <u>Dirección</u>:<br />
               Calle Conquistador Ordoño Álvarez,<br />
               6, 1, 1, 2, 14010, Córdoba, España.<br />
               <br />
               📱 <u>Teléfono móvil</u>:<br />
               +34 744 653 072
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
