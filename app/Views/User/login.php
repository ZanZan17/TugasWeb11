<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body id="login-container">
  <div id="login-wrapper">
    <h1>Sign In</h1>
    <?php if (session()->getFlashdata('flash_msg')) : ?>
      <div class="alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
    <?php endif; ?>
    <form action="" method="post">
      <div>
        <label for="InputForEmail" class="form-label">Email
          address</label>
        <input type="email" name="email" class="form-control" placeholder="Input your email" id="InputForEmail" value="<?= set_value('email') ?>">
      </div>
      <div>
        <label for="InputForPassword" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Input your password" class="form-control" id="InputForPassword">
      </div>

      <button type="submit" class="btn btn-
primary">Login</button>

      <p>Don`t have account ? <a href="">Sign Up</a></p>
    </form>
  </div>
</body>

</html>