<?php
 Component::header([
  'title'=> 'Blog - Login'
 ]);

 Component::nav([
  'home' => ROUTE['home'],
  'about' => ROUTE['about'],
  'login' => ROUTE['login'],
  'register' => ROUTE['register']
 ], 'login');
