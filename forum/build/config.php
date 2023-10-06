<?php return array (
  'debug' => false,
  'database' => 
    array (
      'driver' => 'mysql',
      'host' => 'mariadb',
      'port' => 3306,
      'database' => getenv('DB_DATABASE'),
      'username' => getenv('DB_USER'),
      'password' => trim(file_get_contents(getenv('DB_PASSWORD_FILE'))),
      'charset' => 'utf8mb4',
      'collation' => 'utf8mb4_unicode_ci',
      'prefix' => '',
      'strict' => false,
      'engine' => 'InnoDB',
      'prefix_indexes' => true,
    ),
  'url' => 'https://dev.lesitedecuisine.fr',
  'paths' => 
    array (
      'api' => 'api',
      'admin' => 'admin',
    ),
  'headers' => 
    array (
      'poweredByHeader' => true,
      'referrerPolicy' => 'same-origin',
    ),
);
