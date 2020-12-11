<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>login</title>
  <?= $this->include('template/frontend/login/css'); ?>
</head>

<body>

  <form action="<?php echo base_url('User/proses_login') ?>" method="post" class="form" id="form" style="background-image: linear-gradient(to bottom, #00c6fb 0%, #005bea 100%);">
    <div class="text-center mb-3">
      <img src="/img/logo.png" alt="...">
    </div>
    <div class="field email">
      <div class="icon"></div>
      <input class="input" id="email" type="email" name="email" placeholder="Email" autocomplete="off" />
    </div>
    <div class="field password">
      <div class="icon"></div>
      <input class="input" id="password" type="password" name="password" placeholder="Password" />
    </div>
    <button class="button" id="submit" type="submit">LOGIN
      <div class="side-top-bottom"></div>
      <div class="side-left-right"></div>
    </button><small><a class="text-white" href="/register">Register !?</a></small>
  </form>
  <?= $this->include('template/frontend/login/js'); ?>

</body>

</html>