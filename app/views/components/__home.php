<div class="container mt-5">
 <div class="row mt-5">
  <div class="col-lg-6 col-xsm-12 mt-5 text-center text-left-lg">
   <div class="logo-banner">
    <img src="<?=VIEW_SETTINGS['LOGO']?>" class="w-50" alt="Blog">
   </div>
   <p class="lead fs-4 intro-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet consequuntur explicabo ducimus officia maxime?</p>
  </div>
  <div class="col-lg-5 col-xsm-12 mt-5">
   <div class="card">
    <form action="<?=HTTP_ENDPOINT['login']?>" method="POST" class="m-2">
     <div class="my-4">
      <label for="email" class="form-label">Email address</label>
      <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="imsamaritan@blog.blogpost">
     </div>
     <div class="my-4">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="********">
     </div>
     <div class="my-4">
      <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary w-100 fw-bold">
     </div>
     <div class="my-4 text-center">
      <a href="" class="link">Forgotten password?</a>
     </div>
     <hr>
     <div class="my-4 text-center">
      <a href="<?=ROUTE['register']?>" class="btn btn-lg btn-success w-50 fw-bold">Create new account</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>