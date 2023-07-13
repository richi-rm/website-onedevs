<?php

   include_once \realpath(__DIR__ . '/../src/init/init.php');

?>
<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="images/favicon.png" type="image/png" />
      <title>OneDevs</title>
      <link rel="stylesheet" href="css/home.min.css">
   </head>

   <body>

      <header>
         <nav>
            <ul>
               <li><a href="#quienessomos">Quiénes somos</a></li>
               <li><a href="#quehacemos">Qué hacemos</a></li>
               <li><a href="#comonoshasconocido">¿Cómo nos has conocido?</a></li>
               <li><a href="#contactaconnosotros">Contacta con nosotros</a></li>
            </ul>
         </nav>
      </header>

      <main>

         <a name="logo"></a>
         <section>
            <p>
               <img class="logo" src="images/logo-onedevs-w300-h315.png" width="250" alt="OneDevs Logo" />
            </p>
         </section>

         <a name="quienessomos"></a>
         <section>
            <h1>Quiénes somos</h1>
            <p>
               Somos un grupo de profesionales apasionados de la tecnología y el
               desarrollo web.<br />
               <br />
               ¿Tu negocio necesita una web nueva o mantener la actual? ¡Cuenta
               con nosotros!
            </p>
         </section>

         <a name="quehacemos"></a>
         <section>
            <h1>Qué hacemos</h1>
            <p>
               Desarrollamos y mantenemos aplicaciones web. Estamos
               especializados en la creación de sitios web mediante PHP y
               MariaDB.<br />
               <br />
               Gestionamos desde la toma de requisitos hasta la entrega del
               proyecto y su mantenimiento.
            </p>
         </section>

         <a name="comonoshasconocido"></a>
         <section>
            <h1>Cómo nos has conocido</h1>
            <div>
               <div class="w200">
                  <ul>
                     <li><input type="radio" id="channel1" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Por el boca a boca</li>
                     <li><input type="radio" id="channel2" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Publicidad en Internet</li>
                     <li><input type="radio" id="channel3" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Publicidad impresa</li>
                     <li><input type="radio" id="channel4" name="channel" onchange="how_did_you_meet_us();">&nbsp;&nbsp;Otros</li>
                  </ul>
               </div>
            </div>
         </section>

         <a name="contactaconnosotros"></a>
         <section>
            <h1>Contacta con nosotros</h1>
            <p>
               Déjanos tu dirección de correo electrónico o un teléfono de
               contacto y te contactaremos lo antes posible.
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
            </div>
         </section>

         <section>
            <h1>Más info sobre OneDevs</h1>
            <p>
               📍 Calle Conquistador Ordoño Álvarez, 6, 1, 1, 2, 14010, Córdoba, España<br />
               <br />
               📱 +34 744 653 072<br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
               <br />
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
