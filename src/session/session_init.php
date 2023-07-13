<?php

   use Symfony\Component\Yaml\Yaml;

   function session_read_config()
   {
      $session_config_path = $GLOBALS['root_dir_path'] . '/config/session.yaml';
      if (!\file_exists($session_config_path) || !\is_readable($session_config_path)) {
         throw new \Exception("cannot read session config file \"{$session_config_path}\"");
      }
      $session_config = Yaml::parseFile($session_config_path);
      return $session_config;
   }

   $session_config = session_read_config();
   \session_name($session_config['session_name']);
   \session_start();
