<!doctype html>
<meta charset="utf-8">

<?php
  echo "<div align='center'>";
  for ($i = 0 ; $i < 5 ; $i++) {
    echo "<form method='POST' action='index.php'>";
    echo "<label for='chk_".$i."'>";
    echo "<input type='checkbox' class='chk' value='0' data-id='". $i. "' id='chk_".$i."'>";
    echo "</label>&nbsp;";
    echo "<input type='submit' class='delete-button' value='削除' id='sub_".$i."'><br>";
    echo "</form>";
  }
  echo "</div>";
?>
<script type=text/javascript>
$(function(){
  // 初期表示時の処理
  $('.chk').each(function(){
    // 現在のチェック状態からボタンのdisabledを切り替える
    $('#sub_' + $(this).attr('data-id')).prop('disabled', !$(this).prop('checked'));
  });
  
  // チェックされた時の処理
  $('.chk').change(function(){
    // チェックボックスの「data-id」属性の値を頼りにボタンを特定
    var $sub = $('#sub_' + $(this).attr('data-id'));
    // ボタンのdisabled属性を反転
    $sub.prop('disabled', !$sub.prop('disabled'));
  });
});
</script>