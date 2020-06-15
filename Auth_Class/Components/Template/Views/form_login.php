
      <h1 style="margin-top: 150px;">Login here</h1>

      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
      <input type="email" name="email" placeholder="e-mail" value="<?php 
      if(isset($_SESSION['email'])) echo $_SESSION['email']; else unset($_SESSION['email']) ?>" required><br>

      <input name="pass" class="my-3" id="userfile" placeholder="password" value="<?php 
      if(isset($_SESSION['pass'])) echo $_SESSION['pass']; else unset($_SESSION['pass']) ?>" type="password"><br>

      <input class="btn btn-primary" type="submit" name="submit" value="Log in">
      </form>

      <span>You do not have an account? <a href="<?= $_SERVER['PHP_SELF'] ?>?action=go_register">Registration</a></span> 

      <div>
      <?php if(isset($_SESSION['err'])){
        echo "<span class='bg-danger text-light px-2'>$_SESSION[err]</span>";
      }  else unset($_SESSION['err']) ?>
      </div>

