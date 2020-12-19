<?php
$pageTitle = '<i class="fa fa-pen"></i> <span>WRITE</span>';
?>
<?php include_once 'header.php'; ?>

<?php
if ( App__actorIsLogined() == false ) {
  ?>
  <script>
  alert('권한이 없습니다.');
  history.back();
  </script>
  <?php
  exit;
}
?>
<?php include_once 'toast_ui.php'; ?>
<script>
var submitWriteFormDone = false;

function submitWriteForm(form) {
  if ( submitWriteFormDone ) {
    return;
  }

  form.title.value = form.title.value.trim();

  if ( form.title.value.length == 0 )
  {
    alert('제목을 입력해주세요.');
    form.title.focus();

    return false;
  }

  var editor = $('#editor-1').data('toast-editor');

  var body = editor.getMarkdown().trim();

  if ( body.length == 0 )
  {
    alert('본문을 입력해주세요.');
    editor.focus();

    return false;
  }

  form.body.value = body;

  form.submit();

  submitWriteFormDone = true;
}
</script>
<section class="section section-article-write con-min-width">
  <div class="con">
    <form method="POST" action="do_write_article.php" onsubmit="submitWriteForm(this); return false;">
      <input type="hidden" name="body">
      <div>
          <input style="width:100%; display:block;" type="text" name="title" placeholder="제목">
      </div>
      <hr />
      <div>
          <script type="text/x-template"></script>
          <div id="editor-1"></div>
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
