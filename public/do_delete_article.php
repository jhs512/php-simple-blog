<?php
include_once 'db.php';
?>
<?php
$_REQUEST['id'] = mysqli_real_escape_string($dbLink, $_REQUEST['id']);

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