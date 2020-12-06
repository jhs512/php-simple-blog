<?php
include_once 'db.php';
?>
<?php
$_REQUEST['title'] = mysqli_real_escape_string($dbLink, $_REQUEST['title']);
$_REQUEST['body'] = mysqli_real_escape_string($dbLink, $_REQUEST['body']);
$_REQUEST['id'] = mysqli_real_escape_string($dbLink, $_REQUEST['id']);

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