<?php
include_once '../start.php';
?>
<?php
$_REQUEST['loginId'] = mysqli_real_escape_string($dbLink, $_REQUEST['loginId']);

$sql = "
SELECT * FROM member
WHERE loginId = '{$_REQUEST['loginId']}'
";
$rs = mysqli_query($dbLink, $sql);
$member = mysqli_fetch_assoc($rs);

if ( $member === null ) {
  ?>
  <script>
  alert('존재하지 않는 로그인 아이디 입니다.');
  history.back();
  </script>
  <?php
  exit;
}

if ( $member['loginPw'] !== $_REQUEST['loginPw'] ) {
  ?>
  <script>
  alert('비밀번호가 일치하지 않습니다.');
  history.back();
  </script>
  <?php
  exit;
}

$_SESSION['loginedMember'] = $member;
?>
<script>
alert('로그인 되었습니다.');
location.replace('/');
</script>