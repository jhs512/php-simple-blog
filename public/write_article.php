<?php
$pageTitle = '<i class="fa fa-pen"></i> <span>WRITE</span>';
?>
<?php include_once 'header.php'; ?>

<section class="section section-article-write con-min-width">
  <div class="con">
    <form method="POST" action="do_write_article.php">
      <div>
          <input style="width:100%; display:block;" type="text" name="title" placeholder="제목" required>
      </div>
      <hr />
      <div>
          <textarea style="width:100%; display:block;" rows="10" name="body" placeholder="내용" required></textarea>
      </div>
      <hr />
      <div>
        <a href="#" class="underline" onclick="history.back();">뒤로가기</a>
        <input class="underline" type="submit" value="작성">
      </div>
    </form>
  </div>
</div>

<?php include_once 'footer.php'; ?>
