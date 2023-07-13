async function how_did_you_meet_us()
{
   var channel;

   // channel
   //
          if (document.getElementById('channel1').checked) {
      channel = 1;
   } else if (document.getElementById('channel2').checked) {
      channel = 2;
   } else if (document.getElementById('channel3').checked) {
      channel = 3;
   } else if (document.getElementById('channel4').checked) {
      channel = 4;
   } else {
      channel = 1;
   }

   const response = await fetch('ajax.php?do=inc_channel&channel=' + channel);
   const result = await response.text();
   // console.log(result);

   // disable radios
   //
   for (let i=1; i<=4; i++) {
      radio = document.getElementById('channel'+i);
      radio.disabled = true;
   }

   // emoji manita pulgar voladora
   //
   emoji_1 = document.getElementById('emoji_1');
   emoji_1.innerHTML = '👍';
   setTimeout(function () {
      emoji_1.classList.add('emoji_1_move');
   }, 10);
   setTimeout(function () {
      emoji_1.innerHTML = '&nbsp;';
   }, 2100);
}

async function send_contact()
{
   // email or phone
   //
   input = document.getElementById('email_or_phone');

   contact = input.value.trim();

   if (contact == '') {
      input.value = '';
      input.placeholder = 'Aquí un teléfono o email';
      setTimeout(function () {
         input.placeholder = 'Teléfono o email';
      }, 1500);
      return;
   }

   const response = await fetch('ajax.php?do=save_contact&contact=' + encodeURIComponent(contact));
   const result = await response.json();
   if (result.ok == false) {
      input.value = '';
      input.placeholder = 'Teléfono o email no válido';
      setTimeout(function () {
         input.placeholder = 'Teléfono o email';
      }, 1500);
      return;
   }

   // disable inputs
   //

   input.value = '';
   input.style.borderColor = '#d0d0d0';
   input.disabled = true;

   send_contact_button = document.getElementById('send_contact_button');
   send_contact_button.value = '¡Gracias!';
   send_contact_button.style.backgroundColor = '#a0a0a0';
   send_contact_button.style.borderColor = '#d0d0d0';
   send_contact_button.style.cursor = 'auto';
   send_contact_button.disabled = true;

   // emoji corazón
   //
   emoji_2 = document.getElementById('emoji_2');
   emoji_2.innerHTML = '❤️';
   setTimeout(function () {
      emoji_2.classList.add('emoji_2_move');
   }, 10);
   setTimeout(function () {
      emoji_2.innerHTML = '&nbsp;';
   }, 2100);
}
