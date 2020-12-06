<?php
$pageTitle = '<i class="fas fa-list"></i> <span>LIST</span>';
?>
<?php include_once 'header.php'; ?>

<?php
$sql = "
SELECT *
FROM article
ORDER BY id DESC
";
$rs = mysqli_query($dbLink, $sql);
$rows = [];
while ( $row = mysqli_fetch_assoc($rs) ) {
	$rows[] = $row;
}
?>	
<?php foreach ( $rows as $row ) { ?>
<section class="section section-article-list con-min-width">
  <div class="con">
    <div>
      번호 : <a class="hover-underline" href="article_detail.php?id=<?=$row['id']?>"><?=$row['id']?></a>
    </div>
    <div>
      날짜 : <?=$row['regDate']?>
    </div>
    <div>
      제목 : <a class="hover-underline" href="article_detail.php?id=<?=$row['id']?>"><?=$row['title']?></a>
    </div>
    <div>
      <?php if ( App__actorCanDelete($row) ) { ?>
      <a href="javascript:;" onclick="if ( confirm('삭제하시겠습니까?') ) { location.replace('/do_delete_article.php?id=<?=$row['id']?>'); };" class="underline">삭제</a>
      <?php } ?>
      <?php if ( App__actorCanModify($row) ) { ?>
      <a href="/modify_article.php?id=<?=$row['id']?>" class="underline">수정</a>
      <?php } ?>
    </div>
    <hr />
  </div>
</section>
<?php } ?>
<?php include_once 'footer.php'; ?>