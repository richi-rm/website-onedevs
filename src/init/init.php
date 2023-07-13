<?php

   $GLOBALS['root_dir_path'] = \realpath(__DIR__ . '/../../');
   include_once $GLOBALS['root_dir_path'] . '/src/errors/show_errors.php';
   include_once $GLOBALS['root_dir_path'] . '/vendor/autoload.php';
   include_once $GLOBALS['root_dir_path'] . '/src/datetime/datetime_init.php';
   include_once $GLOBALS['root_dir_path'] . '/src/session/session_init.php';
   include_once $GLOBALS['root_dir_path'] . '/src/mariadb/mariadb_init.php';
