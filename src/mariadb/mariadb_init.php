<?php

   use Symfony\Component\Yaml\Yaml;

   function mariadb_read_config()
   {
      $mariadb_config_path = $GLOBALS['root_dir_path'] . '/config/mariadb_connections.yaml';
      if (!\file_exists($mariadb_config_path) || !\is_readable($mariadb_config_path)) {
         throw new \Exception("cannot read mariadb config file \"{$mariadb_config_path}\"");
      }
      $mariadb_config_connections = Yaml::parseFile($mariadb_config_path);
      return $mariadb_config_connections;
   }

   function mariadb_multi_connect($mariadb_config_connections)
   {
      $mariadb_connections = [];
      foreach ($mariadb_config_connections as $mariadb_config_connection => $mariadb_config_data) {
         $mariadb_connections[$mariadb_config_connection] = \mysqli_connect(
            $mariadb_config_data['host'],
            $mariadb_config_data['user'],
            $mariadb_config_data['pass'],
            $mariadb_config_data['db'],
            $mariadb_config_data['port']
         );
         if ($mariadb_connections[$mariadb_config_connection] === false) {
            throw new \Exception("mariadb connection \"{$mariadb_config_connection}\" failed to start");
         }
      }
      return $mariadb_connections;
   }

   $mariadb_config_connections = mariadb_read_config();
   $GLOBALS['mariadb_connections'] = mariadb_multi_connect($mariadb_config_connections);
