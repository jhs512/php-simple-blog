<?php
include_once '../start.php';
?>
<?php
$_REQUEST['title'] = mysqli_real_escape_string($dbLink, $_REQUEST['title']);
$_REQUEST['body'] = mysqli_real_escape_string($dbLink, $_REQUEST['body']);
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
UPDATE article
SET title = '{$_REQUEST['title']}',
body = '{$_REQUEST['body']}'
WHERE id = '{$_REQUEST['id']}'
";
mysqli_query($dbLink, $sql);

?>
<script>
alert('<?=$_REQUEST['id']?>번 글이 수정되었습니다.');
location.replace('/article_list.php');
</script>