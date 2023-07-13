<?php

   use Symfony\Component\Yaml\Yaml;

   function datetime_read_config()
   {
      $datetime_config_path = $GLOBALS['root_dir_path'] . '/config/datetime.yaml';
      if (!\file_exists($datetime_config_path) || !\is_readable($datetime_config_path)) {
         throw new \Exception("cannot read datetime config file \"{$datetime_config_path}\"");
      }
      $datetime_config = Yaml::parseFile($datetime_config_path);
      return $datetime_config;
   }

   $datetime_config = datetime_read_config();
   \date_default_timezone_set($datetime_config['timezone']);
