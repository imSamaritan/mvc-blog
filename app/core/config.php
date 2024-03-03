<?php
//Global root url
define("ROOT", "http://localhost/blog/public");
//Views settings
define("VIEW_SETTINGS", [
 "LOGO" => ROOT."/assets/img/logo/blog-trans-logo.png",
 "GLOBAL_CSS" => ROOT."/assets/css/global.css",
 "BOOTSTRAP_CSS" => ROOT."/assets/lib/bootstrap/css/bootstrap.min.css",
 "BOOTSTRAP_JS" => ROOT."/assets/lib/bootstrap/js/bootstrap.bundle.min.js",
 "HOME" => [
  "CSS" => ROOT."/assets/css/home.css"
 ] 
]);

//Database config
define("DB_CONFIG", [
 "HOST" => "localhost",
 "USER" => "root",
 "PASS" => "617808",
 "DBNAME" => ""
]);

//ROUTING URLs
define("ROUTE", [
 "home" => ROOT."/",
 "about" => ROOT."/about",
 "register" => ROOT."/register",
 "login" => ROOT."/login",
]);

define('HTTP_ENDPOINT', [
 'login' => ROOT."/login/auth"
]);

/**
 * SETTINGS FOR REQUIRING A NESTED MODEL
 * 
 * $model = $this->model([
 *  'dirname' => 'home/user',
 *  'file' => 'user'
 * ], optionalContructorParams)
 * 
 */
