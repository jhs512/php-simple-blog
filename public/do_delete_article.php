<?php
include_once '../start.php';
?>
<?php
$_REQUEST['id'] = mysqli_real_escape_string($dbLink, $_REQUEST['id']);

$sql = "
SELECT * FROM article
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

$sql = "
DELETE FROM article
WHERE id = '{$_REQUEST['id']}'
";
mysqli_query($dbLink, $sql);
?>
<script>
alert('<?=$_REQUEST['id']?>번 글이 삭제되었습니다.');
location.replace('/article_list.php');
</script>