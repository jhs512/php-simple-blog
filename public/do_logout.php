<?php
include_once '../start.php';

unset($_SESSION['loginedMember']);
?>
<script>
alert('로그아웃 되었습니다.');
location.replace('/');
</script>