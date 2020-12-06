<?php
include_once 'db.php';
?>
<?php
$_REQUEST['title'] = mysqli_real_escape_string($dbLink, $_REQUEST['title']);
$_REQUEST['body'] = mysqli_real_escape_string($dbLink, $_REQUEST['body']);

$sql = "
INSERT INTO article
SET regDate = NOW(),
title = '{$_REQUEST['title']}',
body = '{$_REQUEST['body']}'
";
mysqli_query($dbLink, $sql);

?>
<script>
alert('새 글이 작성되었습니다.');
location.replace('/article_list.php');
</script>