<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
 <div class="container py-0">
  <a href="<?=ROUTE['home']?>" class="navbar-brand">
   <img src="<?=VIEW_SETTINGS['LOGO']?>" alt="">
   <span class="fw-bold">
    B<span class="text-dark lead">log</span>
   </span>
  </a>
  <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mobile-nav">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="mobile-nav">
   <ul class="navbar-nav ms-auto">
    <?php foreach($links as $link => $route): ?>
     <a href="<?=$route?>" class="nav-link <?=$active === $link ? 'active': '';?>">
      <?=ucfirst($link)?>
     </a>
    <?php endforeach ?>
   </ul>
  </div>
 </div>
</nav>