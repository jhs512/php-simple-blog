<?php
$pageTitle = '<i class="fas fa-sign-in-alt"></i> <span>LOGIN</span>';
?>
<?php include_once 'header.php'; ?>

<section class="section section-article-write con-min-width">
  <div class="con">
    <form method="POST" action="do_login.php">
      <div>
          <input style="width:100%; display:block;" type="text" name="loginId" placeholder="로그인아이디" required>
      </div>
      <hr />
      <div>
          <input style="width:100%; display:block;" type="password" name="loginPw" placeholder="로그인아이디" required>
      </div>
      <hr />
      <div>
        <a href="#" class="underline" onclick="history.back();">뒤로가기</a>
        <input class="underline" type="submit" value="로그인">
      </div>
    </form>
  </div>
</div>

<?php include_once 'footer.php'; ?>
