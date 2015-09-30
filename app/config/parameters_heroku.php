<?php
$db = parse_url($_ENV['CLEARDB_DATABASE_URL']);
$container->setParameter('database_driver', 'pdo_mysql');
$container->setParameter('database_host', $db['host']);
$container->setParameter('database_port', '~');
$container->setParameter('database_name', substr($url["path"], 1));
$container->setParameter('database_user', $db['user']);
$container->setParameter('database_password', $db['pass']);

file_put_contents("php://stderr", "database_host" . $db['host']);
file_put_contents("php://stderr", "database_port" . $db['port']);
file_put_contents("php://stderr", "database_name" . substr($url["path"], 1));
file_put_contents("php://stderr", "database_user" . $db['user']);
file_put_contents("php://stderr", "database_password" . $db['pass']);