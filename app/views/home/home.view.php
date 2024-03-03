<?php
 Component::header([
  'title'=> 'Blog - Home',
  'css' => VIEW_SETTINGS['HOME']['CSS']
 ]);

 Component::nav([
  'home' => ROUTE['home'],
  'about' => ROUTE['about'],
  'login' => ROUTE['login'],
  'register' => ROUTE['register']
 ]);

 Component::content($data);

