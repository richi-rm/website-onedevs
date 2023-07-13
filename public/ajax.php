<?php

   include_once \realpath(__DIR__ . '/../src/init/init.php');

   /*
    * check 'do' parameter
    */

   if (!\array_key_exists('do', $_GET)) {
      echo \json_encode([
         'ok' => false,
         'message' => 'parameter "do" is missing'
      ]);
      die();
   }

   $do = $_GET['do'];

   $valid_actions = [
      'inc_channel',
      'save_contact'
   ];

   if (!\in_array($do, $valid_actions)) {
      echo \json_encode([
         'ok' => false,
         'message' => 'parameter "do" is not a valid action'
      ]);
      die();
   }

   /*****************************
    *
    * Execute do / action
    *
    *****************************/

   $do();
   die();

   /*
    * Functions
    */

   function inc_channel()
   {
      if (!\array_key_exists('channel', $_GET)) {
         echo \json_encode([
            'ok' => false,
            'message' => 'parameter "channel" is missing'
         ]);
         die();
      }
      $channel = (int)$_GET['channel'];
      if ($channel < 1 || $channel > 4) {
         echo \json_encode([
            'ok' => false,
            'message' => 'bad parameter: "channel"'
         ]);
         die();
      }
      $sql = "update channels set channel{$channel} = channel{$channel} + 1 where id = 1";
      $exec_query = \mysqli_query($GLOBALS['mariadb_connections']['default'], $sql);
      if ($exec_query === false) {
         echo \json_encode([
            'ok' => false,
            'message' => 'error: sql query'
         ]);
         die();
      }
      echo \json_encode([
         'ok' => true,
         'message' => 'ok'
      ]);
   }

   function save_contact()
   {
      if (!\array_key_exists('contact', $_GET)) {
         echo \json_encode([
            'ok' => false,
            'message' => 'parameter "contact" is missing'
         ]);
         die();
      }
      $contact = $_GET['contact'];
      $contact = preg_replace('/\s+/', '', $contact);
      $contact = str_replace('\'', '', $contact);
      if (
         \filter_var($contact, FILTER_VALIDATE_EMAIL) === false &&
         !preg_match('/^(\+[0-9]+)?[0-9]+$/', $contact)
      ) {
         echo \json_encode([
            'ok' => false,
            'message' => 'bad parameter: "contact"'
         ]);
         die();
      }
      $datetime = \date('T Y-m-d H:i:s A');
      $sql = "insert into contacts(contact, datetime) values('{$contact}', '{$datetime}')";
      $exec_query = \mysqli_query($GLOBALS['mariadb_connections']['default'], $sql);
      if ($exec_query === false) {
         echo \json_encode([
            'ok' => false,
            'message' => 'error: sql query'
         ]);
         die();
      }
      echo \json_encode([
         'ok' => true,
         'message' => 'ok'
      ]);
   }
