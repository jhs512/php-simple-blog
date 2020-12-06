<?php
$pageTitle = '<i class="far fa-edit"></i> <span>EDIT</span>';
?>
<?php include_once 'header.php'; ?>

<?php
$_REQUEST['id'] = mysqli_real_escape_string($dbLink, $_REQUEST['id']);

$sql = "
SELECT *
FROM article
WHERE id = '{$_REQUEST['id']}'
";
$rs = mysqli_query($dbLink, $sql);
$article = mysqli_fetch_assoc($rs);

if ( App__actorCanModify($article) == false ) {
  ?>
  <script>
  alert('권한이 없습니다.');
  history.back();
  </script>
  <?php
  exit;
}
?>

<section class="section section-article-modify con-min-width">
  <div class="con">
    <form method="POST" action="do_modify_article.php">
      <input type="hidden" name="id" value="<?=$article['id']?>">
      <div>
          <input style="width:100%; display:block;" type="text" name="title" placeholder="제목" value="<?=$article['title']?>" required>
      </div>
      <hr />
      <div>
          <textarea style="width:100%; display:block;" rows="10" name="body" placeholder="내용" required><?=$article['body']?></textarea>
      </div>
      <hr />
      <div>
        <a href="#" class="underline" onclick="history.back();">뒤로가기</a>
        <input class="underline" type="submit" value="수정">
      </div>
    </form>
  </div>
</div>

<?php include_once 'footer.php'; ?>