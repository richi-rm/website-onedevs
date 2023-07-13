async function how_did_you_meet_us()
{
   var channel;

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
   for (let i=1; i<=4; i++) {
      radio = document.getElementById('channel'+i);
      radio.disabled = true;
   }
}

async function send_contact()
{
   contact = document.getElementById('email_or_phone').value.trim();
   if (contact == '') return;
   document.getElementById('email_or_phone').value = '';

   const response = await fetch('ajax.php?do=save_contact&contact=' + contact);
   const result = await response.text();
   // console.log(result);

   // disable inputs
   document.getElementById('email_or_phone').disabled = true;
   document.getElementById('email_or_phone').style.borderColor = '#d0d0d0';
   document.getElementById('send_contact_button').disabled = true;
   document.getElementById('send_contact_button').style.backgroundColor = '#a0a0a0';
   document.getElementById('send_contact_button').style.borderColor = '#d0d0d0';
   document.getElementById('send_contact_button').style.cursor = 'auto';
}
