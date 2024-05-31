<?php
session_start(); 

require 'vendor/autoload.php';


Dotenv\Dotenv::createImmutable(__DIR__)->load();

echo '<pre>';

print_r($_SERVER['REQUEST_URI']);
die;

require_once __DIR__ . './routes/index.php';
