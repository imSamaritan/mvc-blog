<?php 
 Component::header([
  'title' => 'Blog - About Us'
 ]);

 Component::nav([
  'home' => ROUTE['home'],
  'about' => ROUTE['about'],
  'login' => ROUTE['login'],
  'register' => ROUTE['register']
 ], 'about');


?>

<div class="container mt-5">
 <h1>About Component View</h1>
</div>